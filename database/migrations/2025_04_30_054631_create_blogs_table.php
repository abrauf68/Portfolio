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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
              ->constrained('users')
              ->cascadeOnDelete();
            $table->foreignId('blog_category_id')
              ->nullable()
              ->constrained('blog_categories')
              ->nullOnDelete(); // ✅ Set null instead of deleting
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_image')->nullable();
            $table->string('main_image')->nullable();
            $table->text('meta_description')->nullable();
            $table->longText('content');
            $table->json('tags')->nullable();
            $table->enum('is_published', ['published', 'draft'])->default('published');
            $table->enum('is_active', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
