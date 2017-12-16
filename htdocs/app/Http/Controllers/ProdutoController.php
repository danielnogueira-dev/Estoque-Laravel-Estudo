<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

Class ProdutoController extends Controller{

	public function lista()
	{

		$produtos = DB::select('SELECT * FROM produtos');

		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function mostra($id)
	{
		$produtos = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

		if (empty($produtos)){
			return "Esse produto n&atilde;o existe";
		}

		return view('produto.detalhes')->with('produto', $produtos[0]);
	}

}