<?php

  if(isset($_POST['tarefa']) == False){
    echo "Error. Chama página padrão de erro.";
  } else {
    if($_POST['tarefa'] == "consulta_por_id") {
      header('Location', 'http://'.$_SERVER['SERVER_ADDR'].'/Vulnerabilidades/con_vuln_id.php');
    } elseif ($_POST['tarefa'] == "consulta_por_tit") {
      header('Location', 'http://'.$_SERVER['SERVER_ADDR'].'/Vulnerabilidades/con_vuln_tit.php');
    } elseif ($_POST['tarefa'] == "consulta_all") {
      header('Location', 'http://'.$_SERVER['SERVER_ADDR'].'/Vulnerabilidades/export_csv.php');
    } else {
      echo "Error. Chama página padrão de erro.";
    }
  }

 ?>
