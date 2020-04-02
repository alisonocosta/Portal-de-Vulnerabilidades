function submitForm() {
  cb1 = document.getElementById("checkbox-enable1");
  cb2 = document.getElementById("checkbox-enable2");
  cb3 = document.getElementById("checkbox-enable3");

  theForm = document.createElement("form");
  theForm.method = "post";
  theForm.action="Vulnerabilidades/controller_vulnerabilidade.php";
  new_input = document.createElement("input");
  new_input.type='hidden';
  new_input.name='tarefa';

  if(cb1.checked && cb1.className == "cb_cadastrar") {
    theForm.action="Vulnerabilidades/controller_vulnerabilidade.php";
    new_input.value="cadastra_por_descr";
  }

  if(cb2.checked && cb2.className == "cb_cadastrar") {
    theForm.action="Vulnerabilidades/controller_vulnerabilidade.php";
    new_input.value="atualiza_vuln";
  }

  if(cb3.checked && cb3.className == "cb_cadastrar") {
    theForm.action="Vulnerabilidades/controller_vulnerabilidade.php";
    new_input.value="cadastra_por_csv";
  }

  if(cb1.checked && cb1.className == "cb_consultar") {
    theForm.action="Vulnerabilidades/controller_vulnerabilidade.php";
    new_input.value="consulta_por_id";
  }

  if(cb2.checked && cb2.className == "cb_consultar") {
    theForm.action="Vulnerabilidades/controller_vulnerabilidade.php";
    new_input.value="consulta_por_tit";
  }

  if(cb3) {
    if(cb3.checked && cb3.className == "cb_consultar") {
      theForm.action="Vulnerabilidades/controller_vulnerabilidade.php";
      new_input.value="consulta_all";
    }
  }

  //######################################################
  //##  Parte dos botões gera report e gera proposta    ##
  //######################################################
  if(cb1.checked && cb1.className == "cb_gera_report") {
    theForm.action="Documentacao/controller_documentacao.php";
    new_input.value="gera_report_app_web";

  }

  if(cb2.checked && cb2.className == "cb_gera_report") {
    theForm.action="Documentacao/controller_documentacao.php";
    new_input.value="gera_report_infra";

  }

  if(cb3) {
    if(cb3.checked && cb2.className == "cb_gera_report") {
      theForm.action="Documentacao/controller_documentacao.php";
      new_input.value="gera_report_mobile";
    }
  }

  if(cb1.checked && cb1.className == "cb_gera_proposta") {
    theForm.action="Documentacao/controller_documentacao.php";
    new_input.value="gera_proposta_eng_social";

  }

  if(cb2.checked && cb2.className == "cb_gera_proposta") {
    theForm.action="Documentacao/controller_documentacao.php";
    new_input.value="gera_proposta_camp_phishing";

  }

  if(cb3) {
    if(cb3.checked && cb2.className == "cb_gera_proposta") {
      theForm.action="Documentacao/controller_documentacao.php";
      new_input.value="gera_proposta_pentest";
    }
  }

  theForm.appendChild(new_input);
  document.getElementById('hidden_form_here').appendChild(theForm);
  theForm.submit();
}
