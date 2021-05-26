<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Redirect;

class EmployeesController extends Controller
{
    public function employees()
    {
        return view('employees');
    }

    public function employees_create()
    {
        return view('create_form.employees');
    }

     //declare variable
     protected $request;

     //initiate class upon controller start    
     public function __construct(Request $request)
     {
         //make the request available on the class
         $this->request = $request;
     }
 
     public function employees_create_save()
     {
         $data = $this->request->except('_token');
         Employee::create($data);
 
         return Redirect::route('employees.home');
     }
    
}
