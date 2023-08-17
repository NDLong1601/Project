<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::prefix('/post')->group(function(){

    // Hiển thị danh sách các bài post trong blog
    Route::get('/index',[PostController::class,'list'])
        ->name('post.list');

    // Hiển thị form để thêm mới 1 post
    Route::get('/create',[PostController::class,'ShowCreate'])
        ->name('post.create');

    // Nhận dữ liệu từ post bắn về form
    Route::post('/create',[PostController::class,'HandleCreate']);

    // Hiển thị chi tiết của 1 post theo id
    Route::get('/detail/{id}',[PostController::class,'getdetail'])
        ->where('id','[0-9]+')
        ->name('post.detail');

    // Hiển thị form cập nhật nội dung post theo id post
    Route::get('/update/{id?}',[PostController::class,'Update'])
        ->where('id','[0-9]+')
        ->name('post.update');

    // Nhận dữ liệu cập nhật nội dung post từ form theo id post
    Route::post('/update/{id?}',[PostController::class,'HandleUpdate'])
        ->where('id','[0-9]+')
        ->name('post.handleupdate');

    // Xóa 1 post theo id
    Route::get('/delete/{id?}', [PostController::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('post.delete');

});

