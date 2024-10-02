<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pegawai = DB::table('pegawai')->get();
       return view ('pegawai/index',compact('pegawai')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view ('pegawai/create'); 
        $pegawai = DB::table('pegawai')-> get();
        return view('pegawai/create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('pegawai')->insert([
                'id_pegawai' => $request ->id_pegawai,  
                'nama' => $request ->nama,
                'alamat' => $request ->alamat,
                'email' => $request ->email,
                'no_hp' => $request ->no_hp
                ]);  
            return  redirect('pegawai')-> with ('status', 'pegawai karyawan berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('pegawai')-> with ('status', $ex);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   
        $pegawai = DB::table('pegawai') -> get();
        return view ('pegawai/show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pegawai)
    {
        $pegawai = DB::table('pegawai')->get();
        return view('pegawai/edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pegawai)
    {
        try
       {
        $affected = DB::table('pegawai') ->where('id_pegawai', $id_pegawai)
        ->update([
            'id_pegawai' => $request ->id_pegawai,  
                'nama' => $request ->nama,
                'alamat' => $request ->alamat,
                'email' => $request ->email,
                'no_hp' => $request ->no_hp
            
    
        ]);
       
       return redirect('pegawai')-> with ('status', 'pegawai karyawan berhasil diubah...');
    }
        catch(\Illuminate\Database\QueryException $ex)
        {
            return redirect('pegawai')-> with('status', 'pegawai karyawan gagal ditambah...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_pegawai)
    {
        $pegawai = DB::table('pegawai')->where('id_pegawai', $id_pegawai)->delete();      
        return  redirect('pegawai')-> with ('status', 'Data pegawai berhasil dihapus..');  //
    }
}
