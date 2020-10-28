<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->comment('نام کاربری');
            $table->string('password')->comment('کلمه عبور');
            $table->string('name')->comment('نام');
            $table->string('phone')->unique()->nullable()->comment('تلفن همراه');
            $table->string('email')->unique()->nullable()->comment('ایمیل');
            $table->timestamp('email_verified_at')->nullable()->comment('تاریخ تایید ایمیل');
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
        Schema::dropIfExists('admins');
    }
}
