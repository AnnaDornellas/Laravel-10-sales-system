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

        $pesquisar = $request->pesquisar;
        $findProduto = $this->produto->getPrudutosPesquisarIndex(search:$pesquisar ?? '');
        
        return  view('pages.produtos.paginacao' , compact('findProduto'));
    }
    public function delete(Request $request){
        $id= $request->id;
        $buscaRegistro= Produto::find($id);
        $buscaRegistro->delete();
       return response()->json(['success'=>true]);
    }
    public function cadastrarProduto(Request $request){
        if($request->method() == "POST"){
            
        }
        return view('pages.produtos.create');
    }
}
