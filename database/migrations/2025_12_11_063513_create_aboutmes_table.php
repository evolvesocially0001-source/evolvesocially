<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutmesTable extends Migration
{
    public function up()
    {
        Schema::create('aboutmes', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('paragraph');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aboutmes');
    }
}