<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $absensi = DB::table('absensi')
        ->join('pegawai', 'absensi.id_pegawai', '=', 'pegawai.id_pegawai')
        ->select('absensi.*', 'pegawai.nama')
        ->get();
    return view('absensi.index', compact('absensi'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $absensi = DB::table('absensi')->get();
    $pegawai = DB::table('pegawai')->get(); 
    return view('absensi.create', compact('absensi', 'pegawai'));
}


    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $query=DB::table('absensi')->insert([
                'id_pegawai' => $request->id_pegawai,
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'jam_masuk' => $request->jam_masuk,
                'jam_pulang' => $request->jam_pulang,
                'status' => $request->status,
            ]);

            return redirect('absensi')->with('status', 'Absensi karyawan berhasil ditambah.');
        } catch(\Illuminate\Database\QueryException $ex){  
            return  redirect('absensi')-> with ('status', $ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id_pegawai)
    {
        $absensi = DB::table('absensi')->where('id_pegawai', $id_pegawai)->first();
        if (!$absensi) {
            return redirect('absensi')->with('error', 'Data absensi tidak ditemukan.');
        }
        return view('absensi.show', compact('absensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_pegawai)
    {
        $absensi = DB::table('absensi')->where('id_pegawai', $id_pegawai)->first();
        $pegawai = DB::table('pegawai')->get();
        
        if (!$absensi) {
            return redirect('absensi')->with('error', 'Data absensi tidak ditemukan.');
        }
        
        return view('absensi.edit', compact('absensi', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_pegawai)
    {
        $this->validate($request, [
            'id_pegawai' => 'required',
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required',
            'status' => 'required|string'
        ]);

        try {
            $affected = DB::table('absensi')->where('id_pegawai', $id_pegawai)->update([
                'id_pegawai' => $request->id_pegawai,
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'jam_masuk' => $request->jam_masuk,
                'jam_pulang' => $request->jam_pulang,
                'status' => $request->status,
            ]);

            return redirect('absensi')->with('status', 'Absensi karyawan berhasil diubah.');
        } catch (\Exception $e) {
            return redirect('absensi')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_pegawai)
    {
        try {
            $absensi = DB::table('absensi')->where('id_pegawai', $id_pegawai)->delete();

            if ($absensi) {
                return redirect('absensi')->with('status', 'Data absensi berhasil dihapus.');
            } else {
                return redirect('absensi')->with('error', 'Data absensi tidak ditemukan.');
            }
        } catch (\Exception $e) {
            return redirect('absensi')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
