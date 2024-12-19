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
             Schema::create('account', function (Blueprint $table) {
                $table->integer('a_id',10)->primaryKey();
                $table->integer('a_number')->unique();
                $table->integer('supplier_id');
                $table->float('amount')->null();
                $table->foreign('supplier_id')->references('s_id')->on('supplier');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_account');
    }
};
