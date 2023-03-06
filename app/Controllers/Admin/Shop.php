<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Shop extends BaseController
{
    public function index()
    {
        echo 'hi';
        //return view('shop');
    }

    public function product($type, $id){
        echo '<h2>product admin: ' . $type .' id: ' . $id .'</h2>';
       
        // return view('product');
    }

   
}
