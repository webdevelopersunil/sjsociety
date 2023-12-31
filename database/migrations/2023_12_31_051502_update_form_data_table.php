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
        Schema::table('form_data', function (Blueprint $table) {
            // Remove unique constraint from mobile_number
            $table->string('mobile_number')->unique(false)->change();
            
            // Set aadhar_number as required and unique
            $table->string('aadhar_number')->nullable(false)->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('form_data', function (Blueprint $table) {
            // Reverse the changes in the down method if needed
            $table->string('mobile_number')->unique()->change();
            $table->string('aadhar_number')->nullable()->unique(false)->change();
        });
    }
};
