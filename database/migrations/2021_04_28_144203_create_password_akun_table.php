<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_akun', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('akun_id');
            $table->foreign('akun_id')->references('id')->on('akuns');

            $table->unsignedInteger('password_id');
            $table->foreign('password_id')->references('id')->on('passwords');
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
        Schema::dropIfExists('password_akun');
    }
}
