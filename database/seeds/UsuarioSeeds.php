<?php

use Illuminate\Database\Seeder;
use App\User; // usa do modelo para criar usuário, modelo esse que está na pasta app
class UsuarioSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Karen Lara";
        $usuario->email = "karen@teste.com";
        $usuario->password = bcrypt("123456");
        $usuario->save();
    }
}
