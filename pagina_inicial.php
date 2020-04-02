<?php
session_start();
if ($_SESSION['loggedin']) { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="data:,">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/static/js/validations/jquery_mostraopcoes.js"></script>
    <script src="/static/js/validations/submit_form.js"></script>
    <link rel="stylesheet" href="/static/css/skeleton-checkboxes.css">
    <link rel="stylesheet" href="/static/css/skeleton.css">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <meta charset="utf-8">
    <title>Vulnerabilidades</title>
  </head>
  <body>
    <div class="container">
      <div class="docs-example docs-example-form">
        <div class="row" id="div_botao_cadastrar">
          <div class="five columns" style="margin-top: 15%">
            <h1>Portal de auxílio ao pentester</h1>
            <input id="botao_cadastra_vulnerabilidade" style="width: 285.075px" class="button-primary" type="submit" value="Cadastrar vulnerabilidade">
          </div>
          <div class="five columns" id="div_checkbox1" style="margin-top: 22%">
          </div>
        </div>
        <div class="row" id="div_botao_consultar">
          <div class="five columns" id="div_consulta_vulnerabilidade">
            <input id="botao_consulta_vulnerabilidade" style="width: 285.075px" class="button-primary" type="submit" value="Consultar vulnerabilidade">
          </div>
          <div class="five columns" id="div_checkbox2">
          </div>
        </div>
          <div class="row" id="div_botao_gerar_relatorio">
            <div class="five columns" id="">
              <input id="botao_gera_report" style="width: 285.075px" class="button-primary" type="submit" value="Gerar relatório de Vulns.">
            </div>
            <div class="five columns" id="div_checkbox3">
              <!-- conteúdo dinâmico-->
            </div>
          </div>
        <div class="row" id="div_gerar_proposta">
          <div class="five columns" id="">
            <input id="botao_gera_proposta" style="width: 285.075px" class="button-primary" type="submit" value="Gerar proposta de pentest">
          </div>
          <div class="five columns" id="div_checkbox3">
              <!-- conteúdo dinâmico-->
          </div>
        </div>
        <div class="row" id="div_extra">
          <div class="five columns" id="hidden_form_here">
            <!--formatação correta do layout-->
          </div>
          <div class="five columns" id="div_checkbox3">
              <!-- conteúdo dinâmico-->
          </div>
          <div class="row" id="add_botao" style="margin-left: 65%">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php } else  {
  echo "Teste";
  echo $_SESSION['loggedin'];
}
?>
