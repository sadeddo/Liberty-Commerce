<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('image');
            $table->double('price');
            $table->double('stock');
            $table->double('quantity')->default('1');
            /*$table->text('Ingredients');
            $table->text('Preparation');*/
            $table->text('description');
            /*$table->foreignId('catalogues_id')->constrained();*/
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
        Schema::dropIfExists('produits');
    }
}
