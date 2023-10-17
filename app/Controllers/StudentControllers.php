<?php

namespace App\Controllers;

use App\Models\StudentsModel;


class StudentControllers extends BaseController
{
    public function index(): string
    {

        $students = new StudentsModel();
        $data['students' ]= $students->findAll();
        return view('students/index', $data);
    }
    
    public function store() 
    {
        $students = new StudentsModel();
        $data = [
            'nom' =>$this->request->getPost('nom'),
            'email' =>$this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'address' => $this->request->getPost('address'),
        ];
        $students->save($data);

        return redirect('students');
    }


    public function delete($id = null) 
    {
        $students = new StudentsModel();
        $students -> delete($id);
        return redirect('students');
    }
}
