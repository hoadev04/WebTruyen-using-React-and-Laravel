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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('author')->nullable();   
            $table->enum('status', ['ongoing', 'completed'])->default('ongoing');
            $table->enum('type', ['text', 'comic', 'mixed'])->default('comic'); // Loại truyện
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            //
        });
    }
};
