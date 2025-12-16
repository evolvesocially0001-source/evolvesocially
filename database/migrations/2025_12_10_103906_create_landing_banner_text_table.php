<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('landing_banner_text', function (Blueprint $table) {
        $table->id();
        $table->string('text1')->nullable();
        $table->string('text2')->nullable();
        $table->string('text3')->nullable();
        $table->text('pera1')->nullable();
        $table->text('pera2')->nullable();
        $table->text('pera3')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_banner_text');
    }
};