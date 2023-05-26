<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PenggunaController extends Controller

{
    public function __construct()
    {
      
		$this->middleware('auth');
		$this->middleware('Pengguna');
    
    }

    public function index()
    {
        return view('pengguna');
    }
}
