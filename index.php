<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<script src="assets/index.js"></script>
<body>
  <div class="container">
    <div class="area-container">
      <div class="card-left">
        <img src="assets/img/nb-icon.png" width="320" height="320"/>
      </div>

      <form id="formulario" class="card-right" method="POST" action="processa_index.php">
        <input type="hidden" name="cidade" id="cidade" required />
        <input type="hidden" name="temp_corte" id="temp_corte" required />
        <input type="hidden" name="conhece_nb" id="conhece_nb" required />
        <ul class="ul-1">
          <p>
            <span class="span-1">1</span>
            <span>Você é da cidade de SANTA LUZA?</span>
          </p>
          <li onClick="handleDados('Sim', 'pergunta_1')">
            <span>Sim</span>
            <MdKeyboardDoubleArrowRight />
          </li>
          <li onClick="handleDados('Não', 'pergunta_1')">
            <span>Não</span>
            <MdKeyboardDoubleArrowRight />
          </li>
        </ul>
        <ul class="ul-2" style="display: none">
          <p>
            <span class="span-1">2</span>
            <span>Você conta o cabelo de quanto em quanto tempo?</span>
          </p>
          <li onClick="handleDados('Toda semana', 'pergunta_2')">
            <span>Toda semana</span>
            <MdKeyboardDoubleArrowRight />
          </li>
          <li onClick="handleDados('15 em 15 dias', 'pergunta_2')">
            <span>15 em 15 dias</span>
            <MdKeyboardDoubleArrowRight />
          </li>
          <li onClick="handleDados('1x ao mês', 'pergunta_2')">
            <span>1x ao mês</span>
            <MdKeyboardDoubleArrowRight />
          </li>
        </ul>
        <ul class="ul-3" style="display: none">
          <p>
            <span class="span-1">3</span>
            <span>Você conhece o clube da NB?</span>
          </p>
          <li onClick="handleDados('Já sim', 'pergunta_3')" style="padding: 0px">
            <button type="submit">Já sim</button>
            <MdKeyboardDoubleArrowRight />
          </li>
          <li onClick="handleDados('Quero conhecer', 'pergunta_3')" style="padding: 0px">
            <button type="submit">Quero conhecer</button>
            <MdKeyboardDoubleArrowRight />
          </li>
        </ul>
        <ul class="ul-4" style="display: none; justify-content: center">
          <p>
            <span style="text-align: center; left: 0px; width: 100%">Finalizado! Obrigado por participar!</span>
          </p>
        </ul>
      </form>
    </div>
  </div>
</body>

</html>