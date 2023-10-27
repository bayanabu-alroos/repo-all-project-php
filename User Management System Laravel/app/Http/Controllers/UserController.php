<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $users = User::latest()->paginate(5);
        $users = DB::table('users')
        ->join('departments', 'users.department_id', '=', 'departments.id')
        ->select('users.*', 'departments.name_department')
        ->get();
        // $users = DB::select('SELECT users.*, departments.name_department FROM (departments INNER JOIN users ON users.department_id = departments.id)');

        $search = $request->q;
        if($search!=""){

            $users = User::where(function ($query) use ($search){
                $query->Where('email', 'like', '%'.$search.'%')
                    ->orWhere('first_name', 'like', '%'.$search.'%')
                    ->orWhere('last_name', 'like', '%'.$search.'%');

            })
            ->paginate(5);
            $users->appends(['q' => $search]);
        }else{
            $users = DB::table('users')
            ->join('departments', 'users.department_id', '=', 'departments.id')
            ->select('users.*', 'departments.name_department')
            ->get();
        }

        return view('users.index', ['users' => $users])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $departments = Department::all();
        return view('users.create',compact('departments'));
    }

    public function store(Request $request)
    {
        $department = Department::findOrFail($request->department_id);

        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'gender'=> 'required',
            'email' => 'required',
            'password'=> 'required|min:8',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = new User;
        $input->first_name = $request->first_name;
        $input->last_name = $request->last_name;
        $input->gender = $request->gender;
        $input->email = $request->email;
        $input->password = Hash::make($request->password);
        $input->department_id  = $request-> department_id;

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }


        // User::create($input);
        $input->save();

        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                        ->with('success','User has been deleted successfully');
    }


    public function edit($id)
    {
        $departments = Department::all();
        $user = User::find($id);
        return view('users.edit', [
        'departments'=>$departments,
        'user'=>$user,
    ]);

    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'gender'=> 'required',
            'email' => 'required',
            'password'=> 'required|min:8',
            'department_id'=> 'required',
            'image',
        ]);

        if ($request->image != "") {
            $image = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/'), $image);
        } else {
            $image = $request->hidden_img;
        }

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name= $request->last_name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->department_id  = $request-> department_id;
        $user->image = $image;
        $user->save();

        return redirect()->route('users.index')
                ->with('success','User Has Been updated successfully');
    }
}
