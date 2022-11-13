<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('auth.register');
    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'last_names' => 'required',
            'username' => 'required',
            'numero_documento' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'state',
        ]);

        $user = User::create(request(['name', 'last_names', 'username', 'numero_documento', 'telefono', 'direccion', 'email', 'password', 'state']));

        auth()->login($user);
        return redirect()->to('/');
    }

    public function show(User $user){
        //$user = User::findOrFail($id);
        //dd($user);
        return view('users.show', compact('user'));
    }

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $data = $request->only('name', 'username', 'email');

        if(trim($request->password)==''){
            $data=$request->except('password');
        }else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy(User $user){
        $user->delete();
        return back();
    }
}
