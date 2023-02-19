<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\CustomAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('addStudent', 'admin/AddStudent')->middleware('customAuth')->middleware('customAuth');
Route::post('addStudent', [AddStudentController::class, 'AddStudent'])->middleware('customAuth');

Route::view('showstudent', 'admin/showStudent')->middleware('customAuth');;
Route::get('showstudent', [AddStudentController::class, 'ShowStudent'])->middleware('customAuth');;


Route::get('DeleteStudent/{id}', [AddStudentController::class, 'DeleteStudent'])->middleware('customAuth');;

//Route::view('updateStudent/{id}', 'admin/updateStudent');
Route::get('updateStudent/{id}', [AddStudentController::class, 'ShowupdateStudent'])->middleware('customAuth');;
Route::post('updateStudent/{id}', [AddStudentController::class, 'UpdateStudent']);
Route::view('AddTeacher', '/admin/AddTeacher');
Route::post('AddTeacher', [TeacherController::class, 'AddTeacher'])->middleware('customAuth');;
Route::get('ShowTeacher', [TeacherController::class, 'ShowTeacher'])->middleware('customAuth');
Route::get('DeleteTeacher/{id}', [TeacherController::class, 'DeleteTeacher'])->middleware('customAuth');;

Route::get('updateTeacher/{id}', [TeacherController::class, 'ShowupdateTeacher'])->middleware('customAuth');
Route::post('updateTeacher/{id}', [TeacherController::class, 'UpdateTeacher']);

Route::post('login', [AdminController::class, 'login']);
Route::view('login', 'Admin/login');
Route::get('logout', [AdminController::class, 'logout'])->middleware('customAuth');;
Route::get('login', function () {
    if(session('user')){
        return redirect('/');
    }
    return view('Admin/login');

});

// Route::view('AddTeacher', 'admin/AddTeacher');
Route::view('/', 'admin/AddStudent')->middleware('customAuth');


// Route::get('/', function () {
//     return view('admin/AddStudent');
// });
// Route::view('addStudent', 'admin/AddStudent');
// Route::post('addStudent', [AddStudentController::class, 'AddStudent']);

// Route::view('showstudent', 'admin/showStudent');
// Route::get('showstudent', [AddStudentController::class, 'ShowStudent']);


// Route::get('DeleteStudent/{id}', [AddStudentController::class, 'DeleteStudent']);

// //Route::view('updateStudent/{id}', 'admin/updateStudent');
// Route::get('updateStudent/{id}', [AddStudentController::class, 'ShowupdateStudent']);
// Route::post('updateStudent/{id}', [AddStudentController::class, 'UpdateStudent']);

// Route::post('AddTeacher', [TeacherController::class, 'AddTeacher']);
// Route::get('ShowTeacher', [TeacherController::class, 'ShowTeacher']);
// Route::get('DeleteTeacher/{id}', [TeacherController::class, 'DeleteTeacher']);

// Route::get('updateTeacher/{id}', [TeacherController::class, 'ShowupdateTeacher']);
// Route::post('updateTeacher/{id}', [TeacherController::class, 'UpdateTeacher']);



// Route::view('AddTeacher', 'admin/AddTeacher');
// //Route::view('ShowTeacher', 'admin/ShowTeacher');




