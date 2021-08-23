<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create(['nome' => 'Terror', 'maiorobra' => 'It- A Coisa', 'destaque' => 'Stephen King', 'popularidade' => '9.0']);
        Genero::create(['nome' => 'Romance', 'maiorobra' => 'Como Eu Era Antes de Você', 'destaque' => 'Jojo Moyes', 'popularidade' => '6.0']);
        Genero::create(['nome' => 'Biografia', 'maiorobra' => 'O Diário de Anne Frank', 'destaque' => 'Anne Frank', 'popularidade' => '10.0']);
        Genero::create(['nome' => 'New Adult', 'maiorobra' => 'A Culpa é das Estrelas', 'destaque' => 'John Green', 'popularidade' => '8.5']);
        Genero::create(['nome' => 'Infantil', 'maiorobra' => 'Peter Pan', 'destaque' => 'James Barrie', 'popularidade' => '8.0']);
    }
}
