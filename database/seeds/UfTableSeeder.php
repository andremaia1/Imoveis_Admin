<?php

use Illuminate\Database\Seeder;

class UfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("uf")->insert([
            [
                "id"         => 11,
                "nome"       => "Rondônia",
                "sigla"       => "RO"
            ], [
                "id"         => 12,
                "nome"       => "Acre",
                "sigla"       => "AC"
            ], [
                "id"         => 13,
                "nome"       => "Amazonas",
                "sigla"       => "AM"
            ], [
                "id"         => 14,
                "nome"       => "Roraima",
                "sigla"       => "RR"
            ], [
                "id"         => 15,
                "nome"       => "Pará",
                "sigla"       => "PA"
            ], [
                "id"         => 16,
                "nome"       => "Amapá",
                "sigla"       => "AP"
            ], [
                "id"         => 17,
                "nome"       => "Tocantins",
                "sigla"       => "TO"
            ], [
                "id"         => 21,
                "nome"       => "Maranhão",
                "sigla"       => "MA"
            ], [
                "id"         => 22,
                "nome"       => "Piauí",
                "sigla"       => "PI"
            ], [
                "id"         => 23,
                "nome"       => "Ceará",
                "sigla"       => "CE"
            ], [
                "id"         => 24,
                "nome"       => "Rio Grande do Norte",
                "sigla"       => "RN"
            ], [
                "id"         => 25,
                "nome"       => "Paraíba",
                "sigla"       => "PB"
            ], [
                "id"         => 26,
                "nome"       => "Pernambuco",
                "sigla"       => "PE"
            ], [
                "id"         => 27,
                "nome"       => "Alagoas",
                "sigla"       => "AL"
            ], [
                "id"         => 28,
                "nome"       => "Sergipe",
                "sigla"       => "SE"
            ], [
                "id"         => 29,
                "nome"       => "Bahia",
                "sigla"       => "BA"
            ], [
                "id"         => 31,
                "nome"       => "Minas Gerais",
                "sigla"       => "MG"
            ], [
                "id"         => 32,
                "nome"       => "Espírito Santo",
                "sigla"       => "ES"
            ], [
                "id"         => 33,
                "nome"       => "Rio de Janeiro",
                "sigla"       => "RJ"
            ], [
                "id"         => 35,
                "nome"       => "São Paulo",
                "sigla"       => "SP"
            ], [
                "id"         => 41,
                "nome"       => "Paraná",
                "sigla"       => "PR"
            ], [
                "id"         => 42,
                "nome"       => "Santa Catarina",
                "sigla"       => "SC"
            ], [
                "id"         => 43,
                "nome"       => "Rio Grande do Sul",
                "sigla"       => "RS"
            ], [
                "id"         => 50,
                "nome"       => "Mato Grosso do Sul",
                "sigla"       => "MS"
            ], [
                "id"         => 51,
                "nome"       => "Mato Grosso",
                "sigla"       => "MT"
            ], [
                "id"         => 52,
                "nome"       => "Goiás",
                "sigla"       => "GO"
            ], [
                "id"         => 53,
                "nome"       => "Distrito Federal",
                "sigla"       => "DF"
            ],
        ]);
    }
}
