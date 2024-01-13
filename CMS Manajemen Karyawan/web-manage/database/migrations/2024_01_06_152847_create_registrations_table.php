<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('alamat_email');
            $table->string('pendidikan_terakhir');
            $table->string('file_pdf');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
