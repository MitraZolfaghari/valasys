<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 20)->unique()->comment('کد آیتم (انگلیسی)');
            $table->string('name', 50)->comment('نام آیتم');
            $table->unsignedBigInteger('parent_id')->nullable()->comment('والد');
            $table->text('description')->nullable()->comment('توضیحات');
            $table->boolean('is_enable')->default(true)->comment('وضعیت，0-غیر فعال，1-فعال');
            $table->integer('order')->default(0)->comment('ترتیب');
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
        Schema::dropIfExists('menus');
    }
}
