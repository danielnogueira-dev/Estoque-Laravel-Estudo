<?php

namespace estoque\Http\Controllers;

use estoque\Http\Requests\ProdutosRequest;
use estoque\Produto;
use Illuminate\Support\Facades\Request;

Class ProdutoController extends Controller{

    public function __construct()
    {
        $this->middleware('auth')->except(['lista', 'mostra']);
    }

	public function lista()
	{
		$produtos = Produto::all();

		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function mostra($id)
	{
		$produto = Produto::find($id);

		if (empty($produto)){
			return "Esse produto n&atilde;o existe";
		}

		return view('produto.detalhes')->with('produto', $produto);
	}

	public function novo()
	{
		return view('produto.formulario');
	}

	public function adiciona(ProdutosRequest $request)
	{
		Produto::create($request->all());
		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

	public function remove($id)
	{
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}

	public function modifica($id)
	{
		$produto = Produto::find($id);
		return view('produto.modifica')->with('produto', $produto);
	}

	public function altera($id)
	{
		$produto = Produto::find($id);

		$produto->nome       = Request::input('nome');
		$produto->descricao  = Request::input('descricao');
		$produto->valor      = Request::input('valor');
		$produto->quantidade = Request::input('quantidade');

		$produto->save();

		return redirect()->action('ProdutoController@mostra', ['id' => $id])->withInput(Request::only('nome'));
	}
}