<?php
  session_start();
  require_once('../database/mysqli_connection.php');

  if(isset($_POST['consulta_descr'])) {
    $vuln_tit = $_POST['consulta_descr'];
    $query = "SELECT vuln_title FROM vuln_details_table WHERE vuln_title LIKE '%". $vuln_tit ."%';";
    $db_resp=mysqli_query($dbc, $query);
  	if ($db_resp->num_rows == 0 ) {
  			echo "Vulnerabilidade não encontrada";
  	} else {
      while($row = mysqli_fetch_array($db_resp, MYSQLI_NUM)) {
        if (strpos("&", $row[0])) {
          echo str_replace("&", "e", $row[0])."&";
        } else {
            echo $row[0]."&";
        }
      }
    }
  } elseif (isset($_GET['id_vuln'])) {
    $id_vuln = $_GET['id_vuln'];
    $query = "SELECT * FROM vuln_details_table WHERE vuln_id = '". $id_vuln ."';";
    $db_resp=mysqli_query($dbc, $query);
    if ($db_resp->num_rows == 0 ) {
      echo "Vulnerabilidade não encontrada";
    } else {
        while($row = mysqli_fetch_array($db_resp, MYSQLI_NUM)) {
        echo json_encode($row);
        /*vuln_cod
        vuln_description
        vuln_severity
        vuln_impact
        vuln_recommendation
        vuln_howto
        vuln_cidl
        vuln_file_name*/
        }
      }
    } elseif (isset($_POST['consulta_descr_complete'])) {
        $vuln_tit = $_POST['consulta_descr_complete'];
        $query = "SELECT * FROM vuln_details_table WHERE vuln_title = '". $vuln_tit ."';";
        $db_resp=mysqli_query($dbc, $query);
      	if ($db_resp->num_rows == 0 ) {
      			echo "Vulnerabilidade não encontrada";
      	} else {
          while($row = mysqli_fetch_array($db_resp, MYSQLI_NUM)) {
            echo json_encode($row);
            //echo "vuln_id:". $row['vuln_id']."&vuln_title: ".$row['vuln_title']."&vuln_cod:". $row['vuln_cod']. "&vuln_description:". $row['vuln_description']. "&vuln_severity: ".$row['vuln_severity.']."&vuln_impact:". $row['vuln_impact']. "&vuln_recommendation: ".$row['vuln_recommendation']."&vuln_howto: ".$row['vuln_howto']."&vuln_cidl: ". $row['vuln_cidl']. "&vuln_file_name: ".$row['vuln_file_name'];
        }
      }
    }
  mysqli_close($dbc);
 ?>
