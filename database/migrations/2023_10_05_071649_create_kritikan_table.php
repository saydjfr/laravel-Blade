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
        Schema::create('kritikan', function (Blueprint $table) {
            $table->id();
            $table->text('conten');
            $table->integer('point');
            $table->foreignId('users_id')->constrained('id')->on('users');
            $table->foreignId('film_id')->constrained('id')->on('film');
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
        Schema::dropIfExists('kritikan');
    }
};
