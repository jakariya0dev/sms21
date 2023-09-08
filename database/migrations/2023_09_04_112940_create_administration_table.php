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
        Schema::create('administration', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->text('message');
            $table->string('image');
//            $table->string('principal_name');
//            $table->string('principal_designation');
//            $table->text('principal_message');
//            $table->string('principal_image');
//            $table->string('vice_principal_name');
//            $table->string('vice_principal_designation');
//            $table->text('vice_principal_message');
//            $table->string('vice_principal_image');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administration');
    }
};
