<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_code');
            $table->string('username');
            $table->string('password');
            $table->string('role');
            $table->string('first_login')->enum('true','false');
            $table->rememberToken();
            $table->timestamps();
        });
           DB::table('users')->insert(
            array(
                'company_code' => 'C',
                'username' => 'SuperAdmin',
                'password' => bcrypt('superadmin'),
                'role' => 'superadmin',
                'first_login' => 'true',
                )
                );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
