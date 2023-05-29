const dados = {
    pergunta_1: "",
    pergunta_2: "",
    pergunta_3: ""
};

function handleDados(opcao, pergunta) {
    const ul1 = document.querySelector(".ul-1");
    const ul2 = document.querySelector(".ul-2");
    const ul3 = document.querySelector(".ul-3");
    const ul4 = document.querySelector(".ul-4");
    const cidade = document.querySelector("#cidade");
    const temp_corte = document.querySelector("#temp_corte");
    const conhece_nb = document.querySelector("#conhece_nb");
    dados[pergunta] = opcao;

    cidade.value = dados.pergunta_1;
    temp_corte.value = dados.pergunta_2;
    conhece_nb.value = dados.pergunta_3;
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