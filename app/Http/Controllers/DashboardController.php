<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index(){
    return view('dashboard.index');
  }
  public function pendaftaran(){
    return view('dashboard.pendaftaran');
  }
  public function riwayat_pendaftaran(){
    return view('dashboard.riwayat_pendaftaran');
  }
}
