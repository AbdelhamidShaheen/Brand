<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id', true);
            $table->text('name');
            $table->text('email');
            $table->text('phone')->nullable();
            $table->text('pasword')->nullable();
            $table->tinyInteger('email_is_verified');
            $table->tinyInteger('phone_is_verified');
            $table->enum('role', ['user', 'trader'])->nullable()->default('user');
            $table->text('avatar')->nullable()->default('avatars/users');

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
