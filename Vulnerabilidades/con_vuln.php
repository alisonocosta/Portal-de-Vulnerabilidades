<?php
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_httponly', '1');
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
    <script src="/static/js/validations/add_options.js"></script>
    <!--<script>
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
    </script>-->

    <meta charset="utf-8">
    <title>Consulta de vulnerabilidades</title>
  </head>
  <body>
    <div class="container">
      <div class="docs-example docs-example-form">
          <h1>Consulta de vulnerabilidades</h1>
          <p>Primeiro, consulte a vulnerabilidade a ser alterada por ID ou título da vulnerabilidade:</p>
          <div class="row">
            <div class="one column">
              <label for='cod_vuln'>ID:</label>
              <input class="u-full-width" type="text" name="id_vuln" id="id_vuln" autocomplete="off">
            </div>
            <!--<div class="two columns">
              <label for='cod_vuln'>Cód. vulnerabilidade:</label>
              <input class="u-full-width" type="text" id="cod_vuln" value="">
            </div>-->
            <div class="nine columns">
              <label for='tit_vuln'>Título da vulnerabilidade:</label>
              <input class="u-full-width" type="text" name="id_vuln" id="titulo_vuln" list="vuln_poss" autocomplete="off">
              <datalist id="vuln_poss">
              </datalist>
            </div>
          </div>
          <!--<div class="row">
            <div class="eleven columns">
              <label for='descr_vuln'>Descrição da vulnerabilidade:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" id="descr_vuln" value=""></textarea>
            </div>
          </div>
          <div class="row">
            <div class="eleven columns">
              <label for="impact_vuln">Impacto da vulnerabilidade:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" id="impact_vuln" value=""></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="eleven columns">
              <label for="recom_vuln">Recomendação:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" id="recom_vuln" value=""></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="eleven columns">
              <label for="recom_vuln">Como explorar a vulnerabilidade:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" id="howto_vuln" value=""></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="three columns">
              <label for='checkbox_alto'>Severidade:</label>
              <input type='checkbox' value='Alto' name='severity' id='checkbox_alto' class='checkbox_severity'><label for='checkbox_alto'></label><p style='display: inline; margin-left: 20px'>Alto</p><br>
              <input type='checkbox' value='Medio' name='severity' id='checkbox_medio' class='checkbox_severity'><label for='checkbox_medio'></label><p style='display: inline; margin-left: 20px'>Médio</p><br>
              <input type='checkbox' value='Baixo' name='severity' id='checkbox_baixo' class='checkbox_severity'><label for='checkbox_baixo'></label><p style='display: inline; margin-left: 20px'>Baixo</p>
            </div>
            <div class="three columns">
              <label>Itens afetados</label>
              <input type='checkbox' value='C' name='cidl_vuln_c' id='checkbox_conf'><label for='checkbox_conf'></label><p style='display: inline; margin-left: 20px'>Confidencialidade</p><br>
              <input type='checkbox' value='I' name='cidl_vuln_i' id='checkbox_int'><label for='checkbox_int'></label><p style='display: inline; margin-left: 20px'>Integridade</p><br>
              <input type='checkbox' value="D" name='cidl_vuln_d' id='checkbox_disp'><label for='checkbox_disp'></label><p style='display: inline; margin-left: 20px'>Disponibilidade</p><br>
              <input type='checkbox' value="L" name='cidl_vuln_l' id='checkbox_leg'><label for='checkbox_leg'></label><p style='display: inline; margin-left: 20px'>Legalidade</p>
            </div>

          </div>
          <div class="row">
            <label id="vuln_file_name">Imagem ou Vídeo de como testar:</label>

          </div>-->
          <div class="row" style="height: 50px" id='buttons_div'>
            <input style='position: absolute; right: 270px' class="button-primary" type="submit" value="Verificar" onclick="getVulnerabilityAttributes('consulta_vuln')">
          </div>
      </div>
    </div>
  </body>
</html>
