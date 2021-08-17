<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostCrd ;





////CRUD
Route ::get('/posts_data', [PostCrd::class , 'data_insert_view'])->name('data.pos');
Route ::post('/posts_data', [PostCrd::class , 'data_insert'])->name('data.post');
Route ::get('/add-post', [PostCrd::class , 'addpost'])->name('post.data');
Route ::get('/posts_/{id}', [PostCrd::class , 'getpostById'])->name('post.byid');
Route ::get('/delete-post/{id}', [PostCrd::class, 'deletePost'])->name('post.delete');
Route ::get('/edit-post/{id}', [PostCrd::class, 'editpost'])->name('post.edit');
Route ::post('/update-post', [PostCrd::class, 'updatepost'])->name('post.update');