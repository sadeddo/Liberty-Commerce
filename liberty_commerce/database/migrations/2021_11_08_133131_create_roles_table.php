<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->boolean('Write');
                $table->boolean('Read');
                $table->boolean('Edit');
                $table->boolean('Delet');
                $table->boolean('Add');
                $table->boolean('Buy');
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
        Schema::dropIfExists('roles');
    }
}
