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
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('file')->nullable(); // Image or Video
            $table->text('content')->nullable();
            //$table->date('publication_date');
            $table->json('additional_info')->nullable();
            $table->foreignId('municipality_type_id')->constrained('municipality_types');
            $table->softDeletes(); // Adding soft delete support
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};
