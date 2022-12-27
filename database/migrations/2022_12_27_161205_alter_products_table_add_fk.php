<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsTableAddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $id = DB::table('providers')->insertGetId([
                'name'          => 'Mecarten Mou',
                'email'         => 'mercaten@gmail.com',
                'uf'            => 'BA',
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);

            $table->foreignId('provider_id')->default($id)->after('pounds')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_provider_id_foreign');
        });
    }
}
