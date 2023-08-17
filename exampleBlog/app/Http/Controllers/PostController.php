<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct(){

    }

    // Action index (use get)
    public function list(){
        return view('index');
    }

    // Action show-form-create (use get)
    public function ShowCreate(){
        return view('create');
    }

    // Action HandleCreate (use post)
    public function HandleCreate(){
        redirect(route('create'));
    }

    // Action detail (use get)
    public function getdetail($id){
        return 'Detail '.$id;
    }

    // Action show-form-update (use get)
    public function Update($id){
        return view('update', compact('id'));
    }

    // Action HandleUpdate (use post)
    public function HandleUpdate($id){
        redirect(route('update'));
    }

    // Action Delete (use post)
    public function delete($id){
        return "Delete ".$id;
    }
};
