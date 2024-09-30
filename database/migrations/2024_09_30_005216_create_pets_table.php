<?php

use App\Enum\Gender;
use App\Enum\Size;
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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->integer('age');
            $table->enum('gender', array_column(Gender::cases(), 'name'));
            $table->string('color');
            $table->enum('size', array_column(Size::cases(), 'name'));
            $table->decimal('weight', 5, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
