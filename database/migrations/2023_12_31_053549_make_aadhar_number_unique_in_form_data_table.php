<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('form_data', function (Blueprint $table) {
            $table->unique('aadhar_number')->change();
        });
    }

    public function down()
    {
        Schema::table('form_data', function (Blueprint $table) {
            // If needed, you can define the reverse of the 'up' operation here
        });
    }
};
