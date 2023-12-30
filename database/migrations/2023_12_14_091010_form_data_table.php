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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->bigInteger('whatsapp_number');
            $table->string('aadhar_number')->nullable();
            $table->string('email');
            $table->string('mobile_number')->unique();
            $table->string('second_mobile_number')->nullable();
            $table->string('qualification');
            $table->string('other_education')->nullable();
            $table->string('gender');
            $table->string('nationality')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('village_address')->nullable();
            $table->string('post_office')->nullable();
            $table->string('district')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('state')->nullable();
            $table->enum('payment_status',[1,0])->default(0);
            $table->float('payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};

