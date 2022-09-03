<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('account')->nullable()->comment('帳號');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('gender')->nullable()->comment('性別');
            $table->date('birthday')->nullable()->comment('生日');
            $table->string('mail')->nullable()->comment('信箱');
            $table->text('note')->nullable()->comment('備註');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accountinfo');
    }
};
