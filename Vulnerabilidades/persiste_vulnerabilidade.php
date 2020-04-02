<?php

  session_start();
  require_once('../database/mysqli_connection.php');
// corrigir essa isso aqui depois... porque vai dar merda.. certeza!

  $vuln_id = $_POST['id_vuln'];
  $vuln_tit = $_POST['tit_vuln'];
  $vuln_cod = $_POST['cod_vuln'];
  $vuln_severity = $_POST['severity'];
  $vuln_descr = $_POST['descr_vuln'];
  $vuln_impact = $_POST['impact_vuln'];
  $vuln_recom = $_POST['recom_vuln'];
  $vuln_howto = $_POST['howto_vuln'];
  $vuln_complex_resolv = $_POST['complex_resolv'];

//#####################################
//#### TRATATIVA PARA O FILE upload ###
//#####################################
  $file = $_FILES['upload'];
  $allowed_img_file_types = array('image/JPG', 'image/jpg', 'image/PNG', 'image/png');
  $allowed_video_file_types = array('video/MP4', 'video/mp4', 'video/avi', 'video/AVI');
  $file_name_exploded = explode(".", $file['name']);
  $file_type = $file_name_exploded[sizeof($file_name_exploded)-1];
  $file_name = $vuln_id.".".$file_type;
  if (in_array($file['type'], $allowed_img_file_types))  {
    if(move_uploaded_file($file['tmp_name'], "../images_upload/".$file_name)) {
      echo "<p>File has been uploaded succesfully!</p>";
    }
  } elseif (in_array($file['type'], $allowed_video_file_types )) {
    if(move_uploaded_file($file['tmp_name'], "../videos_upload/".$file_name)) {
      echo "<p>File has been uploaded succesfully!</p>";
    }
  } else {
    echo "<p>Problem in uploading the file!</p>";
  }

  //#####################################
  //#### TRATATIVA PARA O FILE upload ###
  //#####################################

  if(isset($_POST['cidl_vuln_c'])) {
      $vuln_cidl = $_POST['cidl_vuln_c'];
  }
  if(isset($_POST['cidl_vuln_i'])) {
    try {
      $vuln_cidl = $vuln_cidl . $_POST['cidl_vuln_i'];
    } catch (Exception $e) {
      $vuln_cidl = $_POST['cidl_vuln_i'];
    }
  }
  if(isset($_POST['cidl_vuln_d'])) {
    try {
      $vuln_cidl = $vuln_cidl . $_POST['cidl_vuln_d'];
    } catch (Exception $e) {
      $vuln_cidl = $_POST['cidl_vuln_d'];
    }
  }
  if(isset($_POST['cidl_vuln_l'])) {
    try {
      $vuln_cidl = $vuln_cidl . $_POST['cidl_vuln_l'];
    } catch (Exception $e) {
      $vuln_cidl = $_POST['cidl_vuln_l'];
    }
  }

  $insert_query="INSERT INTO vuln_details_table (vuln_id, vuln_title, vuln_cod, vuln_description, vuln_severity, vuln_impact, vuln_recommendation, vuln_howto, vuln_complex_resolv, vuln_cidl, vuln_file_name) VALUES ('$vuln_id','$vuln_tit','$vuln_cod', '$vuln_descr','$vuln_severity','$vuln_impact','$vuln_recom','$vuln_howto','$vuln_complex_resolv','$vuln_cidl','$file_name')";
  if($cad_vuln = mysqli_query($dbc, $insert_query)){
    echo "<p>Vulnerability registered successfully! <a href='cad_vuln_descr.php'>voltar</a>.</p>";
  } else {
    echo "<p>Error!". mysqli_error($dbc) ."</p>";
  }
 ?>
