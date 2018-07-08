<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{
    public function sobre()
    {
      $pagina = Pagina::where('tipo','=','sobre')->first();  //primeiro elemento da lista
      return view('site.sobre',compact('pagina'));
    }
}
