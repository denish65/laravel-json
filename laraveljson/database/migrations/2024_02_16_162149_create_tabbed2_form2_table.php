<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabbed2_form2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('f_id');
            $table->string('field4');
            $table->string('field5');
            $table->foreign('f_id')->references('id')->on('tabbed_form')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabbed2_form2');
    }
};
