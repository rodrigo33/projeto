<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    public function index(){
        $clients=Client::all();  
        return view('admin.clients.index', compact('clients'));
    }

    public function new(){
        return view('admin.clients.store');
    }

    public function store(ClientRequest $request){
        $clientData=$request->all();

        $validator = $request->validated();

        $client = new Client();
        $client->create($clientData);

        return redirect()->route('client.index')->with('message', 'Cliente criado com sucesso!');
        print 'Cliente criado com sucesso';
    }

    // public function edit(client $client){
    //     return view('admin.clients.edit', compact('client'));
    public function edit($id){
        $client = Client::findOrFail($id);
        return view('admin.clients.edit', compact('client'));
    }

    public function update(ClientRequest $request, $id){
        $clientData=$request->all();
        
        //$request->validate();

        $client=Client::findOrFail($id);
        $client->update($clientData);

        
        return redirect()->route('client.index')->with('message', 'Cliente atualizado com sucesso!');
        //print 'Cliente atualizado com sucesso';
    }

    public function delete($id){
        

        $client=Client::findOrFail($id);
        $client->delete();

        return redirect()->route('client.index')->with('message', 'Cliente removido com sucesso');
        print 'Cliente removido com sucesso';
    }
}
