<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_curso', function(Blueprint $table){
            $table->id('id_curso');
            $table->string('nm_curso', 50);
            $table->timestamps();
            // $table->unsignedBigInteger('id_sed');
            // $table->foreign('id_sed')->references('id_sed')->on('tb_sed');
        });

        Schema::create('tb_ambiente', function(Blueprint $table){
            $table->id('id_ambiente');
            $table->string('nm_ambiente', 45);
            $table->timestamps();
            // $table->unsignedBigInteger('id_sed');
            // $table->foreign('id_sed')->references('id_sed')->on('tb_sed');
        });

        Schema::create('tb_aluno', function(Blueprint $table){
            $table->char('nr_rm', 5)->primary();
            $table->string('nm_aluno', 100);
            $table->char('cd_rfid', 8);
            $table->string('img_aluno');
            $table->timestamps();
            // $table->unsignedBigInteger('id_sed');
            // $table->foreign('id_sed')->references('id_sed')->on('tb_sed');
        });

        Schema::create('tb_evento', function(Blueprint $table){
            $table->id('id_evento');
            $table->string('nm_evento', 45);
            $table->dateTime('dt_evento');
            $table->timestamps();
        });

        Schema::create('tb_classe', function(Blueprint $table){
            $table->id('id_classe');
            $table->string('nm_classe', 45);
            $table->unsignedBigInteger('id_curso');
            $table->foreign('id_curso')->references('id_curso')->on('tb_curso');
            $table->timestamps();
        });

        Schema::create('tb_aluno_classe', function(Blueprint $table){
            $table->id('id_aluno_classe');
            $table->char('nr_rm', 5);
            $table->foreign('nr_rm')->references('nr_rm')->on('tb_aluno')->onDelete('cascade');
            $table->unsignedBigInteger('id_classe');
            $table->foreign('id_classe')->references('id_classe')->on('tb_classe');
            $table->timestamps();
        });

        Schema::create('tb_registro', function(Blueprint $table){
            $table->id('id_aluno_ambiente');
            $table->dateTime('dt_entrada');
            $table->dateTime('dt_saida')->nullable();
            $table->unsignedBigInteger('id_ambiente');
            $table->foreign('id_ambiente')->references('id_ambiente')->on('tb_ambiente');
            $table->unsignedBigInteger('id_aluno_classe');
            $table->foreign('id_aluno_classe')->references('id_aluno_classe')->on('tb_aluno_classe');
            $table->timestamps();
        });

        Schema::create('tb_sabado_letivo', function(Blueprint $table){
            $table->id('id_sabado_letivo');
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id_evento')->on('tb_evento');
            $table->unsignedBigInteger('id_aluno_classe');
            $table->foreign('id_aluno_classe')->references('id_aluno_classe')->on('tb_aluno_classe');
            $table->timestamps();
        });

        Schema::create('tb_biblioteca', function(Blueprint $table){
            $table->id('id_biblioteca');
            $table->dateTime('dt_data');
            $table->unsignedBigInteger('id_aluno_classe');
            $table->foreign('id_aluno_classe')->references('id_aluno_classe')->on('tb_aluno_classe');
            $table->timestamps();
        });

        Schema::create('tb_saidas_antecipadas', function(Blueprint $table){
            $table->id('id_saidas_antecipadas');
            $table->dateTime('dt_date');
            $table->unsignedBigInteger('id_aluno_classe');
            $table->foreign('id_aluno_classe')->references('id_aluno_classe')->on('tb_aluno_classe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_curso');
        Schema::dropIfExists('tb_ambiente');
        Schema::dropIfExists('tb_aluno');
        Schema::dropIfExists('tb_evento');
        Schema::dropIfExists('tb_classe');
        Schema::dropIfExists('tb_aluno_classe');
        Schema::dropIfExists('tb_registro');
        Schema::dropIfExists('tb_sabado_letivo');
        Schema::dropIfExists('tb_biblioteca');
        Schema::dropIfExists('tb_saidas_antecipadas');
    }
};
