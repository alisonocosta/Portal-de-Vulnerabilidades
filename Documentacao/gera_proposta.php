<?php
  session_start();
  $tipo_sistema = $_POST['tipo_sistema'];
  $tipo_teste = $_POST['tipo_teste'];
  $cli_area = $_POST['area'];
  $perspectiva = $_POST['perspectiva'];
  $prazo = $_POST['prazo'];
  $nome_resp = $_POST['nome_resp'];
  // essa instrução é para quando tiver mais de um template disponível $nome_template = $_POST['nome_template'];

  shell_exec("python gera_proposta_uhg.py --tipo-teste '".$tipo_teste."' --tipo-analise '".$tipo_sistema."' --area '".$cli_area."' --perspectiva '".$perspectiva."' --prazo '". $prazo ."' --nome-resp '". $nome_resp ."'");

  if(file_exists('proposta.pptx')){
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename('teste.pptx').'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('teste.pptx'));
    flush(); // Flush system output buffer
    readfile('proposta.pptx');
  exit;
  } else {
    echo "The file could not be generated!";
  }
?>
