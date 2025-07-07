<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



use App\Models\Album;
use App\Models\Image;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('img_id')->unique();
            $table->boolean('is_fav');
            $table->integer('album_id')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create('album_image', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Image::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Album::class )->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
