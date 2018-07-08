<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeds::class); // habilita a classe
        $this->call(PaginaSeeds::class); // habilita a classe
    }
}
