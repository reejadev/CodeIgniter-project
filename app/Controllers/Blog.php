<?php

namespace App\Controllers;
use Faker\Provider\Lorem;

use App\Models\BlogModel;
class Blog extends BaseController
{
    
    public function index()
    {
        $data=[
           // 'meta_title'=> 'Codeigniter4',
            'title' => 'This is a blog',
        ];


        $posts=  ['Title 1','Title 2','Title 3'];
        $data['posts']=$posts;

        ;
        //return view('blog');
       
        return view('blog',$data);
      
    }

    public function post()
    {
        $data=[
            'meta_title'=> 'Post',
            'title' => 'this is a blog',
        ];
     
       return view('single_post',$data);
        
    }

    public function new(){
      
        $data=[
            'meta_title'=> 'New Post',
            'title' => 'Create new post',
        ];
        if($this->request->getPost()=='post'){
            $model= new BlogModel;
            $model->save($_POST);
        }
        return view('new_post',$data);
    }

}
