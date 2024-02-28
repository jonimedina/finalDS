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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->foreign('email')
                    ->references('email')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('rol');
            $table->string('materia1')->nullable();
            $table->string('aniomateria1')->nullable();
            $table->string('materia2')->nullable();
            $table->string('aniomateria2')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
