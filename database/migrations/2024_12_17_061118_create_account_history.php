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
        Schema::create('account_history', function (Blueprint $table) {
            $table->integer('as_id',10)->primaryKey();
            $table->string('a_number');
            $table->string('details');
            $table->integer('account_id');
            $table->foreign('account_id')->references('a_id')->on('account');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_history');
    }
};
