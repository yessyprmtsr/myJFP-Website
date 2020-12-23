<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transactions_id');
            $table->unsignedBigInteger('sprinter_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('transactions_id')->references('id')->on('transactions')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreign('sprinter_id')->references('id')->on('sprinters')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
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
        Schema::dropIfExists('trackings');
    }
}
