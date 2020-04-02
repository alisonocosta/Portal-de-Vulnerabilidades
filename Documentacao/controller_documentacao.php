<?php
  session_start();
  if(isset($_POST['tarefa']) == False) {
    echo "Error. Chama página padrão de erro.";
  } else {
    if($_POST['tarefa'] == "gera_report_app_web") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Documentacao/report_appweb.php');
    } elseif ($_POST['tarefa'] == "gera_report_infra") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Documentacao/report_infra.php');
    } elseif ($_POST['tarefa'] == "gera_report_mobile") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Documentacao/export_csv.php');
    } elseif ($_POST['tarefa'] == "gera_proposta_eng_social") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Documentacao/report_mobile.php');
    } elseif ($_POST['tarefa'] == "gera_proposta_camp_phishing") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Documentacao/con_vuln_csv.php');
    } elseif ($_POST['tarefa'] == "gera_proposta_pentest") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Documentacao/criar_proposta.php');
    } else {
      echo "Error. Chama página padrão de erro.";
    }
  }
 ?>
