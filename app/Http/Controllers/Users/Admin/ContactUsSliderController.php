<?php

namespace App\Http\Controllers\Users\Admin;

use App\Models\ContactUsSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\DeleteFile;

class ContactUsSliderController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact.manage', [
            'sliders' => ContactUsSlider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'slider_media' => 'required',
            'for' => 'required',
            'status' => 'required',
        ));

        if($request->hasFile('slider_media')){
            $files = $request->file('slider_media');
            foreach ($files as $file){
                $productImages = new ContactUsSlider();
                $filename = time() .  $file->getClientOriginalName() ;
                $fileType = strstr($file->getMimeType(), '/', true);
                $type = strstr($file->getMimeType(), '/');
                ( strcmp($fileType, 'video') )  ?
                $file->move(public_path('images'), $filename) : $file->move(public_path('videos'), $filename);

                $productImages->slider_media = $filename;
                $productImages->for = $request->input('for');
                $productImages->status = $request->input('status');
                $productImages->type = $fileType;
                $productImages->file_type = ltrim($type, '/');
                $productImages->save();
                $productImages = null;
            }
        }

        return redirect()->route('contactusslider.index')->with('success', 'Slider Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUsSlider  $contactUsSlider
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUsSlider $contactUsSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUsSlider  $contactUsSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUsSlider $contactUsSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUsSlider  $contactusslider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, ContactUsSlider $contactusslider)
    {
        if( self::changeStatus($request->status, 'App\Models\ContactUsSlider', $request->id) )
            return redirect()->back()->with('success', 'Status Changed');
        return  redirect()->back()->with('error', 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUsSlider  $contactusslider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ContactUsSlider $contactusslider)
    {
        ( strcmp('video', $contactusslider->type) )?
        self::deleteFile(public_path('images') . $contactusslider->slider_media) :
        self::deleteFile(public_path('videoss') . $contactusslider->slider_media) ;

        return ($contactusslider->delete())? redirect()->route('contactusslider.index')->with('info', 'Slider Deleted') :
            redirect()->route('contactusslider.index')->with('error', 'Something went wrong');
    }
}
