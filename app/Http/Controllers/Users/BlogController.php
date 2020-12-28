<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Coment;
use Illuminate\Http\Request;
use App\Helper\DeleteFile;
use Illuminate\Support\Facades\Auth;
use Session;

class BlogController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('user')->orderBy('created_at','DESC')->get();
        //dd($blogs);
        return view('admin.blog.manage',compact('blogs'));
    }

    public function allBog()
    {
        $blogs = Blog::with('user')->where('status',1)->orderBy('created_at','DESC')->get();
        //dd($blogs);
        return view('pages.all_blogs',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blog_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog)
    {
        $this->validate($request, array(
            'post' => ['required', 'string', 'max:255'],
            'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ));


        $user_id = Auth::user()->id;
        //dd($user_id);
        $blog->user_id = $user_id;
        $blog->post = $request->post;

        if($request->hasFile('blog_image')){
            $image = request()->file('blog_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->blog_image->move(public_path('images'), $filename);
            $blog->blog_image= $filename;
            $blog->save();
        };

        if($blog->save()){
            Session::flash('success','Post Created Successfully');
            return redirect()->route('blog.allBog');
        } else {
            Session::flash('success','Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::with('user','coments')->where('id',$id)->get();
        $comments = Coment::with('user')->where('blog_id',$id)->get();
        //dd($comments);

        return view('pages.blog_details',compact(
            'blogs',
            'comments'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ( ! self::deleteFile( public_path('images/' . $blog->blog_image) ) )
            return redirect()->back()->with('error','Something went wrong');
        $blog->delete();
        return redirect()->back();
    }

    // Blog Approved
    public function change(Request $request)
    {
        if( self::changeStatus($request->status, 'App\Models\Blog', $request->id) )
            return redirect()->back()->with('success', 'Status Changes');
        return  redirect()->back()->with('error', 'Something went wrong');
    }
}
