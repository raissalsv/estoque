<html>
<head>
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <title>Controle de estoque</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/produtos">
            Estoque Laravel
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
          <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
        </ul>
      </div>
    </nav>

    @yield('conteudo')
    <footer class="footer">
      <p>© Livro de Laravel da Casa do Código.</p>
    </footer>

  </div>
</body>
</html>
