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
            $table->bigIncrements('id');
            // Business ID
            $table->integer('bid');
            // User ID
            $table->integer('uid');
            // First Name
            $table->string('fname');
            // Last Name
            $table->string('lname');
            // Contact Number
            $table->string('number');
            // Contact Email
            $table->string('email');
            // Address
            $table->longText('address');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
