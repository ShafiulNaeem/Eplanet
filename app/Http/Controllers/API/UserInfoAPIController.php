<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserInfoAPIController extends Controller
{
    /**
     * @param Request $request
     * @return bool
     */
    public function getUser(Request $request): bool
    {
        $user = User::where('email', $request->email)->first();

        return ($user && Hash::check($request->password, $user->password)) ;
    }


    public function createUser(Request $request)
    {
        $validation = $this->validateData($request);
        try {
            return ($validation && User::create($validation));
        } catch (\Exception $exception){
            return false;
        }
    }


    private function validateData(Request $request){
        if (
            ! empty($request->fname) &&
            ! empty($request->lname) &&
            ! empty($request->email) &&
            ! empty($request->phone) &&
            ! empty($request->password)
        ) return [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'is_verified' => 1,
            'email_verified_at' => date('Y-m-d H:m:s'),
            'verification_code' => sha1(time())
        ];
        return false;
    }
}
