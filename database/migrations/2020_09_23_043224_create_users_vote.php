<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_vote', function (Blueprint $table) {
            $table->id();
            $table->string('kandidat');
            $table->string('foto');
            $table->string('VISI');
            $table->string('MISI_1');
            $table->string('MISI_2');
            $table->string('MISI_3');
            $table->string('MISI_4');
            $table->integer('jumlah');
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
        Schema::dropIfExists('users_vote');
    }
}
