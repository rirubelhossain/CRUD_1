<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CrudController ;
use App\http\Controllers\PostCrd ;


Route :: get('/', function(){
    return view('datainsert');// this is table view page 
});
Route :: post('/posts', [CrudController::class, 'datainsert'])->name('datainsert') ;// post route 
Route :: get('/posts', [CrudController::class,'getdata'])->name('getdata');  
Route :: get('/view-page/{{id}}',[CrudController::class, 'view_page'])->name('view.page');
Route :: get('/delete-post/{id}',[CrudController::class, 'deletepost'])->name('delete.post');



////CRUD
Route ::get('/posts_data', [PostCrd::class , 'data_insert_view'])->name('data.pos');
Route ::post('/posts_data', [PostCrd::class , 'data_insert'])->name('data.post');
Route ::get('/add-post', [PostCrd::class , 'addpost'])->name('post.data');
Route ::get('/posts_/{id}', [PostCrd::class , 'getpostById'])->name('post.byid');
Route ::get('/delete-post/{id}', [PostCrd::class, 'deletePost'])->name('post.delete');
Route ::get('/edit-post/{id}', [PostCrd::class, 'editpost'])->name('post.edit');
Route ::post('/update-post', [PostCrd::class, 'updatepost'])->name('post.update');