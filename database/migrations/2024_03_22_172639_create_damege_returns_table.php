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
        Schema::create('damege_returns', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('name');
            $table->string('mobile');
            $table->string('area');
            $table->string('address');
            $table->string('sales');
            $table->string('vehical');
            $table->string('return');
            $table->string('product');
            $table->string('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damege_returns');
    }
};
