<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('users')
            ->join('sepedas', 'users.id_user', '=', 'sepedas.peminjam')
            ->get();

        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = DB::table('users')->insertGetId([
            'nama' => $request->nama,
            'umur' => $request->umur,
        ]);

        DB::table('sepedas')->insert([
            'model' => $request->model,
            'harga' => $request->harga,
            'peminjam' => $id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('users')
        ->where('id_user', $id)
        ->join('sepedas', 'users.id_user', '=', 'sepedas.peminjam')
        ->get();
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Start a transaction to ensure both updates happen together
        DB::transaction(function () use ($request) {
            // Update the users table
            DB::table('users')
                ->where('id_user', $request->id)
                ->update([
                    'nama' => $request->nama,
                    'umur' => $request->umur,
                ]);
    
            // Update the sepedas table
            DB::table('sepedas')
                ->where('peminjam', $request->id)
                ->update([
                    'model' => $request->model,
                    'harga' => $request->harga,
                ]);
        });
    
        // After the transaction is complete, redirect back to the home route
        return redirect()->route('home');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id_user', $id)->delete();
        return redirect('/');
    }
}
