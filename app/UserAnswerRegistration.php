<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswerRegistration extends Model
{
    protected $tableName    = 'user_answer_registrations';
    protected $fillable     = [
        'nik', 'usia', 'positif_kurang_3_bulan', 'vaksin_1', 'deman', 'dirawat', 'gangguan_imun', 'imunosupresan', 'alergi_berat', 'lupus', 'pembekuan_darah', 'penyakit_berat', 'kelelahan', 'penurunan_berat', 'usia_kehamilan', 'preeklampsia', 'dapat_vaksin'
    ];
}
