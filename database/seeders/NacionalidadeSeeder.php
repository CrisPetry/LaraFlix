<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\nacionalidade;

class NacionalidadeSeeder extends Seeder
{
    
    public function run()
    {
        nacionalidade::create(['descricao' => 'Brasileiro(a)']);
        nacionalidade::create(['descricao' => 'Espanhol(a)']);
        nacionalidade::create(['descricao' => 'Italiano(a)']);
        nacionalidade::create(['descricao' => 'Chines(a)']);
    }
}
