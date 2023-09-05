<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $data['students'] = Student::orderBy('id', 'desc')->paginate(5);
        return view('student.index', $data);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'year' => 'required',
            'password' => 'required'
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->year = $request->year;
        $student->password = $request->password;
        $student->save();

        return redirect()->route('sindex')->with('status', 'student has been created succesfully');
    }


    public function update($id)
    {
        $student = Student::find($id);
        return view('student.update', ['student' => $student]);
    }

    public function store_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'year' => 'required',
            'password' => 'required'
        ]);

        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->year = $request->year;
        $student->password = $request->password;
        $student->update();

        return redirect()->route('sindex')->with('status', 'student has been created succesfully');
    }

    public function delete($id)
    {
        // dd($id);
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('sindex')->with('status', 'student has been deleted succesfully');
    }
}
