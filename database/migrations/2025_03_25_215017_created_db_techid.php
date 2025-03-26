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
        Schema::create('tb_rfid', function (Blueprint $table) {
            $table->id('id_rfid');
            $table->string('cd_rfid', 50);
        });
        Schema::create('tb_aluno', function (Blueprint $table) {
            $table->char('nr_rm', 5)->primary();
            $table->string('nm_aluno', 100);
            $table->unsignedBigInteger('id_rfid');
            $table->foreign('id_rfid')->references('id_rfid')->on('tb_rfid');
            $table->string('img_aluno');
            $table->timestamps();
            // $table->unsignedBigInteger('id_sed');
            // $table->foreign('id_sed')->references('id_sed')->on('tb_sed');
        });
        Schema::create('tb_curso', function (Blueprint $table) {
            $table->id('id_curso');
            $table->string('nm_curso', 50);
            $table->timestamps();

            // Se a tabela Sed existir
            // $table->unsignedBigInteger('id_sed');
            // $table->foreign('id_sed')->references('id_sed')->on('tb_sed');
        });

        Schema::create('tb_evento', function (Blueprint $table) {
            $table->id('id_evento');
            $table->string('nm_evento', 45);
            $table->dateTime('dt_inicio');
            $table->dateTime('dt_fim');
            $table->string('ds_tipo');
            $table->timestamps();
        });
        Schema::create('tb_rotina', function (Blueprint $table) {
            $table->id('id_rotina');
            $table->string('ds_tipo');
            $table->timestamps();
        });
        Schema::create('tb_classe', function (Blueprint $table) {
            $table->id('id_classe');
            $table->string('nm_classe', 45);
            $table->unsignedBigInteger('id_curso');
            $table->foreign('id_curso')->references('id_curso')->on('tb_curso');
            $table->timestamps();
        });
        Schema::create('tb_aluno_classe', function (Blueprint $table) {
            $table->id('id_aluno_classe');
            $table->char('nr_rm', 5);
            $table->foreign('nr_rm')->references('nr_rm')->on('tb_aluno')->onDelete('cascade');
            $table->unsignedBigInteger('id_classe');
            $table->foreign('id_classe')->references('id_classe')->on('tb_classe');
            $table->timestamps();
        });

        Schema::create('tb_registro_evento', function (Blueprint $table) {
            $table->id('id_registro_evento');
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id_evento')->on('tb_evento');
            $table->unsignedBigInteger('id_aluno_classe');
            $table->foreign('id_aluno_classe')->references('id_aluno_classe')->on('tb_aluno_classe');
            $table->timestamps();
        });

        Schema::create('tb_registro_rotina', function (Blueprint $table) {
            $table->id('id_registro_rotina');
            $table->unsignedBigInteger('id_rotina');
            $table->foreign('id_rotina')->references('id_rotina')->on('tb_rotina');
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

        Schema::dropIfExists('tb_rfid');
        Schema::dropIfExists('tb_aluno');
        Schema::dropIfExists('tb_curso');
        Schema::dropIfExists('tb_evento');
        Schema::dropIfExists('tb_rotina');
        Schema::dropIfExists('tb_classe');
        Schema::dropIfExists('tb_aluno_classe');
        Schema::dropIfExists('tb_registro_evento');
        Schema::dropIfExists('tb_registro_rotina');
    }
};
