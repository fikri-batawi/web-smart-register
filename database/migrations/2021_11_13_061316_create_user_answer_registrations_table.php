<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAnswerRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_answer_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('usia');
            $table->boolean('positif_kurang_3_bulan');
            $table->boolean('vaksin_1');
            $table->boolean('demam');
            $table->boolean('dirawat');
            $table->boolean('gangguan_imun');
            $table->boolean('imunosupresan');
            $table->boolean('alergi_berat');
            $table->boolean('lupus');
            $table->boolean('pembekuan_darah');
            $table->boolean('penyakit_berat');
            $table->boolean('kelelahan');
            $table->boolean('penurunan_berat');
            $table->boolean('usia_kehamilan');
            $table->boolean('preeklampsia');
            $table->enum('dapat_vaksin', ['Ya', 'Tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_answer_registrations');
    }
}
