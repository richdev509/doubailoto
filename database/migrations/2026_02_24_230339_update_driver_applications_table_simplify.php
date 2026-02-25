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
        Schema::table('driver_applications', function (Blueprint $table) {
            // Ajouter les nouveaux champs
            $table->string('first_name')->after('id')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->boolean('has_whatsapp')->default(true)->after('phone');

            // Rendre les autres champs nullable pour inscription simple
            $table->string('email')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->date('birth_date')->nullable()->change();
            $table->string('identity_number')->nullable()->change();
            $table->string('motorcycle_model')->nullable()->change();
            $table->string('motorcycle_year')->nullable()->change();
            $table->string('motorcycle_plate')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'has_whatsapp']);
        });
    }
};
