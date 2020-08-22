<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa', 50);
            $table->char('jenis_kelamin', 1);
            $table->string('alamat_siswa', 255);
            $table->string('jarak', 100);
            $table->string('tempat_lahir', 100);
            $table->date('tgl_lahir');
            $table->string('umur', 100);
            $table->string('hp', 15);
            $table->enum('agama_siswa', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha']);
            $table->float('nilai_indo');
            $table->float('nilai_mtk');
            $table->float('nilai_inggris');
            $table->float('nilai_ipa');
            $table->float('nilai_prestasi');
            $table->float('nilai_total');
            $table->string('jenis_prestasi', 255);
            $table->string('no_ijazah', 30);
            $table->timestamp('tgl_daftar');
            $table->enum('status_siswa', ['PENDING', 'LULUS', 'TIDAK']);
            $table->integer('id_sekolah')->unsigned();
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
        Schema::dropIfExists('daftar');
    }
}
