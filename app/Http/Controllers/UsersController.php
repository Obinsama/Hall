<?php

namespace Hall\Http\Controllers;

use Illuminate\Http\Request;
use Hall\Http\Controllers\Controller;
use Hall\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        if(request('search')){
            $data['data']=User::where('nom','%'.request('search').'%')->get();
            $data='Bonjour';
//            return response()->json(request('search'));
        }else{
            $data = User::orderBy('id','DESC')->get();
            return response()->json($data);
        }
        return response()->json(request('search'));

//        return view('users.index',compact('data'))
//
//            ->with('i', ($request->input('page', 1) - 1) * 5);

    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function search(Request $request){
        $user=$request->content;
        $user=User::select("*")->where('nom','LIKE','%'.$user.'%')->get();

        return response()->json($user);

    }

    public function connected(){
//        $user=Auth::user();
        $user = auth()->user();
        return response()->json($user);
    }
    public function create()

    {

        $roles = Role::pluck('name','name')->all();

        return view('users.create',compact('roles'));

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

//        $this->validate($request, [
//
//            'name' => 'required',
//
//            'email' => 'required|email|unique:users,email',
//
//            'password' => 'required|same:confirm-password',
//
//            'roles' => 'required'
//
//        ]);


        $input = $request->all();

        $input['password'] = Hash::make($input['password']);


        $user = User::create($input);
        $role=$request->input('roles');
        $user->assignRole($request->input('roles'));
        return response()->json($role);

//        return redirect()->route('users.index')
//
//            ->with('success','User created successfully');

    }


    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $user = User::find($id);
        return response()->json($user);
//        return view('users.show',compact('user'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $user = User::find($id);

        $roles = Role::pluck('name','name')->all();

        $userRole = $user->roles->pluck('name','name')->all();


        return view('users.edit',compact('user','roles','userRole'));

    }


    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

//        $this->validate($request, [
//
//            'name' => 'required',
//
//            'email' => 'required|email|unique:users,email,'.$id,
//
//            'password' => 'same:confirm-password',
//
//            'roles' => 'required'
//
//        ]);


        $input = $request->all();

        if(!empty($input['password'])){

            $input['password'] = Hash::make($input['password']);

        }else{

            $input = array_except($input,array('password'));

        }


        $user = User::find($id);

        $user->update($input);
        if(($request->input('roles'))){
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->assignRole($request->input('roles'));
        }

        return redirect()->route('users.index')

            ->with('success','User updated successfully');

    }


    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        User::find($id)->delete();

        return redirect()->route('users.index')

            ->with('success','User deleted successfully');

    }
}
