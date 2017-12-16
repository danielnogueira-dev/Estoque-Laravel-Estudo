@extends('layout.principal')
@section('conteudo')
	<h1>Detalhes do Produto {{$produto->nome}}</h1>
	<ul>
		<li><b>Valor:</b> R$ {{$produto->valor}}</li>
		<li><b>Descri&ccedil;&atilde;o:</b> {{$produto->descricao}}</li>
		<li><b>Quantidade:</b> {{$produto->quantidade}}</li>
	</ul>

	@if (old('nome'))
	<div class="alert alert-success">
		<strong>Sucesso!</strong> O produto {{old('nome')}} foi alterado.
	</div>
	@endif
@stop