<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Register;
use App\UserAnswerRegistration;
use App\User;

class DashboardController extends Controller
{
  public function index(){
    return view('dashboard.index');
  }
  public function pendaftaran(){
    return view('dashboard.pendaftaran');
  }
  public function postPendaftaranAnak(Request $request){
    // Check Nik 
    if(!$request->nik){
      return back()->with('error', 'Nik harus diisi!');
    }
    // Check jawaban
    if(!$request->ans || count($request->ans) != 7){
      return back()->with('error', 'Jawaban harus diisi semua!');
    }
    
    $user         = User::find(Auth()->user()->id);
    $explode_date = explode('-', $user->birth_date);
    $usia         = (int)date('Y') - (int)$explode_date[0];

    foreach($request->ans as $key => $answer){
      if($answer == '1' && $key != 'alergi_berat'){
        // Jawaban User
        $userAnswerRegister = new UserAnswerRegistration;
        $userAnswerRegister->nik                    = $request->nik;
        $userAnswerRegister->usia                   = $usia;
        $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
        $userAnswerRegister->vaksin_1               = $request->ans['vaksin_1'];
        $userAnswerRegister->demam                  = $request->ans['demam'];
        $userAnswerRegister->dirawat                = $request->ans['dirawat'];
        $userAnswerRegister->gangguan_imun          = $request->ans['gangguan_imun'];
        $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
        $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
        $userAnswerRegister->lupus                  = false;
        $userAnswerRegister->pembekuan_darah        = false;
        $userAnswerRegister->penyakit_berat         = false;
        $userAnswerRegister->kelelahan              = false;
        $userAnswerRegister->penurunan_berat        = false;
        $userAnswerRegister->usia_kehamilan         = false;
        $userAnswerRegister->preeklampsia           = false;
        $userAnswerRegister->dapat_vaksin           = 'Tidak';
        $userAnswerRegister->save();

        // Register
        $register = new Register;
        $register->user_id    = $user->id;
        $register->nik        = $request->nik;
        $register->status     = 'tidak';
        $register->keterangan = 'anak';
        $register->save();

        return redirect()->route('dashboard.riwayat_pendaftaran');
      }elseif($answer == '1' && $key == 'alergi_berat'){
        // Jawaban User
        $userAnswerRegister = new UserAnswerRegistration;
        $userAnswerRegister->nik                    = $request->nik;
        $userAnswerRegister->usia                   = $usia;
        $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
        $userAnswerRegister->vaksin_1                = $request->ans['vaksin_1'];
        $userAnswerRegister->demam                  = $request->ans['demam'];
        $userAnswerRegister->dirawat                = $request->ans['dirawat'];
        $userAnswerRegister->gangguan_imun          = $request->ans['gangguan_imun'];
        $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
        $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
        $userAnswerRegister->lupus                  = false;
        $userAnswerRegister->pembekuan_darah        = false;
        $userAnswerRegister->penyakit_berat         = false;
        $userAnswerRegister->kelelahan              = false;
        $userAnswerRegister->penurunan_berat        = false;
        $userAnswerRegister->usia_kehamilan         = false;
        $userAnswerRegister->preeklampsia           = false;
        $userAnswerRegister->dapat_vaksin           = 'Ya';
        $userAnswerRegister->save();

        // Register
        $register = new Register;
        $register->user_id    = $user->id;
        $register->nik        = $request->nik;
        $register->status     = 'boleh';
        $register->keterangan = 'anak';
        $register->save();

        return redirect()->route('dashboard.riwayat_pendaftaran');
      }
    }

    // Jawaban User
    $userAnswerRegister = new UserAnswerRegistration;
    $userAnswerRegister->nik                    = $request->nik;
    $userAnswerRegister->usia                   = $usia;
    $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
    $userAnswerRegister->vaksin_1                = $request->ans['vaksin_1'];
    $userAnswerRegister->demam                  = $request->ans['demam'];
    $userAnswerRegister->dirawat                = $request->ans['dirawat'];
    $userAnswerRegister->gangguan_imun          = $request->ans['gangguan_imun'];
    $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
    $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
    $userAnswerRegister->lupus                  = false;
    $userAnswerRegister->pembekuan_darah        = false;
    $userAnswerRegister->penyakit_berat         = false;
    $userAnswerRegister->kelelahan              = false;
    $userAnswerRegister->penurunan_berat        = false;
    $userAnswerRegister->usia_kehamilan         = false;
    $userAnswerRegister->preeklampsia           = false;
    $userAnswerRegister->dapat_vaksin           = 'Ya';
    $userAnswerRegister->save();

    // Register
    $register = new Register;
    $register->user_id    = $user->id;
    $register->nik        = $request->nik;
    $register->status     = 'boleh';
    $register->keterangan = 'anak';
    $register->save();

    return redirect()->route('dashboard.riwayat_pendaftaran');
  }
  
  public function riwayat_pendaftaran(){
    return view('dashboard.riwayat_pendaftaran');
  }
}
