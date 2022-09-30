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
        Schema::create('support_materials', function (Blueprint $table) {
            $table->id();
            $table->char('printer', '50');
            $table->char('material', '50');
            $table->unsignedBigInteger('id_printer');
            $table->foreign('id_printer')->references('id')->on('printers');
            $table->unsignedBigInteger('id_material');
            $table->foreign('id_material')->references('id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_materials');
    }
};
