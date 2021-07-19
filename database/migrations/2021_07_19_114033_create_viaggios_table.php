<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggios', function (Blueprint $table) {
            $table->id();
            $table->string("destinazione");
            $table->string("img")->nullable();
            $table->string("hotel")->nullable();
            $table->string("valutazione")->nullable();
            $table->decimal("prezzo")->nullable();
            $table->string("descrizione")->nullable();
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
        Schema::dropIfExists('viaggios');
    }
}
