<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    protected $produto;

    public function __construct(Produto $produto){

        $this->produto = $produto;
    }
    public function index(Request $request){
        $findProduto = Produto::all();
        
        return  view('pages.produtos.paginacao' , compact('findProduto'));
    }
}
