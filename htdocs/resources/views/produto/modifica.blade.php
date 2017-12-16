@extends('layout.principal')
@section('conteudo')
<h1>Altera&ccedil;&atilde;o do Produto {{$produto->nome}}</h1>
<form action="{{action('ProdutoController@altera', ['id' => $produto->id])}}" method="post">
    
    {{method_field('PUT')}}
	{{csrf_field()}}    

    <div class="form-group">
        <label>Nome</label>
        <input name="nome" value="{{$produto->nome}}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Descri&ccedil;&atilde;o</label>
        <input name="descricao" value="{{$produto->descricao}}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input name="valor" value="{{$produto->valor}}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input type="number" name="quantidade" value="{{$produto->quantidade}}" class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>
@stop