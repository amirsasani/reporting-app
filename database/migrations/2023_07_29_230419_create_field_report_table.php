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
        Schema::create('field_report', function (Blueprint $table) {
            $table->id();

            $table->foreign('field_id')->references('id')->on('fields');
            $table->foreign('report_id')->references('id')->on('reports');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_report');
    }
};
