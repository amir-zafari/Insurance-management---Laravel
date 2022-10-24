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
        Schema::create('karfarmas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('somare');
            $table->string('karkah')->nullable();
            $table->text('text')->nullable();
            $table->integer('gardsh')->nullable();
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
        Schema::dropIfExists('karfarmas');
    }
};
