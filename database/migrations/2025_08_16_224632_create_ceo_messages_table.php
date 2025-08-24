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
        Schema::create('ceo_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('qualifications_summary')->nullable();
            $table->string('position')->nullable();
            $table->text('sister_concern_text')->nullable();
            $table->string('image')->nullable(); // public storage path (e.g. ceo_messages/abc.jpg)
            $table->longText('message_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceo_messages');
    }
};
