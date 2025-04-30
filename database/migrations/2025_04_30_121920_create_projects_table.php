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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('description');
            $table->string('client_name')->nullable();
            $table->string('industry')->nullable();
            $table->string('technology')->nullable();
            $table->string('project_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('main_image')->nullable();
            $table->timestamp('completion_date')->nullable();
            $table->enum('status', ['completed', 'ongoing', 'upcoming'])->default('completed');
            $table->enum('is_featured', ['0', '1'])->default('0');
            $table->enum('is_active', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
