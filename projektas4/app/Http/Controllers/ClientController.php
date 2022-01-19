<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company; // imame informacija ir is kompaniju modeliu
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //vienas sprendimo budu
        // $select_values = [];
        // for ($x = 1; $x < 251; $x++) {
        //     $select_values[] = $x;
        // }

        $select_values = Company::all();

        //0: {id: 1; name: company1, type; "MB", desc: 'aprasymas'}
        //1: {id: 2; name: company2, type; "MB", desc: 'aprasymas'}

        return view('clients.create', ['select_values' => $select_values]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // koreguoti i request ir prideti biblioteka "use Illuminate\Http\Request;"
    {
        $client = new Client;

        $client->name = $request->client_name;
        $client->surname = $request->client_surname;
        $client->username = $request->client_username;
        $client->company_id = $request->company_id;
        $client->image_url = $request->image_url;

        $client->save();
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $select_values = Company::all();
        return view('clients.edit', ['client' => $client, 'select_values' => $select_values]); // atsako uz duomenu atvaisdavima

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client) //atsako uz db redagavima
    {
        $client->name = $request->client_name;
        $client->surname = $request->client_surname;
        $client->username = $request->client_username;
        $client->company_id = $request->company_id;
        $client->image_url = $request->image_url;

        $client->save();
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
