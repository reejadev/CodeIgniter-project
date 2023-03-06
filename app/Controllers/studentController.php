<?php namespace App\Controllers;

use App\Models\StudentModel;
class studentController extends BaseController
{
    public function index()
    {
        $student=new StudentModel();
        //print_r($student->findAll());
        $data['students']=$student->findAll();
        return view('students/index.php',$data);
    }

    public function create()
    {
        return view('students/create.php');
    }

    public function store()
    {
        $students = new StudentModel();
        $data=[
            'post_title' =>  $this->request->getPost('post_title'),
            'post_content' =>  $this->request->getPost('post_content')
         ];

$students->save($data);
return redirect('students')->with('status','It was a Success'); 
    }

    public function edit($id=null)
    {
        $student=new StudentModel();
        $data['student'] = $student->find($id);
        return view('students/edit',$data);
    }

    public function update($id=null)
    {
        $student=new StudentModel();
        $data=[
            'post_title' =>  $this->request->getPost('post_title'),
            'post_content' =>  $this->request->getPost('post_content')
         ];
         $student->update($id, $data);
         return redirect()->to(base_url('students'))->with('status','Updated');
    }

    public function delete($id=null)
    {
        $student=new StudentModel();
      
         $student->delete($id);
         return redirect()->back()->with('status','Data Deleted');
    }


    public function confirmdelete($id=null)
    {
        $student=new StudentModel();
      
         $student->delete($id);

         $data = [
            'status' => 'Deleted',
            'status_text'      => 'Deleted Successfully',
            'status_icon'=> 'success'
        ];
        
        return $this->response->setJSON($data);
     

    }
} 