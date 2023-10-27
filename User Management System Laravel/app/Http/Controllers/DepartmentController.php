<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $departments = Department::latest()->paginate(5);
        return view('departments.index',compact('departments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_department' => 'required',
        ]);
        $input = $request->all();
        Department::create($input);
        return redirect()->route('departments.index')
                        ->with('success','department created successfully.');
    }
}
