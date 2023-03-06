<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type = 'laptop', $id = 'Dell'){
        echo '<h2>product: ' . $type .' id: ' . $id .'</h2>';
       
        // return view('product');
    }

   
}
