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
            // Remove the unique constraint from mobile_number
            $table->dropUnique('form_data_mobile_number_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('form_data', function (Blueprint $table) {
            // You can add the unique constraint back in the down method if needed
            $table->unique('mobile_number');
        });
    }
};
