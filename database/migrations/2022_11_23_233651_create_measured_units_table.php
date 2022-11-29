<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasuredUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measured_units', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 100);
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('measured_units_id')->constrained();
        });

        Schema::table('product_details', function (Blueprint $table) {
            $table->foreignId('measured_units_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign('product_details_measured_units_id_foreign');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_measured_units_id_foreign');
        });

        Schema::dropIfExists('measured_units');
    }
}
