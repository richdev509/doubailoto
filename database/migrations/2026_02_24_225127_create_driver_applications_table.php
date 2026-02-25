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
        Schema::create('driver_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('address');
            $table->date('birth_date');
            $table->string('identity_number')->unique();
            $table->string('identity_photo')->nullable(); // Path to uploaded photo
            $table->string('motorcycle_model');
            $table->string('motorcycle_year');
            $table->string('motorcycle_plate')->unique();
            $table->string('motorcycle_photo')->nullable();
            $table->string('license_photo')->nullable();
            $table->boolean('has_smartphone')->default(true);
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('rejection_reason')->nullable();
            $table->boolean('payment_completed')->default(false);
            $table->string('payment_reference')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_applications');
    }
};
