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
        Schema::create('get_cretetor_detals', function (Blueprint $table) {
            $table->id();
            $table->string('totalprofet')->nullable();
            $table->string('totalvistor')->nullable();
            $table->string('url')->nullable();
            $table->string('createtor_name')->nullable();
            $table->string('agent_name')->nullable();
            $table->date('date')->nullable();
            $table->string('totalclick')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('get_cretetor_detals');
    }
};
