<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->comment('نام');
            $table->string('lname')->comment('نام خانوادگی');
            $table->string('username')->unique()->comment('نام کاربری');
            $table->string('password')->comment('کلمه عبور');
            $table->string('phone')->unique()->nullable()->comment('تلفن همراه');
            $table->string('email')->unique()->nullable()->comment('ایمیل');
            $table->timestamp('email_verified_at')->nullable()->comment('تاریخ تایید ایمیل');
            $table->boolean('is_enable')->default(true)->comment('وضعیت，0-غیر فعال，1-فعال');
            $table->timestamp('last_login_at')->nullable()->comment('آخرین ورود');
            $table->timestamp('login_at')->nullable()->comment('تاریخ ورود');
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
        Schema::dropIfExists('managers');
    }
}
