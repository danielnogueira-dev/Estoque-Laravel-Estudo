@extends('layout.principal')
@section('conteudo')
	<h1>Novo Produto</h1>
	<form action="{{action('ProdutoController@adiciona')}}" method="post">
		{{csrf_field()}}
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label>Descri&ccedil;&atilde;o</label>
            <input name="descricao" class="form-control" />
		</div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" />
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" />
		</div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
	</form>	
@stop