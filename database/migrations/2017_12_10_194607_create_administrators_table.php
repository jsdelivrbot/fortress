<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('avatar')->default('administrator/avatars/default.jpg');
            $table->boolean('super_admin')->default(0);
            $table->string('password');
            $table->dateTime('last_visited')->nullable();
            $table->rememberToken();
            $table->timestamps();

//            $table->foreign('id')->references('first_user')->on('room');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrators');
    }
}
