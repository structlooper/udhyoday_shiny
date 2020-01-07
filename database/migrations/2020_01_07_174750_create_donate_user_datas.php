<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonateUserDatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate_user_datas', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('pay_id')->unique();
          $table->string('status');
          $table->string('transaction_id');
          $table->string('name')->nullable();
          $table->string('email')->nullable();
          $table->string('phone');
          $table->string('address')->nullable();
          $table->float('price');

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
        Schema::dropIfExists('donate_user_datas');
    }
}
