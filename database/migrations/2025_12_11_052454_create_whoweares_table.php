<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhowearesTable extends Migration
{
    public function up()
    {
        Schema::create('whoweares', function (Blueprint $table) {
            $table->id();
            $table->text('pera1')->nullable();
            $table->text('pera2')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('whoweares');
    }
}