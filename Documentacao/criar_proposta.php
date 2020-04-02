<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="data:,">
    <link rel="stylesheet" href="/static/css/skeleton.css">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <link rel="stylesheet" href="/static/css/skeleton-checkboxes.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
      $(document).on('change', '#checkbox_alto', function() {
        if($("#checkbox_alto").prop("checked")) {
          $("#checkbox_medio").prop("checked", false);
          $("#checkbox_baixo").prop("checked", false);
        }
      });
      $(document).on('change', '#checkbox_medio', function() {
        if($("#checkbox_medio").prop("checked")) {
          $("#checkbox_alto").prop("checked", false);
          $("#checkbox_baixo").prop("checked", false);
        }
      });
      $(document).on('change', '#checkbox_baixo', function() {
        if($("#checkbox_baixo").prop("checked")) {
          $("#checkbox_alto").prop("checked", false);
          $("#checkbox_medio").prop("checked", false);
        }
      });
    </script>
    <script src="/static/js/validations/validations.js"></script>
    <meta charset="utf-8">
    <title>Proposta - Pentest</title>
  </head>
  <body>
    <div class="container">
      <div class="docs-example docs-example-form">
        <form autocomplete="off" action="gera_proposta.php" method="post" id='formulario'>
          <h1>Gera Proposta de Pentest</h1>
          <div class="row">
            <label for='tit_vuln'>Templates</label>
            <img src="/images/template_uhg_capa.png" style="width: 365px">
            <img src="/images/template_uhg_sessao.png" style="width: 365px">
            <img src="/images/template_uhg_conteudo.png" style="width: 365px">
          </div>
          <div class="row">
            <input type='checkbox' value='template_uhg' name='nome_template' id='checkbox_template_proposta' class='checkbox_gera_proposta'><label for='checkbox_template_proposta'></label><p style='display: inline; margin-left: 20px'>Template UHG</p><br>
          </div>
          <div class="row">
            <div class="three columns">
              <label for='tipo_sistema'>Tipo de sistema</label>
              <input type='checkbox' value='Aplicação Web' name='tipo_sistema' id='checkbox_tipo_webapp' class='checkbox_gera_proposta'><label for='checkbox_tipo_webapp'></label><p style='display: inline; margin-left: 20px'>Web Application</p><br>
              <input type='checkbox' value='Infraestrutura' name='tipo_sistema' id='checkbox_tipo_infra' class='checkbox_gera_proposta'><label for='checkbox_tipo_infra'></label><p style='display: inline; margin-left: 20px'>Infraestrutura</p><br>
              <input type='checkbox' value='Mobile' name='tipo_sistema' id='checkbox_tipo_mobile' class='checkbox_gera_proposta'><label for='checkbox_tipo_mobile'></label><p style='display: inline; margin-left: 20px'>Mobile</p><br>
              <label style='margin-top: 5%' for='tipo_sistema'>Perspectiva</label>
              <input type='checkbox' value='interna' name='perspectiva' id='checkbox_perspectiva_interna' class='checkbox_gera_proposta'><label for='checkbox_perspectiva_interna'></label><p style='display: inline; margin-left: 20px'>Interno</p><br>
              <input type='checkbox' value='externa' name='perspectiva' id='checkbox_perspectiva_externa' class='checkbox_gera_proposta'><label for='checkbox_perspectiva_externa'></label><p style='display: inline; margin-left: 20px'>Externo</p><br>
            </div>
            <div class="three columns">
              <label for='tipo_teste'>Tipo de teste</label>
              <input type='checkbox' value='White box' name='tipo_teste' id='checkbox_teste_whitebox' class='checkbox_testebox'><label for='checkbox_teste_whitebox'></label><p style='display: inline; margin-left: 20px'>White Box</p><br>
              <input type='checkbox' value='Gray box' name='tipo_teste' id='checkbox_teste_graybox' class='checkbox_testebox'><label for='checkbox_teste_graybox'></label><p style='display: inline; margin-left: 20px'>Gray Box</p><br>
              <input type='checkbox' value='Black box' name='tipo_teste' id='checkbox_teste_blackbox' class='checkbox_testebox'><label for='checkbox_teste_blackbox'></label><p style='display: inline; margin-left: 20px'>Black Box</p><br>
            </div>
            <div class="five columns">
              <label for="area_solic">Área (cliente) que solicitou:</label>
              <input class="u-full-width" type="text" name="area" value=""></textarea>
              <label for="prazo">Prazo (formato [dd de mês de aaaa à dd de mês de aaaa]):</label>
              <input class="u-full-width" type="text" name="prazo" value=""></textarea>
              <label for="nome_resp">Nome do responsável:</label>
              <input class="u-full-width" type="text" name="nome_resp" value=""></textarea>
            </div>
          </div>
          <div class="row">
            <div class="five columns">
              <label for="curriculo">Currículo dos profissionais envolvidos (somente em PDF):</label>
              <input type="file" name="curriculo1">
              <input type="file" name="curriculo2">
              <input type="file" name="curriculo3">
              <input type="file" name="curriculo4">
              <input type="file" name="curriculo5">
            </div>
          </div>
          <div class="row" style="height: 50px">
              <input style='position: absolute; right: 190px' class="button-primary" type="submit" value="Gerar Proposta">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
