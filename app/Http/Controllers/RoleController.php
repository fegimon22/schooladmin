<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;
use Auth;
use Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {

			$this->middleware('auth');
            $this->middleware('role:Admin')->except('create', 'store');              
        
    }

   /* public function index()
    {
        
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));

    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              return view('userrole.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  /*  public function store()
    {
        //

        //dd(request()->all());

        //$validator = Validator::make(request()->all(), Student::$validationRules);

        //if ($validator->fails())
            //return redirect('/students/create')->withInput($request->all())->withErrors($validator);

        $teacher = Teacher::create(request(['name','gender', 'classroom_id', 'level_id', 'experience', 'phone']));

        User::create([
            'name' => $teacher->name,
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'userable_id' => $teacher->id,
            'userable_type' => 'Teacher'
        ]);


        if (Auth::check() && Auth::user()->hasRole('Admin')) {
            return redirect('/teachers');
        }
        
        return redirect('login');
        
    }*/

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
   /* public function show(Teacher $teacher)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
   /* public function edit(Teacher $teacher)
    {
        //

        $classrooms = Classroom::all();

        return view('teachers.edit', compact('teacher', 'classrooms'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
   /* public function update(Teacher $teacher)
    {
        //

        $input = request(['name','experience', 'classroom_id']);

        $teacher->fill($input)->save();

        return redirect('/teachers');
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
   /* public function destroy(Teacher $teacher)
    {
        //

        $teacher->delete();

        return redirect('/teachers');


    }*/
}
