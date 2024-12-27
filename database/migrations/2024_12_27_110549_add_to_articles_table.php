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
        Schema::table('articles', function (Blueprint $table) {
            $table->boolean('is_promotion')->default(false); // Indiquer si l'article est en promotion
            $table->enum('promotion_type', ['none', 'percentage', 'fixed'])->default('none'); // Type de promotion
            $table->decimal('promotion_value', 8, 2)->nullable(); // Valeur de la promotion
            $table->date('promotion_start')->nullable(); // Date de début de la promotion
            $table->date('promotion_end')->nullable(); // Date de fin de la promotion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
};
