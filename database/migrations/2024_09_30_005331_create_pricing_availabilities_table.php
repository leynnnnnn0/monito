<?php

use App\Enum\AdoptionStatus;
use App\Enum\AvailabilityStatus;
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
        Schema::create('pricing_availabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->constrained('pets')->onDelete('cascade');
            $table->decimal('price', 8, 2);
            $table->enum('availability_status', array_column(AvailabilityStatus::cases(), 'name'));
            $table->enum('adoption_status', array_column(AdoptionStatus::cases(), 'name'));
            $table->timestamp('date_added')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_availabilities');
    }
};
