document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formVeiculo");
  const mensagem = document.getElementById("mensagem");
  const dataCadastro = document.getElementById("data_cadastro");

  dataCadastro.value = new Date().toISOString().split("T")[0];

  form.addEventListener("submit", async (event) => {
    event.preventDefault();

    const dados = new FormData(form);

    try {
      const resposta = await fetch("php/salvar_veiculo.php", {
        method: "POST",
        body: dados
      });

      const resultado = await resposta.json();

      if (resultado.sucesso) {
        mensagem.style.color = "green";
        mensagem.textContent = resultado.mensagem;
        form.reset();
        dataCadastro.value = new Date().toISOString().split("T")[0];
      } else {
        mensagem.style.color = "red";
        mensagem.textContent = resultado.mensagem;
      }
    } catch (erro) {
      mensagem.style.color = "red";
      mensagem.textContent = "Erro ao enviar os dados.";
    }
  });
});
