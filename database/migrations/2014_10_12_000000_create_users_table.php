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
        //Final Client Table
        Schema::create('tbl_customer', function (Blueprint $table) {
            $table->id();
            $table->string('addressId');
            $table->string('orderId');
            $table->string('sofaInfoId');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phoneNumber')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_client');
    }
};
