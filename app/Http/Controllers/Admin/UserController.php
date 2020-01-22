<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
        $users=User::all();  
        return view('admin.users.index', compact('users'));
    }

    public function new(){
        return view('admin.users.store');
    }

    public function store(UserRequest $request){
        $userData=$request->all();

        $userData['password']=bcrypt($userData['password']);

        $validator = $request->validated();


        $user = new User();
        $user->create($userData);

        
        print 'Usuário criado com sucesso';
    }

    // public function edit(User $user){
    //     return view('admin.users.edit', compact('user'));
    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id){
        $userData=$request->all();
        
        //$request->validate();

        $user=User::findOrFail($id);
        $user->update($userData);

        print 'Usuário atualizado com sucesso';
    }

    public function delete($id){
        

        $user=User::findOrFail($id);
        $user->delete();

        print 'Usuário removido com sucesso';
    }
}
