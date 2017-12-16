<html>
<head>
    <title>Controle de Estoque</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{action('ProdutoController@lista')}}">
						Estoque Laravel
					</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="{{action('ProdutoController@lista')}}">
							Listagem
						</a>
					</li>
                    <li>
                        <a href="{{action('ProdutoController@novo')}}">
                            Novo
                        </a>
                    </li>
				</ul>
			</div>
		</nav>
		
		@yield('conteudo')

		<footer class="footer">
			<p>
				Livro de Laravel da Casa do C&oacute;digo.
			</p>
		</footer>

    </div>
</body>
</html>