<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{

    function AddTeacher(Request $request){

        $teacher = new Teacher();
        $teacher->Name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = $request->password;
        $teacher->address = $request->address;
        $teacher->mobile	 = $request->mobile;
        $teacher->cnic = $request->cnic;
        $teacher->dob = $request->dob;
        $teacher->picture = $request->picture;
        $teacher->Department = $request->department;
        $teacher->salary = $request->salary;
        $teacher->save();

        return redirect('AddTeacher');


    }
    function ShowTeacher()
    {
        $data = Teacher::all();
        return view('Admin/ShowTeacher', ["data" => $data]);

    }
    function DeleteTeacher($ID)
    {
        Teacher::where('ID', $ID)->delete();

        return redirect('ShowTeacher')->with('success', 'Student deleted Successfully');
    }
    function ShowupdateTeacher($ID)
    {
        $data =  Teacher::Find($ID);
        return view('Admin/UpdateTeacher', ["data" => $data]);
    }


    function UpdateTeacher(Request $request)
    {
        $data = Teacher::where('ID', $request->ID)->update([
            'Name' => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "address" => $request->address,
            "mobile" => $request->mobile,
            "cnic" => $request->cnic,
            "dob" => $request->dob,
            "picture" => $request->picture,
            "Department" => $request->department,
            "salary" => $request->salary
        ]);


        return redirect('ShowTeacher')->with('update', 'Student data Updated Successfully');

    }
}
