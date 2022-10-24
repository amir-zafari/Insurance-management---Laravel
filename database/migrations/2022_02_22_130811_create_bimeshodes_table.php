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
        Schema::create('bimeshodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('somare');
            $table->string('mly');
            $table->string('bime');
            $table->string('id_jab');
            $table->string('shnasname');
            $table->string('mahl_tvalod');
            $table->string('tarikh_tvalod');
            $table->string('pdar');
            $table->bigInteger('hag_ma');
            $table->bigInteger('hag_karfama');
            $table->bigInteger('hag_malyat')->nullable();
            $table->integer('pardakht')->nullable();
            $table->integer('pardakht_hgog')->nullable();
            $table->integer('id_karfama')->nullable();
            $table->text('text')->nullable();
            $table->string('check')->nullable();
            $table->string('cart')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('bimeshodes');
    }
};
