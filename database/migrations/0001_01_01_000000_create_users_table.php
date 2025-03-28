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
        // Schema::create('tb_sed', function(Blueprint $table){
        //     $table->id('id_sed');
        //     $table->string('nm_sed');
        // });
        Schema::create('tb_cargos', function (Blueprint $table) {
            $table->id('id_cargo');
            $table->string('nm_cargo');
            $table->string('ds_permissoes',1000);
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('id_cargo');
            $table->foreign('id_cargo')->references('id_cargo')->on('tb_cargos');
            $table->timestamps();
            // $table->unsignedBigInteger('id_sed');
            // $table->foreign('id_sed')->references('id_sed')->on('tb_sed');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('tb_sed');
        Schema::dropIfExists('tb_cargos');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
