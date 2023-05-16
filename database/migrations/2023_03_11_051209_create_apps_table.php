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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('name','150');
            $table->string('size','150')->nullable();
            $table->string('type','255')->nullable();
            $table->mediumText('shortdes')->nullable();
            $table->longText('fulldes')->nullable();
            $table->string('imgsumnail','255');
            $table->text('screenshots')->nullable();
            $table->string('vergin','150')->nullable();
            $table->string('youtubeurl')->nullable();
            $table->string('androidurl')->nullable();
            $table->string('iosurl')->nullable();
            $table->string('apkurl')->nullable();
            $table->string('rate')->nullable();
            $table->foreignId('catogeryapp_id')
                ->constrained()
            ->onUpdate('cascade')
                ->onDelete('cascade')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
    }
};
