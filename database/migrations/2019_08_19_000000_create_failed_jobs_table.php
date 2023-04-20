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
        Schema::create('tbl_DeliveryPickup', function (Blueprint $table) {
            $table->id();//ID sa pick ug pag deliver
            $table->int('customerID');//Kinsay nagpaorder
            $table->int('orderID');//Unsay giorder
            $table->int('employeeId');//Kinsay driver
            $table->int('addressId');//Asa padulngan
            $table->timestamp('time');//Time nga ni lakaw
            $table->timestamp('time');//Time pagbalik
            $table->int('status');//Status done or not
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};
