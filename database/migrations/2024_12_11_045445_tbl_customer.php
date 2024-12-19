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
        //
        Schema::create('tbl_customer',function (Blueprint $table)
        {
            $table->string('c_id')->primary();
            $table->string('c_name',30);
            $table->string('c_email',40)->unique();
            $table->integer('c_phone');
            $table->string('c_address',50);
            $table->string('c_city',15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
