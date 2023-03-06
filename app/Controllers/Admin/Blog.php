<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Blog extends BaseController
{
    public function index()
    {
        echo '<h2>A list of blog posts</h2>';
        //return view('shop');
    }

    public function createNew(){
        //echo '<h2>Show all users</h2>';
       
         return view('blog_form');
    }

    public function saveBlog(){
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
         return view('blog_form');
    }

   
}
