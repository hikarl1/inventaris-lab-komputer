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
        Schema::create('lab_assets', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('category');
            $table->string('serial_number')->unique();
            $table->integer('stock');
            $table->enum('condition', ['Good', 'Damaged', 'Maintenance']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_assets');
    }
};
