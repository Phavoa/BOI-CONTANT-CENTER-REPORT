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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('states')->default('');
            $table->date('entry_date');
            $table->unsignedInteger('entries');
            $table->unsignedInteger('update');
            $table->unsignedInteger('requests');
            $table->unsignedInteger('payment_issues');
            $table->unsignedInteger('wrong_location');
            $table->unsignedInteger('call_dropped');

            $table->unsignedInteger('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');

    }
};