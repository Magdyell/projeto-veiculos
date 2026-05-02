<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Veículos</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="topo">
    <h1>Veículos Cadastrados</h1>
    <p>Consulta dos veículos disponíveis para venda</p>
  </header>

  <main class="container">
    <section class="card">
      <div class="cabecalho-lista">
        <h2>Lista de Veículos</h2>
        <a href="index.html" class="link-botao">Novo Cadastro</a>
      </div>

      <div class="tabela-container">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Placa</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Ano Fab.</th>
              <th>Ano Mod.</th>
              <th>Cor</th>
              <th>Combustível</th>
              <th>KM</th>
              <th>Chassi</th>
              <th>Renavam</th>
              <th>Data</th>
              <th>Observações</th>
            </tr>
          </thead>
          <tbody id="corpoTabela"></tbody>
        </table>
      </div>
    </section>
  </main>

  <script src="js/listar.js"></script>
</body>
</html>
