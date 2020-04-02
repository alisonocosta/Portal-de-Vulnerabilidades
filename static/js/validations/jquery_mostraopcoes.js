$(document).ready( function() {

  //#########################################
  //##  BOTÃO DO cadastra vulnerabilidade ###
  //#########################################
  $("#botao_cadastra_vulnerabilidade").click(function () {
    if ($(":input.cb_consultar").length && $('p.descr_consultar').length) {
      $(":input.cb_consultar").remove();
      $('p.descr_consultar').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_gera_report").length && $('p.descr_gera_report').length) {
      $(":input.cb_gera_report").remove();
      $('p.descr_gera_report').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_gera_proposta").length && $('p.descr_gera_proposta').length) {
      $(":input.cb_gera_proposta").remove();
      $('p.descr_gera_proposta').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_cadastrar").length == false) {
      var new_options = "<input type='checkbox' class='cb_cadastrar' id='checkbox-enable1'><label for='checkbox-enable1'></label><p class='descr_cadastrar' style='display: inline; margin-left: 20px'>Cadastrar individualmente.</p>";
      var new_options2 = "<input type='checkbox' class='cb_cadastrar' id='checkbox-enable2'><label for='checkbox-enable2'></label><p class='descr_cadastrar' style='display: inline; margin-left: 20px'>Atualizar vulnerabilidade.</p>";
      var new_options3 = "<input type='checkbox' class='cb_cadastrar' id='checkbox-enable3'><label for='checkbox-enable3'></label><p class='descr_cadastrar' style='display: inline; margin-left: 20px'>Importar CSV.</p>";
      var botao = "<input class='button-primary' id='botao_confirma' type='submit' value='OK' onclick='submitForm()'>";
      //var new_options3 = "<input type='checkbox' id='checkbox-enable3'><label for='checkbox-enable3'></label>Consultar todas as vulnerabilidades.";
      $("#div_checkbox1").append(new_options);
      $("#div_checkbox2").append(new_options2);
      $("#div_checkbox3").append(new_options3);
      $("#add_botao").append(botao);
      //$("#div_checkbox3").append(new_options3);
    }

  });

  //#########################################
  //##  BOTÃO DO consulta vulnerabilidade ###
  //#########################################
  $("#botao_consulta_vulnerabilidade").click(function () {
    if ($(":input.cb_cadastrar").length && $('p.descr_cadastrar').length) {
      $(":input.cb_cadastrar").remove();
      $('p.descr_cadastrar').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_gera_report").length && $('p.descr_gera_report').length) {
      $(":input.cb_gera_report").remove();
      $('p.descr_gera_report').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_gera_proposta").length && $('p.descr_gera_proposta').length) {
      $(":input.cb_gera_proposta").remove();
      $('p.descr_gera_proposta').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_consultar").length == false) {
      var new_options = "<input type='checkbox' class='cb_consultar' id='checkbox-enable1'><label for='checkbox-enable1'></label><p class='descr_consultar' style='display: inline; margin-left: 20px'>Consultar por ID.</p>";
      var new_options2 = "<input type='checkbox' class='cb_consultar' id='checkbox-enable2'><label for='checkbox-enable2'></label><p class='descr_consultar' style='display: inline; margin-left: 20px'>Consultar por título do ponto.</p>";
      var new_options3 = "<input type='checkbox' class='cb_consultar' id='checkbox-enable3'><label for='checkbox-enable3'></label><p class='descr_consultar' style='display: inline; margin-left: 20px'>Consultar todas as vulnerabilidades.</p>";
      var botao = "<input class='button-primary' id='botao_confirma' type='submit' value='OK' onclick='submitForm()'>";
      $("#div_checkbox1").append(new_options);
      $("#div_checkbox2").append(new_options2);
      $("#div_checkbox3").append(new_options3);
      $("#add_botao").append(botao);
    }
  });

  //################################
  //##  BOTÃO DO GERA REPORT      ##
  //################################
  $("#botao_gera_report").click(function () {
    if ($(":input.cb_cadastrar").length && $('p.descr_cadastrar').length) {
      $(":input.cb_cadastrar").remove();
      $('p.descr_cadastrar').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_consultar").length && $('p.descr_consultar').length) {
      $(":input.cb_consultar").remove();
      $('p.descr_consultar').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_gera_proposta").length && $('p.descr_gera_proposta').length) {
      $(":input.cb_gera_proposta").remove();
      $('p.descr_gera_proposta').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_gera_report").length == false) {
      var new_options = "<input type='checkbox' class='cb_gera_report' id='checkbox-enable1'><label for='checkbox-enable1'></label><p class='descr_gera_report' style='display: inline; margin-left: 20px'>Aplicação Web</p>";
      var new_options2 = "<input type='checkbox' class='cb_gera_report' id='checkbox-enable2'><label for='checkbox-enable2'></label><p class='descr_gera_report' style='display: inline; margin-left: 20px'>Infraestrutura</p>";
      var new_options3 = "<input type='checkbox' class='cb_gera_report' id='checkbox-enable3'><label for='checkbox-enable3'></label><p class='descr_gera_report' style='display: inline; margin-left: 20px'>Mobile</p>";
      var botao = "<input class='button-primary' id='botao_confirma' type='submit' value='OK' onclick='submitForm()'>";
      $("#div_checkbox1").append(new_options);
      $("#div_checkbox2").append(new_options2);
      $("#div_checkbox3").append(new_options3);
      $("#add_botao").append(botao);
    }
  });
  //################################
  //##  BOTÃO DO GERA PROPOSTA    ##
  //################################
  $("#botao_gera_proposta").click(function () {
    if ($(":input.cb_gera_report").length && $('p.descr_gera_report').length) {
      $(":input.cb_gera_report").remove();
      $('p.descr_gera_report').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_cadastrar").length && $('p.descr_cadastrar').length) {
      $(":input.cb_cadastrar").remove();
      $('p.descr_cadastrar').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_consultar").length && $('p.descr_consultar').length) {
      $(":input.cb_consultar").remove();
      $('p.descr_consultar').remove();
      $(":input#botao_confirma").remove();
    }

    if ($(":input.cb_gera_proposta").length == false) {
      var new_options = "<input type='checkbox' class='cb_gera_proposta' id='checkbox-enable1'><label for='checkbox-enable1'></label><p class='descr_gera_proposta' style='display: inline; margin-left: 20px'>Proposta para engenharia social.</p>";
      var new_options2 = "<input type='checkbox' class='cb_gera_proposta' id='checkbox-enable2'><label for='checkbox-enable2'></label><p class='descr_gera_proposta' style='display: inline; margin-left: 20px'>Campanha de phishing.</p>";
      var new_options3 = "<input type='checkbox' class='cb_gera_proposta' id='checkbox-enable3'><label for='checkbox-enable3'></label><p class='descr_gera_proposta' style='display: inline; margin-left: 20px'>Pentest em sistemas.</p>";
      var botao = "<input class='button-primary' id='botao_confirma' type='submit' value='OK' onclick='submitForm()'>";
      $("#div_checkbox1").append(new_options);
      $("#div_checkbox2").append(new_options2);
      $("#div_checkbox3").append(new_options3);
      $("#add_botao").append(botao);
    }
  });

  $(document).on('change', '#checkbox-enable1', function() {
    if($("#checkbox-enable1").prop("checked")) {
      $("#checkbox-enable2").prop("checked", false);
      $("#checkbox-enable3").prop("checked", false);
    }
  });

  $(document).on('change', '#checkbox-enable2', function() {
    if($("#checkbox-enable2").prop("checked")) {
      $("#checkbox-enable1").prop("checked",false);
      $("#checkbox-enable3").prop("checked", false);
    }
  });

  $(document).on('change', '#checkbox-enable3', function() {
    if($("#checkbox-enable3").prop("checked")) {
      $("#checkbox-enable2").prop("checked", false);
      $("#checkbox-enable1").prop("checked", false);
    }
  });
});
