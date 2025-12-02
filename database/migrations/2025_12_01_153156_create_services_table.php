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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wing_id')->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('slug');
            $table->string('thum');
            $table->json('slider')->nullable();
            $table->longText('description')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('status')->nullable()->default(1);
            $table->ipAddress('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
