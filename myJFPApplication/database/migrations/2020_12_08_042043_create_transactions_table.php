<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('sender_name');
            $table->string('sender_phone_number');
            $table->string('good_name');
            $table->string('good_type');
            $table->integer('good_weight');
            $table->string('service');
            $table->string('payment');
            $table->string('cover')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('sender_address');
            $table->string('receiver_name');
            $table->string('receiver_phone_number');
            $table->text('receiver_address');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
