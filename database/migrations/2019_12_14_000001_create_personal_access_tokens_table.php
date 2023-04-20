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
        Schema::create('tbl_employee', function (Blueprint $table) {
            $table->id();
            $table->int('addressId');
            $table->text('picture');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('birthday');
            $table->string('phoneNumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
