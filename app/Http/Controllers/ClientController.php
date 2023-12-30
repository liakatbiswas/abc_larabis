<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $clients = Client::all();
        // $clients = Client::latest()->get();
        $clients = Client::latest()->paginate(5);
        // return view('client.index', compact('clients'));
        return view('client.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'string', 'unique:clients'],
            'email' => ['required', 'max:255', 'string', 'email', 'unique:clients'],
            'phone' => ['max:20', 'string'],
            'country' => ['required', 'max:80', 'string'],
            'status' => ['required', 'string', 'not_in:none', 'in:active,inactive']

        ]);

        // object-oriented paradigm
        /** $client = new Client();
        $client->name = $request->name;
        $client->username = $request->username;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->country = $request->country;
        $client->status = $request->status;
        $client->save();
         */

        Client::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'status' => $request->status
        ]);


        // Client::create($request->only('name', 'username', 'email', 'phone', 'country', 'status'));

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
