<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\BlogModel;

class BlogController extends Controller
{
    function add_blog(){
        return view('admin.add_blog');
    }

    function store_blog(Request $request){
        $request->validate([
            'blog_title'=>'required',
            'cover_photo'=>'required',
            'blog_content'=>'required'
        ],[
            'blog_title.required'=>'Blog Title Field Required',
            'cover_photo.required'=>'Please Select Cover Photo',
            'blog_content.required'=>'Blog Content Field Required'
        ]);
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->blog_title)));
        $bm = new BlogModel();

        if($request->hasfile('cover_photo')) {
            $image = $request->file('cover_photo');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/blog/', $image_name);
            $bm->cover_photo = $image_name;
        }
        $bm->slug = $slug;
        $bm->blog_title = $request->blog_title;
        $bm->blog_content = $request->blog_content;
        $bm->save();
        return redirect('blog-list')->with('added', 'New Blog Has Been Created');
    }

    function blog_list(){
        $bm = BlogModel::all();
        return view('admin.blog_list', compact('bm'));
    }

    function blog_delete($slug){
        $bm = BlogModel::where(['slug'=>$slug])->first();
        $bm->delete();
        return redirect('blog-list')->with('delete', 'Blog Has Been Deleted');
    }

    function blog_edit($slug){
        $bm = BlogModel::where(['slug'=>$slug])->first();
        return view('admin.blog_edit', compact('bm'));
    }

    function blog_update(Request $request){
        $request->validate([
            'blog_title'=>'required',
            'blog_content'=>'required'
        ],[
            'blog_title.required'=>'Blog Title Field Required',
            'blog_content.required'=>'Blog Content Field Required'
        ]);

        $bm = BlogModel::where(['slug'=>$request->hidden_slug])->first();

        if($request->hasfile('cover_photo')) {
            $image = $request->file('cover_photo');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/blog/', $image_name);
            $bm->cover_photo = $image_name;
        }
        if($bm->slug == ''){
            $bm->slug =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->blog_title)));;
        }else{
            $bm->slug =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->blog_title)));
        }
        $bm->blog_title = $request->blog_title;
        $bm->blog_content = $request->blog_content;
        $bm->save();
        return redirect('blog-list')->with('updated', 'Blog Has Been Updated');
    }
}
