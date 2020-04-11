<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanmasyarakatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduanmasyarakat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl_pelaporan');
            $table->unsignedBigInteger('jenis_id');
            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('petugasa_id')->nullable();
            $table->foreign('petugasa_id')->references('id')->on('petugasa')->onDelete('cascade');
            $table->enum('status',['Diproses','Ditolak','Diterima']);
            $table->longText('isi_laporan');
            $table->string('foto');
            $table->string('tanggapan')->nullable();
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
        Schema::dropIfExists('pengaduanmasyarakat');
    }
}
