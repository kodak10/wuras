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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->enum('status', ['published', 'draft', 'inactive'])->default('published');
            $table->decimal('quantite', 8, 2)->default(1);
            $table->string('couverture')->default('images/default.jpg');
            $table->string('slug')->unique();


           

            $table->timestamps();

            if (Schema::hasColumn('articles', 'discount_type')) {
                $table->dropColumn('discount_type');
            }
    
            if (Schema::hasColumn('articles', 'discount_value')) {
                $table->dropColumn('discount_value');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
