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
        Schema::disableForeignKeyConstraints();

        Schema::create('arts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description', 1000);
            $table->string('artist_name', 50);
            $table->bigInteger('poster_id')->unsigned();
            $table->foreign('poster_id')->references('id')->on('users')->cascadeOnDelete();
            $table->text('image_url');
            $table->enum('movement', ['Abstract', 'Figurative', 'Geometric', 'Minimalist', 'Nature', 'Pop', 'Portraiture', 'Still Life', 'Surrealist', 'Typography', 'Urban']);
            $table->bigInteger('collector_id')->nullable()->unsigned();
            $table->foreign('collector_id')->references('id')->on('users')->nullOnDelete();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arts');
    }
};
