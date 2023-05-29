<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <script>
    const dados = { pergunta_1: "", pergunta_2: "", pergunta_3: "" };

    function handleDados(opcao, pergunta) {
      const ul1 = document.querySelector(".ul-1");
      const ul2 = document.querySelector(".ul-2");
      const ul3 = document.querySelector(".ul-3");
      const ul4 = document.querySelector(".ul-4");
      const nome = document.querySelector("#nome");
      const email = document.querySelector("#email");
      const idade = document.querySelector("#idade");
      dados[pergunta] = opcao;

      nome.value = dados.pergunta_1;
      email.value = dados.pergunta_2;
      idade.value = dados.pergunta_3;
      if (dados.pergunta_1 == "") {
        ul1.style.display = "flex";
      }
      if (dados.pergunta_1 != "") {
        ul2.style.display = "flex";
      }
      if (dados.pergunta_2 != "") {
        ul3.style.display = "flex";
      }

      if (dados.pergunta_1 != "") {
        ul1.style.display = "none";
      }
      if (dados.pergunta_2 != "") {
        ul2.style.display = "none";
      }
      if (dados.pergunta_3 != "") {
        ul3.style.display = "none";
      }
      if (dados.pergunta_3 != "") {
        ul4.style.display = "flex";
      }

      var formulario = document.getElementById("formulario");
      if (
        dados.pergunta_1 != "" &&
        dados.pergunta_2 != "" &&
        dados.pergunta_3 != ""
      ) {
        formulario.addEventListener("submit", function (event) {
          event.preventDefault(); // Evita que o formulário seja enviado normalmente

          var url = "processa_index.php";
          var dadosDoFormulario = new FormData(formulario);

          fetch(url, {
            method: "POST",
            body: dadosDoFormulario,
          })
            .then(function (response) {
              if (response.ok) {
                return response.text();
              }
              throw new Error("Erro ao enviar o formulário.");
            })
            .then(function (data) {
              console.log(data); // Exibe a resposta do servidor
              // Faça algo com a resposta do servidor, se necessário
            })
            .catch(function (error) {
              console.log(error); // Exibe qualquer erro ocorrido
            });
        });
      }
    }
  </script>
  <body>
    <div class="container">
      <div class="area-container">
        <div class="card-left">
          <img src="img/confiant.png" />
        </div>
        <form
          id="formulario"
          class="card-right"
          method="POST"
          action="processa_index.php"
        >
          <input type="hidden" name="nome" id="nome" required />
          <input type="hidden" name="email" id="email" required />
          <input type="hidden" name="idade" id="idade" required />
          <ul class="ul-1">
            <p>
              <span class="span-1">1</span>
              <span>Você é da cidade de SANTA LUZA?</span>
            </p>
            <li onClick="handleDados('Sim', 'pergunta_1')">
              <span>Sim</span> <MdKeyboardDoubleArrowRight />
            </li>
            <li onClick="handleDados('Não', 'pergunta_1')">
              <span>Não</span><MdKeyboardDoubleArrowRight />
            </li>
          </ul>
          <ul class="ul-2" style="display: none">
            <p>
              <span class="span-1">2</span>
              <span>Você conta o cabelo de quanto em quanto tempo?</span>
            </p>
            <li onClick="handleDados('Toda semana', 'pergunta_2')">
              <span>Toda semana</span> <MdKeyboardDoubleArrowRight />
            </li>
            <li onClick="handleDados('15 em 15 dias', 'pergunta_2')">
              <span>15 em 15 dias</span><MdKeyboardDoubleArrowRight />
            </li>
            <li onClick="handleDados('1x ao mês', 'pergunta_2')">
              <span>1x ao mês</span><MdKeyboardDoubleArrowRight />
            </li>
          </ul>
          <ul class="ul-3" style="display: none">
            <p>
              <span class="span-1">3</span>
              <span>Você conhece o clube da NB?</span>
            </p>
            <li
              onClick="handleDados('Já sim', 'pergunta_3')"
              style="padding: 0px"
            >
              <button type="submit">Já sim</button>
              <MdKeyboardDoubleArrowRight />
            </li>
            <li
              onClick="handleDados('Quero conhecer', 'pergunta_3')"
              style="padding: 0px"
            >
              <button type="submit">Quero conhecer</button
              ><MdKeyboardDoubleArrowRight />
            </li>
          </ul>
          <ul class="ul-4" style="display: none; justify-content: center">
            <p>
              <span style="text-align: center; left: 0px; width: 100%"
                >Finalizado! Obrigado por participar!</span
              >
            </p>
          </ul>
        </form>
      </div>
    </div>
  </body>
</html>
