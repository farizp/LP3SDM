<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_data', function (Blueprint $table) {
            $table->id();
            $table->integer('pelatihan_id');
            $table->string('nama');
            $table->char('nip', 20)->nullable();
            $table->char('telp', 15);
            $table->string('golongan');
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('kelas');
            $table->string('kurikulum');
            $table->string('mapel');
            $table->string('nama_kepsek');
            $table->char('nip_kepsek', 20);
            $table->string('pkb');
            $table->char('nip_pkb', 20);
            $table->string('pendidikan');
            $table->softDeletes();
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
        Schema::dropIfExists('post_data');
    }
}
