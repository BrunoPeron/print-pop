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
        Schema::create('order_services', function (Blueprint $table) {
            $table->id();
            $table->char('product', '50');
            $table->char('printer', '50');
            $table->date('date_start')->nullable(false);
            $table->date('date_end');
            $table->unsignedBigInteger('id_labor');
            $table->foreign('id_labor')->references('id')->on('labors');
            $table->unsignedBigInteger('id_printer');
            $table->foreign('id_printer')->references('id')->on('printers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_services');
    }
};
