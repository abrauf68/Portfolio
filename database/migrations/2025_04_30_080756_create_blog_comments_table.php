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
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
              ->constrained('users')
              ->cascadeOnDelete();
            $table->foreignId('blog_id')
              ->constrained('blogs')
              ->cascadeOnDelete();
            $table->foreignId('replayed_id')
              ->nullable()
              ->constrained('blog_comments')
              ->cascadeOnDelete();
            $table->text('message');
            $table->enum('is_active', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_comments');
    }
};
