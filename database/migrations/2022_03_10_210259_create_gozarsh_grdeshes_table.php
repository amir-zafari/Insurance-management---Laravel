<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGozarshGrdeshesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gozarsh_grdeshes', function (Blueprint $table) {
            $table->id();
            $table->string('id_bimeshode');//بیمه شده ها
            $table->string('id_karfama_bimeshode');//کارفرما یان بیمه شده ها
            $table->string('bime');//مبلغ تایید شده
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
        Schema::dropIfExists('gozarsh_grdeshes');
    }
}
