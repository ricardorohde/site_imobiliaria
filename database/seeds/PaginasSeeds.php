<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo','=','sobre')->count();
        if($existe){
        	$paginaSobre = Pagina::where('tipo','=','sobre')->first(); 
        }else{
        	$paginaSobre = new Pagina();
        }
        $paginaSobre->titulo = "Título da empresa";
        $paginaSobre->descricao = "Descrição sobre a empresa";
        $paginaSobre->texto = "Texto sobre a empresa";
        $paginaSobre->imagem = "img/img1.jpg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1728271788315!2d-47.089241085135534!3d-23.562235584682448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0c5b5128733b%3A0x233beb2851ed31bc!2sMercado+3+Irm%C3%A3os!5e0!3m2!1spt-BR!2sbr!4v1531066885754" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        echo "Página sobre criada com sucesso!";

    }
}
