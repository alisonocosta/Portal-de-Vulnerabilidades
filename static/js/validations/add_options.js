$(document).ready( function() {
  window.temp_cache = '';
  $("#titulo_vuln").keypress(function() {
    var found = false;
    for(i=0; i<window.temp_cache.length; i++) {
      if(window.temp_cache[i].indexOf(document.getElementById('titulo_vuln').value) != -1) {
        found = true;
        break;
      }
    }
    if(!found) {
      if(document.getElementById('titulo_vuln').value.length > 2) {
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "/Vulnerabilidades/con_vuln_descr.php", false);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('consulta_descr='+this.value);
        window.temp_cache = xhttp.responseText.split("&");//JSON.parse(xhttp.responseText);
        num_items = window.temp_cache.length-1;
        if(document.getElementsByTagName("option").length == 0){
          var dropdown = document.getElementById("vuln_poss");
          for(i=0; i<num_items; i++) {
            var options = document.createElement("option");
            options.value = window.temp_cache[i];
            dropdown.appendChild(options);
          }
        } else {
          if(window.temp_cache[0] != document.getElementsByTagName("option")[0].value){
            var elem = document.getElementsByTagName("option");
            var num_elem_options = elem.length;
            for(i=0; i<num_elem_options; i++) {
              elem[0].parentNode.removeChild(elem[0]);
            }
            if(document.getElementsByTagName("option").length == 0) {
              var dropdown = document.getElementById("vuln_poss");
              for(i=0; i<num_items; i++) {
                var options = document.createElement("option");
                options.value = window.temp_cache[i];
                dropdown.appendChild(options);
              }
            }
          }
        }
      }
    }
  })
});
function removeComments() {
  var code_without_comm = document.getElementsByTagName('html')[0].innerHTML.replace(/<!--|-->/g, "");
  document.getElementsByTagName('html')[0].innerHTML = code_without_comm;
}
function preparaPagina(vuln_attribs){
  var ID_VUL=0;
  var TITLE_VULN=1;
  var COD_VULN=2;
  var DESCR_VULN=3;
  var IMPACT_VULN=5;
  var RECOM_VULN=6;
  var HOWTO=7;
  var RESOLV_COMPLEX=8;
  var VULN_CIDL=9;
  var VULN_FILE_NAME=10;
  document.getElementById('id_vuln').value = vuln_attribs[ID_VUL];
  document.getElementById('titulo_vuln').value = vuln_attribs[TITLE_VULN];
  document.getElementById('cod_vuln').value = vuln_attribs[COD_VULN];
  document.getElementById('descr_vuln').value = vuln_attribs[DESCR_VULN];
  document.getElementById('impact_vuln').value = vuln_attribs[IMPACT_VULN];
  document.getElementById('recom_vuln').value = vuln_attribs[RECOM_VULN];
  document.getElementById('howto_vuln').value = vuln_attribs[HOWTO];
  var file_name = vuln_attribs[VULN_FILE_NAME].replace(/ /g, '');
  if(file_name) {
    if(file_name.split('.')[file_name.split('.').length-1].indexOf("mp4") != -1 || file_name.split('.')[file_name.split('.').length-1].indexOf("MP4") != -1) {
      document.getElementById('vuln_file_name').innerHTML = "<video width='800' controls><source src='../../../videos_upload/"+file_name+"' type='video/mp4'></video>"
    }
    if(file_name.split('.')[file_name.split('.').length-1].indexOf("avi") != -1 || file_name.split('.')[file_name.split('.').length-1].indexOf("AVI") != -1) {
      document.getElementById('vuln_file_name').innerHTML = "<video width='800' controls><source src='../../../videos_upload/"+file_name+"' type='video/avi'></video>"
    }
    if(file_name.split('.')[file_name.split('.').length-1].indexOf("png") != -1 || file_name.split('.')[file_name.split('.').length-1].indexOf("PNG") != -1  && file_name.split('.')[file_name.split('.').length-1].indexOf("jpg") != -1 || file_name.split('.')[file_name.split('.').length-1].indexOf("JPG") != -1) {
      document.getElementById('vuln_file_name').innerHTML = "<img src='../../../images_upload/"+file_name+"' width='1200'>"
    }
  }
  back_button = document.createElement("input");
  back_button.style = 'position: absolute; left: 270px';
  back_button.id = "back_button";
  back_button.class = "button-primary";
  back_button.type = "submit";
  back_button.value = "Voltar";
  document.getElementById('buttons_div').appendChild(back_button);
  document.getElementById("back_button").addEventListener("click", function(e) {
	location.reload();
});
}

function getVulnerabilityAttributes(opcao) {
  xhttp = new XMLHttpRequest();
  if (document.getElementById("id_vuln").value) {
    xhttp.open('GET', 'con_vuln_descr.php?id_vuln='+document.getElementById("id_vuln").value, false);
    xhttp.send();
    vuln_attribs = JSON.parse(xhttp.responseText);
  }
  if (document.getElementById("titulo_vuln").value) {
    xhttp.open("POST", "/Vulnerabilidades/con_vuln_descr.php", false);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('consulta_descr_complete='+document.getElementById("titulo_vuln").value);
    vuln_attribs = JSON.parse(xhttp.responseText);
  }
//  if(opcao == 'atualiza_vuln'){
  //      document.getElementById("verify_button").addEventListener("click", function(e) {
    //  	location.reload();
      //});
  //}
  removeComments();
  preparaPagina(vuln_attribs);
}
