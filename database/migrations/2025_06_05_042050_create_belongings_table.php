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
        Schema::create('belongings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('itinerary_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->boolean('checked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('belongings');
    }
};
