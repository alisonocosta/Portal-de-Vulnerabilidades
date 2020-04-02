<?php
  session_start();
  if(isset($_POST['tarefa']) == False) {
    echo "Error. Chama página padrão de erro.";
  } else {
    if($_POST['tarefa'] == "cadastra_por_descr") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Vulnerabilidades/cad_vuln_descr.php');
    } elseif ($_POST['tarefa'] == "atualiza_vuln") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Vulnerabilidades/atualiza_vuln.php');
    } elseif ($_POST['tarefa'] == "cadastra_por_csv") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Vulnerabilidades/cad_vuln_csv.php');
    } elseif ($_POST['tarefa'] == "consulta_por_id") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Vulnerabilidades/con_vuln.php');
    } elseif ($_POST['tarefa'] == "consulta_por_tit") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Vulnerabilidades/con_vuln_csv.php');
    } elseif ($_POST['tarefa'] == "consulta_all") {
      header('Location: http://'. $_SERVER['SERVER_ADDR'] .'/Vulnerabilidades/export_csv.php');
    } else {
      echo "Error. Chama página padrão de erro.";
    }
  }
 ?>
