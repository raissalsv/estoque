<html>
<head>
  <link href="/css/app.css" rel="stylesheet">
  <title>Controle de estoque</title>
</head>
<body>
  <div class="container">
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hover">
      <?php foreach ($produtos as $p):?>
        <tr>
          <td><?=$p->nome?></td>
          <td><?=$p->valor?></td>
          <td><?=$p->quantidade?></td>
          <td><?=$p->descricao?></td>
        </tr>
      <?php endforeach;?>
    </table>
  </div>
</body>
</table>
