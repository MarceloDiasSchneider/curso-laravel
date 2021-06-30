<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // inserindo com uma estancia do objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Quattro Venti';
        $fornecedor->site = 'quattroventi.it';
        $fornecedor->email = 'contato@quattroventi.it';
        $fornecedor->uf = 'RM';
        $fornecedor->save();

        // inserindo utilizando o metodo create() | requerer $fillable na classe
        Fornecedor::create([
            'nome' => 'Trestevere',
            'site' => 'trastevere.it',
            'email' => 'contato@trastevere.it',
            'uf' => 'RM',
        ]);

        // inserindo com o metodos insert da classe do banco de dados
        // DB::table('fornecedores')->insert([
        //     'nome' => 'Roma Termini',
        //     'site' => 'romatermini.it',
        //     'email' => 'contato@romatermini.it',
        //     'uf' => 'RM',
        // ]);
    }
}
