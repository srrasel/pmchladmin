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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('documentId')->nullable();
            $table->string('name');
            $table->string('specialty');
            $table->text('qualifications')->nullable();
            $table->integer('position')->nullable();
            $table->string('slug')->unique();
            $table->longText('bio')->nullable(); // <--- changed here
            $table->string('image')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
