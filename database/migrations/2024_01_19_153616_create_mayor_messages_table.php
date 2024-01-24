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
        Schema::create('mayor_messages', function (Blueprint $table) {
            $table->id();
            $table->string('mayor_name');
            $table->string('mayor_image')->nullable();
            $table->text('content')->nullable();
            // $table->date('publication_date');
            $table->softDeletes(); // Adding soft delete support
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mayor_messages');
    }
};
