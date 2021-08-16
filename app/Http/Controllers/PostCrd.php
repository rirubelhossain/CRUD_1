<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
class PostCrd extends Controller
{   
    public function data_insert_view()
    {
        return view('CRUD.data_insert');
    }
    public function data_insert(Request $request)
    {
        DB::table('post_cruds')->insert([
            'title' =>$request->title ,
            'body' =>$request->body 
        ]);
        return back()->with('data_insert','Data has been inserted!');
    }
    public function addpost()
    {
        $posts = DB::table('post_cruds')->get() ;
        return view('CRUD.addpost', compact('posts'));
    }
    public function getpostById($id)
    {
        $posts = DB :: table('post_cruds')->where('id', $id)->first();
        return view('CRUD.single-post', compact('posts'));
    }
    public function deletePost($id)
    {
        DB::table('post_cruds')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully!');
    }
    public function editpost($id)
    {   
        $posts = DB :: table('post_cruds')->where('id',$id)->first();
        return view('CRUD.edit-post', compact('posts'));
    }
    public function updatepost(Request $request)
    {
        DB::table('post_cruds')->where('id',$request->id)->update([
            'title' =>$request->title ,
            'body' =>$request->body
        ]);
        return back()->with('post_updated','Post has been updated successfully!');
    }
    ///The end 
}
