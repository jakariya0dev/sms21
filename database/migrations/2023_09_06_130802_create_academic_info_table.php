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
        Schema::create('academic_info', function (Blueprint $table) {
            $table->id();
            $table->string('ai_1');
            $table->string('ai_2');
            $table->string('ai_3');
            $table->string('ai_4');
            $table->string('ai_5');
            $table->string('ai_6');
            $table->string('ai_7');
            $table->string('ai_8');
            $table->string('ai_9');
            $table->string('ai_10');
            $table->string('ai_11');
            $table->string('ai_12');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_info');
    }
};
