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
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('username')->unique()->comment('نام کاربری');
            $table->string('password');
            $table->string('mobile')->unique()->nullable()->comment('تلفن همراه');
            $table->string('email')->unique()->comment('ایمیل');
            $table->timestamp('email_verified_at')->nullable()->comment('تاریخ تایید ایمیل');
            $table->boolean('is_enable')->default(true)->comment('وضعیت，0-غیر فعال，1-فعال');
            $table->timestamp('last_login_at')->nullable()->comment('آخرین ورود');
            $table->timestamp('login_at')->nullable();
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
