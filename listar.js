document.addEventListener("DOMContentLoaded", carregarVeiculos);

async function carregarVeiculos() {
  const corpoTabela = document.getElementById("corpoTabela");

  try {
    const resposta = await fetch("php/listar_veiculos.php");
    const veiculos = await resposta.json();

    corpoTabela.innerHTML = "";

    if (veiculos.length === 0) {
      corpoTabela.innerHTML = `
        <tr>
          <td colspan="13">Nenhum veículo cadastrado.</td>
        </tr>
      `;
      return;
    }

    veiculos.forEach((veiculo) => {
      const linha = document.createElement("tr");

      linha.innerHTML = `
        <td>${veiculo.id}</td>
        <td>${veiculo.placa}</td>
        <td>${veiculo.marca}</td>
        <td>${veiculo.modelo}</td>
        <td>${veiculo.ano_fabricacao}</td>
        <td>${veiculo.ano_modelo}</td>
        <td>${veiculo.cor}</td>
        <td>${veiculo.combustivel}</td>
        <td>${veiculo.quilometragem}</td>
        <td>${veiculo.chassi}</td>
        <td>${veiculo.renavam}</td>
        <td>${veiculo.data_cadastro}</td>
        <td>${veiculo.observacoes}</td>
      `;

      corpoTabela.appendChild(linha);
    });
  } catch (erro) {
    corpoTabela.innerHTML = `
      <tr>
        <td colspan="13">Erro ao carregar os veículos.</td>
      </tr>
    `;
  }
}
