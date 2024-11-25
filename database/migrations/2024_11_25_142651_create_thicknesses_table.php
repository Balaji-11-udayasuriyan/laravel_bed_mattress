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
        Schema::create('thicknesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('value_in_inches', 5,2);
            $table->decimal('value_in_feet', 5,2);
            $table->decimal('value_in_cm', 5,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thicknesses');
    }
};
