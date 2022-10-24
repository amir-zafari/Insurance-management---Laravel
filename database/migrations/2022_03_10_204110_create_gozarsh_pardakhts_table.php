<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGozarshPardakhtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gozarsh_pardakhts', function (Blueprint $table) {
            $table->id();
            $table->string('id_bimeshode');//بیمه شده ها
            $table->text('id_karfama_bimeshode');//کارفرما یان بیمه شده ها
            $table->text('pol_bime');//مبلغ هزینه شده
            $table->text('id_jab');//  کار بیمه شده
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
        Schema::dropIfExists('gozarsh_pardakhts');
    }
}
