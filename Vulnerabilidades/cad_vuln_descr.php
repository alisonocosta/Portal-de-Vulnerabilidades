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
      $(document).on('change', '#checkbox_alto_cr', function() {
        if($("#checkbox_alto_cr").prop("checked")) {
          $("#checkbox_medio_cr").prop("checked", false);
          $("#checkbox_baixo_cr").prop("checked", false);
        }
      });
      $(document).on('change', '#checkbox_medio_cr', function() {
        if($("#checkbox_medio_cr").prop("checked")) {
          $("#checkbox_alto_cr").prop("checked", false);
          $("#checkbox_baixo_cr").prop("checked", false);
        }
      });
      $(document).on('change', '#checkbox_baixo_cr', function() {
        if($("#checkbox_baixo_cr").prop("checked")) {
          $("#checkbox_alto_cr").prop("checked", false);
          $("#checkbox_medio_cr").prop("checked", false);
        }
      });
    </script>
    <script src="/static/js/validations/validations.js"></script>
    <meta charset="utf-8">
    <title>Cadastrar vulnerabilidade</title>
  </head>
  <body>
    <div class="container">
      <div class="docs-example docs-example-form">
        <form autocomplete="off" enctype="multipart/form-data" action="persiste_vulnerabilidade.php" method="post" id='formulario'>
          <h1>Cadastro de vulnerabilities</h1>
          <div class="row">
            <div class="eight columns">
              <label for='tit_vuln'>Título da vulnerabilidade:</label>
              <input class="u-full-width" type="text" name="tit_vuln" value="">
            </div>
            <div class="two columns">
              <label for='cod_vuln'>Cód. vulnerabilidade:</label>
              <input class="u-full-width" type="text" name="cod_vuln" value="">
            </div>
            <div class="one column">
              <label for='cod_vuln'>ID:</label>
              <input class="u-full-width" type="text" name="id_vuln" value="">
            </div>
          </div>
          <div class="row">
            <div class="eleven columns">
              <label for='descr_vuln'>Descrição da vulnerabilidade:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" name="descr_vuln" value=""></textarea>
            </div>
          </div>
          <div class="row">
            <div class="eleven columns">
              <label for="impact_vuln">Impacto da vulnerabilidade:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" name="impact_vuln" value=""></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="eleven columns">
              <label for="recom_vuln">Recomendação:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" name="recom_vuln" value=""></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="eleven columns">
              <label for="recom_vuln">Como explorar a vulnerabilidade:</label>
              <textarea class="u-full-width" style="height: 5rem;" type="text" name="howto_vuln" value=""></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="two columns">
              <label for='checkbox_alto'>Severidade:</label>
              <input type='checkbox' value='Alto' name='severity' id='checkbox_alto' class='checkbox_severity'><label for='checkbox_alto'></label><p style='display: inline; margin-left: 20px'>Alto</p><br>
              <input type='checkbox' value='Medio' name='severity' id='checkbox_medio' class='checkbox_severity'><label for='checkbox_medio'></label><p style='display: inline; margin-left: 20px'>Médio</p><br>
              <input type='checkbox' value='Baixo' name='severity' id='checkbox_baixo' class='checkbox_severity'><label for='checkbox_baixo'></label><p style='display: inline; margin-left: 20px'>Baixo</p>
            </div>
            <div class="two columns">
              <label>Itens afetados</label>
              <input type='checkbox' value='C' name='cidl_vuln_c' id='checkbox_conf'><label for='checkbox_conf'></label><p style='display: inline; margin-left: 20px'>Confidencialidade</p><br>
              <input type='checkbox' value='I' name='cidl_vuln_i' id='checkbox_int'><label for='checkbox_int'></label><p style='display: inline; margin-left: 20px'>Integridade</p><br>
              <input type='checkbox' value="D" name='cidl_vuln_d' id='checkbox_disp'><label for='checkbox_disp'></label><p style='display: inline; margin-left: 20px'>Disponibilidade</p><br>
              <input type='checkbox' value="L" name='cidl_vuln_l' id='checkbox_leg'><label for='checkbox_leg'></label><p style='display: inline; margin-left: 20px'>Legalidade</p>
            </div>
            <div class="two columns">
              <label for='checkbox_alto'>Complex. de resolução:</label>
              <input type='checkbox' value='Alto' name='complex_resolv' id='checkbox_alto_cr' class='checkbox_severity'><label for='checkbox_alto_cr'></label><p style='display: inline; margin-left: 20px'>Alto</p><br>
              <input type='checkbox' value='Medio' name='complex_resolv' id='checkbox_medio_cr' class='checkbox_severity'><label for='checkbox_medio_cr'></label><p style='display: inline; margin-left: 20px'>Médio</p><br>
              <input type='checkbox' value='Baixo' name='complex_resolv' id='checkbox_baixo_cr' class='checkbox_severity'><label for='checkbox_baixo_cr'></label><p style='display: inline; margin-left: 20px'>Baixo</p>
            </div>
            <div class="four columns">
              <label>Imagem ou Vídeo de como testar:</label>
              <input type="file" name="upload">
            </div>
          </div>
          <div class="row" style="height: 50px">
              <input style='position: absolute; right: 270px' class="button-primary" type="submit" value="Cadastrar">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
