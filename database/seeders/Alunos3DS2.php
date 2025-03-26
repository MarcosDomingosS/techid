<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Alunos3DS2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_curso")->insert([
            [
                "nm_curso" => "Desenvolvimento de Sistemas", "created_at" => now()->format("Y-m-d H:i:s"), "updated_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_curso" => "Edificações", "created_at" => now()->format("Y-m-d H:i:s"), "updated_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_curso" => "Administração", "created_at" => now()->format("Y-m-d H:i:s"), "updated_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_curso" => "Enfermagem", "created_at" => now()->format("Y-m-d H:i:s"), "updated_at" => now()->format("Y-m-d H:i:s"),
            ]
        ]);

        DB::table("tb_classe")->insert([
            [
                "nm_classe" => "1DS2", "id_curso" => 1,"created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_classe" => "1DS3", "id_curso" => 1,"created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_classe" => "2DS2", "id_curso" => 1,"created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_classe" => "2DS3", "id_curso" => 1,"created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_classe" => "3DS2", "id_curso" => 1,"created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s"),
            ],
            [
                "nm_classe" => "3DS3", "id_curso" => 1,"created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s"),
            ],
        ]);

        DB::table("tb_aluno")->insert([
            [
                "nr_rm" => "09817", "nm_aluno" => "ANDRE DA SILVA FRANCA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09029", "nm_aluno" => "ANYA SOPHIA RODRIGUES SANTANA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09336", "nm_aluno" => "ARTHUR BARROS MARTINS PEREIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09069", "nm_aluno" => "ARTHUR DE ANDRADE CAVALCANTE", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09204", "nm_aluno" => "EDILSON AMARO DA SILVA JUNIOR", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09359", "nm_aluno" => "EDUARDO RIBEIRO CLEMENTINO", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09047", "nm_aluno" => "FERNANDA FONTES DE OLIVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09353", "nm_aluno" => "GABRIEL DIAS ROCHA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09663", "nm_aluno" => "GUILHERME JESUS OLIVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "10155", "nm_aluno" => "HELLEM DUARTE BERTO FERREIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09165", "nm_aluno" => "HENRIQUE DE FREITAS RIBEIRO", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09753", "nm_aluno" => "HENRIQUE SANTANA MONTEIRO", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09057", "nm_aluno" => "ITALO HENRIQUE FERNANDES DIAS", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "08632", "nm_aluno" => "JOAO PEDRO DE ARAUJO SOUZA OLIVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09349", "nm_aluno" => "KAUAN HENRY CARVALHO DA SILVA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "06407", "nm_aluno" => "LUAN SA MUNIZ DOS SANTOS DE FREITAS", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "07349", "nm_aluno" => "LUCAS BORGES DOS SANTOS", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "08635", "nm_aluno" => "LUIS FERNANDO RIBEIRO LOURENÇO", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09063", "nm_aluno" => "MARCOS DOMINGOS DOS SANTOS", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09338", "nm_aluno" => "MARYANNA CAVALCANTI DA SILVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09087", "nm_aluno" => "MATEUS DE CAMARGO RODRIGUES DA SILVA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09641", "nm_aluno" => "MATHEUS DOS SANTOS OLIVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09142", "nm_aluno" => "MATHEUS TRINDADE ALVES", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09033", "nm_aluno" => "MIGUEL ANDRADE DE OLIVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09100", "nm_aluno" => "MURILO NUNES VIEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09639", "nm_aluno" => "NICOLAS DA CONCEICAO BISPO", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09122", "nm_aluno" => "NICOLAS DANIEL DE MELO FERREIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09615", "nm_aluno" => "NICOLAS LEMOS DOS SANTOS OLIVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09127", "nm_aluno" => "PEDRO HENRIQUE SILVA DE ALMEIDA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09098", "nm_aluno" => "PEDRO SOUZA LEME", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09162", "nm_aluno" => "RUAN RODRIGUES PRIETO GAMA SILVA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09948", "nm_aluno" => "SIDNEY NUNES PERES JUNIOR", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09044", "nm_aluno" => "VITORIA DAS NEVES OLIVEIRA", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
            [
                "nr_rm" => "09032", "nm_aluno" => "WLADIMIR MONTEIRO DE OLIVEIRA JUNIOR", "img_aluno" => 'null', "created_at"=> now()->format("Y-m-d H:i:s"), "updated_at"=> now()->format("Y-m-d H:i:s")
            ],
        ]);

        DB::table("tb_aluno_classe")->insert([
            ["nr_rm" => "09817", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09029", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09336", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09069", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09204", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09359", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09047", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09353", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09663", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "10155", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09165", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09753", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09057", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "08632", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09349", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "06407", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "07349", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "08635", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09063", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09338", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09087", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09641", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09142", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09033", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09100", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09639", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09122", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09615", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09127", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09098", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09162", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09948", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09044", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
            ["nr_rm" => "09032", "id_classe" => 5, "created_at" => now(), "updated_at" => now()],
        ]);
    }
}
