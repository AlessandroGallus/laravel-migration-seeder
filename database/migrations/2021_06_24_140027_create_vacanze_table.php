<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanzeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacanze', function (Blueprint $table) {
            $table->id();
            $table->string('reference',12);
            $table->string('destination', 50);
            $table->string('durata', 50);
            $table->float('price', 10,2);
            $table->text('description');
            $table->string('trasporto', 50);
            $table->string('type', 50);
            $table->string('alloggio', 50);
            $table->string('pensione', 50);
            $table->string('babypark', 10)->nullable();
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
        Schema::dropIfExists('vacanze');
    }
}
