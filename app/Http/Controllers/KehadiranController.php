<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $kehadiran = DB::table('kehadiran')->get();
       return view ('kehadiran/index',compact('kehadiran')); //
    }


}
