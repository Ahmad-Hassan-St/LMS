<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class AddStudentController extends Controller
{
    function AddStudent(Request $request)
    {
        $studnet = new Student();
        $studnet->Name = $request->Name;
        $studnet->email = $request->Email;
        $studnet->Password = $request->Password;
        $studnet->address = $request->Address;
        $studnet->mobile = $request->Mobile;
        $studnet->cnic = $request->CNIC;
        $studnet->dob = $request->dob;
        $studnet->picture = $request->picture;
        $studnet->degree = $request->degree;
        $studnet->batch = $request->Batch;

        $studnet->save();
        return redirect('addStudent')->with('update', 'Student data Added Successfully');
        ;
    }

    function ShowStudent()
    {
        $data = Student::all();
        return view('Admin/ShowStudent', ["Student" => $data]);
    }

    function DeleteStudent($ID)
    {
        Student::where('ID', $ID)->delete();

        return redirect('showstudent')->with('success', 'Student deleted Successfully');
    }
    function ShowupdateStudent($ID)
    {
        $data = Student::find($ID);
        return view('Admin/UpdateStudent', ["data" => $data]);
    }

    function UpdateStudent(Request $request)
    {
        $studnet = Student::where('ID', $request->id)->update([
            'Name' => $request->Name,
            "email" => $request->Email,
            "Password" => $request->Password,
            "address" => $request->Address,
            "mobile" => $request->Mobile,
            "cnic" => $request->CNIC,
            "dob" => $request->dob,
            "picture" => $request->picture,
            "degree" => $request->degree,
            "batch" => $request->Batch
        ]);


        return redirect('showstudent')->with('update', 'Student data Updated Successfully');




    }
}
