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
        Schema::create('order_tbl', function (Blueprint $table) {
            $table->integer('oid',10)->primaryKey();
            $table->float('amount');
            $table->integer('c_id');
            $table->timestamps();
            $table->foreign('c_id')->references('c_id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
