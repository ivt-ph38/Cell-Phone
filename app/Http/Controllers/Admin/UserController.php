<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Role;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = DB::table('role_user')->get()->pluck('user_id');
        foreach ($user_id as $key => $value) {
            $user[] = User::find($value);
        }
        foreach ($user as $key => $value) {
            $id[] = $value->id;
        }
       
        $listUser = User::whereNotIn('id', $id)->orderBy('id','ASC')->paginate(5);
        //$listUser = User::orderBy('id','ASC')->paginate(5);
        //dd($listUser);
        return view('admin.user.list', compact('listUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {   
        //---- insert to users table ---//
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        // --- insert to  role_user table ---//
        //-- phan quyen cho user-- //
        $user->roles()->attach($request->roles);
        
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $roles = DB::table('role_user')->where('user_id',$id)->pluck('role_id');
        foreach ($roles as $key => $value) {
            $role_id[] = Role::find($roles[$key]);
        }
      

        return view('admin.user.edit', compact('user','role_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $data = $request->except('_token', '_method');
        $data['password'] = bcrypt($request->password);
        $user->update($data);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
    public function search(Request $request){
        if($request->name){
            $user = User::where('fullname','like','%'.$request->name.'%')
                        ->get();
        return view('admin.user.search', compact('user'));
        }
    }
}