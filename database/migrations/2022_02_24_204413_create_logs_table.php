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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->text('n_bimeshode');//بیمه شده ها
            $table->text('s_bimeshode');//شماره تلفن
            $table->text('k_bimeshode');//کارفرما یان بیمه شده ها
            $table->text('m_bimeshode');//مبلغ هزینه شده
            $table->text('g_bimeshode');//گردش حقوق
            $table->text('n_karfarma');//کار فرمایان
            $table->text('s_karfarma');//شماره تماش کارفرمایان
            $table->text('m_karfarma');//مبلغ به جیب زده کارفرما
            $table->text('g_karfarma');//گردش حقوق
            $table->text('all');//مبلغ جمع شده
            $table->text('sod');//سود
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
        Schema::dropIfExists('logs');
    }
};
