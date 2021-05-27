<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Redirect;

class DepartmentController extends Controller
{
    public function department()
    {
        return view('department')->with([
            'data' => Department::all()
        ]);
    }

    public function department_create()
    {
        return view('create_form.department');
    }

    //declare variable
    protected $request;

    //initiate class upon controller start    
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }

    public function department_create_save()
    {
        $data = $this->request->except('_token');
        Department::create($data);

        return Redirect::route('department.home');
    }
}
