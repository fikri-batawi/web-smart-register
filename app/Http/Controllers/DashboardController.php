<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Register;
use App\UserAnswerRegistration;
use App\User;

use Carbon\Carbon;

class DashboardController extends Controller
{
  public function index(){
    $total_pendaftaran          = Register::all()->count();
    $peserta_boleh_vaksin       = Register::where('status', 'boleh')->count();
    $peserta_tidak_boleh_vaksin = Register::where('status', 'tidak')->count();
    return view('dashboard.index', [
      'total_pendaftaran'           => $total_pendaftaran,
      'peserta_boleh_vaksin'        => $peserta_boleh_vaksin,
      'peserta_tidak_boleh_vaksin'  => $peserta_tidak_boleh_vaksin,
    ]);
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
        $register->tanggal_vaksin_1 = Carbon::now()->addDays(1);
        $register->tanggal_vaksin_2 = Carbon::now()->addDays(1)->addMonth(1);
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
    $register->tanggal_vaksin_1 = Carbon::now()->addDays(1);
    $register->tanggal_vaksin_2 = Carbon::now()->addDays(1)->addMonth(1);
    $register->save();

    return redirect()->route('dashboard.riwayat_pendaftaran');
  }
  public function postPendaftaranUmum(Request $request){
    // Check Nik 
    if(!$request->nik){
      return back()->with('error', 'Nik harus diisi!');
    }
    // Check jawaban
    if(!$request->ans || count($request->ans) != 8){
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
        $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
        $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
        $userAnswerRegister->lupus                  = $request->ans['lupus'];
        $userAnswerRegister->pembekuan_darah        = $request->ans['pembekuan_darah'];
        $userAnswerRegister->kelelahan              = $request->ans['kelelahan'];
        $userAnswerRegister->penyakit_berat         = $request->ans['penyakit_berat'];
        $userAnswerRegister->penurunan_berat        = $request->ans['penurunan_berat'];
        $userAnswerRegister->vaksin_1               = false;
        $userAnswerRegister->demam                  = false;
        $userAnswerRegister->dirawat                = false;
        $userAnswerRegister->gangguan_imun          = false;
        $userAnswerRegister->usia_kehamilan         = false;
        $userAnswerRegister->preeklampsia           = false;
        $userAnswerRegister->dapat_vaksin           = 'Tidak';
        $userAnswerRegister->save();

        // Register
        $register = new Register;
        $register->user_id    = $user->id;
        $register->nik        = $request->nik;
        $register->status     = 'tidak';
        $register->keterangan = 'umum';
        $register->save();
        return redirect()->route('dashboard.riwayat_pendaftaran');
      }elseif($answer == '1' && $key == 'alergi_berat'){
        // Jawaban User
        $userAnswerRegister = new UserAnswerRegistration;
        $userAnswerRegister->nik                    = $request->nik;
        $userAnswerRegister->usia                   = $usia;
        $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
        $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
        $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
        $userAnswerRegister->lupus                  = $request->ans['lupus'];
        $userAnswerRegister->pembekuan_darah        = $request->ans['pembekuan_darah'];
        $userAnswerRegister->kelelahan              = $request->ans['kelelahan'];
        $userAnswerRegister->penyakit_berat         = $request->ans['penyakit_berat'];
        $userAnswerRegister->penurunan_berat        = $request->ans['penurunan_berat'];
        $userAnswerRegister->vaksin_1               = false;
        $userAnswerRegister->demam                  = false;
        $userAnswerRegister->dirawat                = false;
        $userAnswerRegister->gangguan_imun          = false;
        $userAnswerRegister->usia_kehamilan         = false;
        $userAnswerRegister->preeklampsia           = false;
        $userAnswerRegister->dapat_vaksin           = 'Ya';
        $userAnswerRegister->save();

        // Register
        $register = new Register;
        $register->user_id    = $user->id;
        $register->nik        = $request->nik;
        $register->status     = 'boleh';
        $register->keterangan = 'umum';
        $register->tanggal_vaksin_1 = Carbon::now()->addDays(1);
        $register->tanggal_vaksin_2 = Carbon::now()->addDays(1)->addMonth(1);
        $register->save();

        return redirect()->route('dashboard.riwayat_pendaftaran');
      }
    }

    // Jawaban User
    $userAnswerRegister = new UserAnswerRegistration;
    $userAnswerRegister->nik                    = $request->nik;
    $userAnswerRegister->usia                   = $usia;
    $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
    $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
    $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
    $userAnswerRegister->lupus                  = $request->ans['lupus'];
    $userAnswerRegister->pembekuan_darah        = $request->ans['pembekuan_darah'];
    $userAnswerRegister->kelelahan              = $request->ans['kelelahan'];
    $userAnswerRegister->penyakit_berat         = $request->ans['penyakit_berat'];
    $userAnswerRegister->penurunan_berat        = $request->ans['penurunan_berat'];
    $userAnswerRegister->vaksin_1               = false;
    $userAnswerRegister->demam                  = false;
    $userAnswerRegister->dirawat                = false;
    $userAnswerRegister->gangguan_imun          = false;
    $userAnswerRegister->usia_kehamilan         = false;
    $userAnswerRegister->preeklampsia           = false;
    $userAnswerRegister->dapat_vaksin           = 'Ya';
    $userAnswerRegister->save();

    // Register
    $register = new Register;
    $register->user_id    = $user->id;
    $register->nik        = $request->nik;
    $register->status     = 'boleh';
    $register->keterangan = 'umum';
    $register->tanggal_vaksin_1 = Carbon::now()->addDays(1);
    $register->tanggal_vaksin_2 = Carbon::now()->addDays(1)->addMonth(1);
    $register->save();

    return redirect()->route('dashboard.riwayat_pendaftaran');
  }
  public function postPendaftaranHamil(Request $request){
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
      if($answer == '1' && $key != 'alergi_berat' || $answer == '1' && $key != 'usia_kehamilan'){
        // Jawaban User
        $userAnswerRegister = new UserAnswerRegistration;
        $userAnswerRegister->nik                    = $request->nik;
        $userAnswerRegister->usia                   = $usia;
        $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
        $userAnswerRegister->pembekuan_darah        = $request->ans['pembekuan_darah'];
        $userAnswerRegister->lupus                  = $request->ans['lupus'];
        $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
        $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
        $userAnswerRegister->usia_kehamilan         = $request->ans['usia_kehamilan'];
        $userAnswerRegister->preeklampsia           = $request->ans['preeklampsia'];
        $userAnswerRegister->kelelahan              = false;
        $userAnswerRegister->penyakit_berat         = false;
        $userAnswerRegister->penurunan_berat        = false;
        $userAnswerRegister->vaksin_1               = false;
        $userAnswerRegister->demam                  = false;
        $userAnswerRegister->dirawat                = false;
        $userAnswerRegister->gangguan_imun          = false;
        $userAnswerRegister->dapat_vaksin           = 'Tidak';
        $userAnswerRegister->save();

        // Register
        $register = new Register;
        $register->user_id    = $user->id;
        $register->nik        = $request->nik;
        $register->status     = 'tidak';
        $register->keterangan = 'hamil';
        $register->save();
        return redirect()->route('dashboard.riwayat_pendaftaran');
      }elseif($answer == '1' && $key == 'alergi_berat' || $answer == '1' && $key == 'usia_kehamilan'){
        // Jawaban User
        $userAnswerRegister = new UserAnswerRegistration;
        $userAnswerRegister->nik                    = $request->nik;
        $userAnswerRegister->usia                   = $usia;
        $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
        $userAnswerRegister->pembekuan_darah        = $request->ans['pembekuan_darah'];
        $userAnswerRegister->lupus                  = $request->ans['lupus'];
        $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
        $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
        $userAnswerRegister->usia_kehamilan         = $request->ans['usia_kehamilan'];
        $userAnswerRegister->preeklampsia           = $request->ans['preeklampsia'];
        $userAnswerRegister->kelelahan              = false;
        $userAnswerRegister->penyakit_berat         = false;
        $userAnswerRegister->penurunan_berat        = false;
        $userAnswerRegister->vaksin_1               = false;
        $userAnswerRegister->demam                  = false;
        $userAnswerRegister->dirawat                = false;
        $userAnswerRegister->gangguan_imun          = false;
        $userAnswerRegister->dapat_vaksin           = 'Ya';
        $userAnswerRegister->save();

        // Register
        $register = new Register;
        $register->user_id    = $user->id;
        $register->nik        = $request->nik;
        $register->status     = 'boleh';
        $register->keterangan = 'hamil';
        $register->tanggal_vaksin_1 = Carbon::now()->addDays(1);
        $register->tanggal_vaksin_2 = Carbon::now()->addDays(1)->addMonth(1);
        $register->save();

        return redirect()->route('dashboard.riwayat_pendaftaran');
      }
    }

    // Jawaban User
    $userAnswerRegister = new UserAnswerRegistration;
    $userAnswerRegister->nik                    = $request->nik;
    $userAnswerRegister->usia                   = $usia;
    $userAnswerRegister->positif_kurang_3_bulan = $request->ans['positif<3bulan'];
    $userAnswerRegister->pembekuan_darah        = $request->ans['pembekuan_darah'];
    $userAnswerRegister->lupus                  = $request->ans['lupus'];
    $userAnswerRegister->imunosupresan          = $request->ans['imunosupresan'];
    $userAnswerRegister->alergi_berat           = $request->ans['alergi_berat'];
    $userAnswerRegister->usia_kehamilan         = $request->ans['usia_kehamilan'];
    $userAnswerRegister->preeklampsia           = $request->ans['preeklampsia'];
    $userAnswerRegister->kelelahan              = false;
    $userAnswerRegister->penyakit_berat         = false;
    $userAnswerRegister->penurunan_berat        = false;
    $userAnswerRegister->vaksin_1               = false;
    $userAnswerRegister->demam                  = false;
    $userAnswerRegister->dirawat                = false;
    $userAnswerRegister->gangguan_imun          = false;
    $userAnswerRegister->dapat_vaksin           = 'Ya';
    $userAnswerRegister->save();

    // Register
    $register = new Register;
    $register->user_id    = $user->id;
    $register->nik        = $request->nik;
    $register->status     = 'boleh';
    $register->keterangan = 'hamil';
    $register->tanggal_vaksin_1 = Carbon::now()->addDays(1);
    $register->tanggal_vaksin_2 = Carbon::now()->addDays(1)->addMonth(1);
    $register->save();

    return redirect()->route('dashboard.riwayat_pendaftaran');
  }
  public function riwayat_pendaftaran(){
    $userId = auth()->user()->id;
    $role   = auth()->user()->role;

    if($role == 'user'){
      $registers  = Register::where('user_id', $userId)->get();
    }else{
      $registers  = Register::all();
    }

    return view('dashboard.riwayat_pendaftaran', [
      'registers' => $registers,
      'role'      => $role,
    ]);
  }
  public function delete_riwayat_pendaftaran($registerId){

    $dataRegister = Register::find($registerId);
    $dataRegister->delete();

    return redirect()->route('dashboard.riwayat_pendaftaran')->with('message', 'Berhasil hapus data pendaftaran');
  }
}
