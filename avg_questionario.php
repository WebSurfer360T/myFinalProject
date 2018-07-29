


<?php require_once('Connections/quest_s.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "id")) {
  $insertSQL = sprintf("INSERT INTO `avg` (genero_avg, idade_avg, estado_civil_avg, escolaridade_avg, situacao_profissional_avg, primeira_vez_que_visita_o_avg, ultima_vez_que_visitou_o_avg, D_q_s_da_existencia_do_avg, Como_ficou_a_saber_do_avg, Motivos_da_visita_avg, Avaliacao_da_visita_avg, sugestoes_avg) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['genero_avg'], "text"),
                       GetSQLValueString($_POST['idade_avg'], "text"),
                       GetSQLValueString($_POST['estado_civil_avg'], "text"),
                       GetSQLValueString($_POST['escolaridade_avg'], "text"),
                       GetSQLValueString($_POST['situacao_profissional_avg'], "text"),
                       GetSQLValueString($_POST['primeira_vez_que_visita_o_avg'], "text"),
                       GetSQLValueString($_POST['ultima_vez_que_visitou_o_avg'], "text"),
                       GetSQLValueString($_POST['D_q_s_da_existencia_do_avg'], "text"),
                       GetSQLValueString($_POST['Como_ficou_a_saber_do_avg'], "text"),
                       GetSQLValueString($_POST['Motivos_da_visita_avg'], "text"),
                       GetSQLValueString($_POST['Avaliacao_da_visita_avg'], "text"),
                       GetSQLValueString($_POST['sugestoes_avg'], "text"));

  mysql_select_db($database_quest_s, $quest_s);
  $Result1 = mysql_query($insertSQL, $quest_s) or die(mysql_error());

  $insertGoTo = "index.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_quest_s, $quest_s);
$query_Recordset11112211222 = "SELECT * FROM `avg`";
$Recordset11112211222 = mysql_query($query_Recordset11112211222, $quest_s) or die(mysql_error());
$row_Recordset11112211222 = mysql_fetch_assoc($Recordset11112211222);
$totalRows_Recordset11112211222 = mysql_num_rows($Recordset11112211222);
?>


<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questionário AVG</title>
 <link rel="icon" href="avg_icon.jpg" sizes="16x16" type="image/jpg">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="estilos_para_formuls.css">






  <script>
     function myFunctionA(){
         var xrA = new XMLHttpRequest();
         var urlA = "saveNewTextR1.php";
         var textA = document.getElementById("r1").innerHTML;
         var varsA = "newTextA="+textA;
         
         xrA.open("POST", urlA, true);
         xrA.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrA.send(varsA);
     }
     
  </script>
  
  
  
    <script>
     function myFunction(){
         var xr = new XMLHttpRequest();
         var url = "saveNewText.php";
         var text = document.getElementById("myDiv").innerHTML;
         var vars = "newText="+text;
         
         xr.open("POST", url, true);
         xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xr.send(vars);
     }
     
  </script>
  
   <script>
     function myFunctionB(){
         var xrB = new XMLHttpRequest();
         var urlB = "saveNewTextR2.php";
         var textB = document.getElementById("r2").innerHTML;
         var varsB = "newTextB="+textB;
         
         xrB.open("POST", urlB, true);
         xrB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrB.send(varsB);
     }
     
  </script>
  
    <script>
     function myFunctionC(){
         var xrc = new XMLHttpRequest();
         var urlc = "saveNewTextR3.php";
         var textc = document.getElementById("r3").innerHTML;
         var varsc = "newTextc="+textc;
         
         xrc.open("POST", urlc, true);
         xrc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrc.send(varsc);
     }
     
  </script>

<script>
     function myFunctionRB3(){
         var xrRB3 = new XMLHttpRequest();
         var urlRB3 = "saveNewTextRB3.php";
         var textRB3 = document.getElementById("RB3").innerHTML;
         var varsRB3 = "newTextRB3="+textRB3;
         
         xrRB3.open("POST", urlRB3, true);
         xrRB3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB3.send(varsRB3);
     }
     
  </script>
  
   <script>
     function myFunctionRB4(){
         var xrRB4 = new XMLHttpRequest();
         var urlRB4 = "saveNewTextRB4.php";
         var textRB4 = document.getElementById("RB4").innerHTML;
         var varsRB4 = "newTextRB4="+textRB4;
         
         xrRB4.open("POST", urlRB4, true);
         xrRB4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB4.send(varsRB4);
     }
     
  </script>
  
  
    <script>
     function myFunctionRB5(){
         var xrRB5 = new XMLHttpRequest();
         var urlRB5 = "saveNewTextRB5.php";
         var textRB5 = document.getElementById("RB5").innerHTML;
         var varsRB5 = "newTextRB5="+textRB5;
         
         xrRB5.open("POST", urlRB5, true);
         xrRB5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB5.send(varsRB5);
     }
     
  </script>
  
    <script>
     function myFunctionRB6(){
         var xrRB6 = new XMLHttpRequest();
         var urlRB6 = "saveNewTextRB6.php";
         var textRB6 = document.getElementById("RB6").innerHTML;
         var varsRB6 = "newTextRB6="+textRB6;
         
         xrRB6.open("POST", urlRB6, true);
         xrRB6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB6.send(varsRB6);
     }
     
  </script>
  
    <script>
     function myFunctionRB7(){
         var xrRB7 = new XMLHttpRequest();
         var urlRB7 = "saveNewTextRB7.php";
         var textRB7 = document.getElementById("RB7").innerHTML;
         var varsRB7 = "newTextRB7="+textRB7;
         
         xrRB7.open("POST", urlRB7, true);
         xrRB7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB7.send(varsRB7);
     }
     
  </script>
  
  
  <script>
     function myFunctionRB8(){
         var xrRB8 = new XMLHttpRequest();
         var urlRB8 = "saveNewTextRB8.php";
         var textRB8 = document.getElementById("RB8").innerHTML;
         var varsRB8 = "newTextRB8="+textRB8;
         
         xrRB8.open("POST", urlRB8, true);
         xrRB8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB8.send(varsRB8);
     }
     
  </script>
  
   <script>
     function myFunctionRB9(){
         var xrRB9 = new XMLHttpRequest();
         var urlRB9 = "saveNewTextRB9.php";
         var textRB9 = document.getElementById("RB9").innerHTML;
         var varsRB9 = "newTextRB9="+textRB9;
         
         xrRB9.open("POST", urlRB9, true);
         xrRB9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB9.send(varsRB9);
     }
     
  </script>
  
  
   <script>
     function myFunctionRB10(){
         var xrRB10 = new XMLHttpRequest();
         var urlRB10 = "saveNewTextRB10.php";
         var textRB10 = document.getElementById("RB10").innerHTML;
         var varsRB10 = "newTextRB10="+textRB10;
         
         xrRB10.open("POST", urlRB10, true);
         xrRB10.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB10.send(varsRB10);
     }
     
  </script>
  
  <script>
     function myFunctionRB11(){
         var xrRB11 = new XMLHttpRequest();
         var urlRB11 = "saveNewTextRB11.php";
         var textRB11 = document.getElementById("RB11").innerHTML;
         var varsRB11 = "newTextRB11="+textRB11;
         
         xrRB11.open("POST", urlRB11, true);
         xrRB11.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB11.send(varsRB11);
     }
     
  </script>
  
  <script>
     function myFunctionRB12(){
         var xrRB12 = new XMLHttpRequest();
         var urlRB12 = "saveNewTextRB12.php";
         var textRB12 = document.getElementById("RB12").innerHTML;
         var varsRB12 = "newTextRB12="+textRB12;
         
         xrRB12.open("POST", urlRB12, true);
         xrRB12.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB12.send(varsRB12);
     }
     
  </script>
  
  <script>
     function myFunctionRB13(){
         var xrRB13 = new XMLHttpRequest();
         var urlRB13 = "saveNewTextRB13.php";
         var textRB13 = document.getElementById("RB13").innerHTML;
         var varsRB13 = "newTextRB13="+textRB13;
         
         xrRB13.open("POST", urlRB13, true);
         xrRB13.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB13.send(varsRB13);
     }
     
  </script>
  
   <script>
     function myFunctionRB14(){
         var xrRB14 = new XMLHttpRequest();
         var urlRB14 = "saveNewTextRB14.php";
         var textRB14 = document.getElementById("RB14").innerHTML;
         var varsRB14 = "newTextRB14="+textRB14;
         
         xrRB14.open("POST", urlRB14, true);
         xrRB14.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB14.send(varsRB14);
     }
     
  </script>
  
   <script>
     function myFunctionRB15(){
         var xrRB15 = new XMLHttpRequest();
         var urlRB15 = "saveNewTextRB15.php";
         var textRB15 = document.getElementById("RB15").innerHTML;
         var varsRB15 = "newTextRB15="+textRB15;
         
         xrRB15.open("POST", urlRB15, true);
         xrRB15.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB15.send(varsRB15);
     }
     
  </script>
  
    <script>
     function myFunctionRB16(){
         var xrRB16 = new XMLHttpRequest();
         var urlRB16 = "saveNewTextRB16.php";
         var textRB16 = document.getElementById("RB16").innerHTML;
         var varsRB16 = "newTextRB16="+textRB16;
         
         xrRB16.open("POST", urlRB16, true);
         xrRB16.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB16.send(varsRB16);
     }
     
  </script>
  
  <script>
     function myFunctionRB17(){
         var xrRB17 = new XMLHttpRequest();
         var urlRB17 = "saveNewTextRB17.php";
         var textRB17 = document.getElementById("RB17").innerHTML;
         var varsRB17 = "newTextRB17="+textRB17;
         
         xrRB17.open("POST", urlRB17, true);
         xrRB17.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB17.send(varsRB17);
     }
     
  </script>

<script>
     function myFunctionRB18(){
         var xrRB18 = new XMLHttpRequest();
         var urlRB18 = "saveNewTextRB18.php";
         var textRB18 = document.getElementById("RB18").innerHTML;
         var varsRB18 = "newTextRB18="+textRB18;
         
         xrRB18.open("POST", urlRB18, true);
         xrRB18.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRB18.send(varsRB18);
     }
     
  </script>
  
  
   <script>
     function myFunctionRC1(){
         var xrRC1 = new XMLHttpRequest();
         var urlRC1 = "saveNewTextRC1.php";
         var textRC1 = document.getElementById("RC1").innerHTML;
         var varsRC1 = "newTextRC1="+textRC1;
         
         xrRC1.open("POST", urlRC1, true);
         xrRC1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC1.send(varsRC1);
     }
     
  </script>
  
    <script>
     function myFunctionRC2(){
         var xrRC2 = new XMLHttpRequest();
         var urlRC2 = "saveNewTextRC2.php";
         var textRC2 = document.getElementById("RC2").innerHTML;
         var varsRC2 = "newTextRC2="+textRC2;
         
         xrRC2.open("POST", urlRC2, true);
         xrRC2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC2.send(varsRC2);
     }
     
  </script>
  
  
   <script>
     function myFunctionRC3(){
         var xrRC3 = new XMLHttpRequest();
         var urlRC3 = "saveNewTextRC3.php";
         var textRC3 = document.getElementById("RC3").innerHTML;
         var varsRC3 = "newTextRC3="+textRC3;
         
         xrRC3.open("POST", urlRC3, true);
         xrRC3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC3.send(varsRC3);
     }
     
  </script>
  
  
  <script>
     function myFunctionRC4(){
         var xrRC4 = new XMLHttpRequest();
         var urlRC4 = "saveNewTextRC4.php";
         var textRC4 = document.getElementById("RC4").innerHTML;
         var varsRC4 = "newTextRC4="+textRC4;
         
         xrRC4.open("POST", urlRC4, true);
         xrRC4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC4.send(varsRC4);
     }
     
  </script>
  
    <script>
     function myFunctionRC5(){
         var xrRC5 = new XMLHttpRequest();
         var urlRC5 = "saveNewTextRC5.php";
         var textRC5 = document.getElementById("RC5").innerHTML;
         var varsRC5 = "newTextRC5="+textRC5;
         
         xrRC5.open("POST", urlRC5, true);
         xrRC5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC5.send(varsRC5);
     }
     
  </script>

 <script>
     function myFunctionRC6(){
         var xrRC6 = new XMLHttpRequest();
         var urlRC6 = "saveNewTextRC6.php";
         var textRC6 = document.getElementById("RC6").innerHTML;
         var varsRC6 = "newTextRC6="+textRC6;
         
         xrRC6.open("POST", urlRC6, true);
         xrRC6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC6.send(varsRC6);
     }
     
  </script>
  
  
  <script>
     function myFunctionRC7(){
         var xrRC7 = new XMLHttpRequest();
         var urlRC7 = "saveNewTextRC7.php";
         var textRC7 = document.getElementById("RC7").innerHTML;
         var varsRC7 = "newTextRC7="+textRC7;
         
         xrRC7.open("POST", urlRC7, true);
         xrRC7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC7.send(varsRC7);
     }
     
  </script>
  
  
  
   <script>
     function myFunctionRC8(){
         var xrRC8 = new XMLHttpRequest();
         var urlRC8 = "saveNewTextRC8.php";
         var textRC8 = document.getElementById("RC8").innerHTML;
         var varsRC8 = "newTextRC8="+textRC8;
         
         xrRC8.open("POST", urlRC8, true);
         xrRC8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRC8.send(varsRC8);
     }
     
  </script>
  
  
  <script>
     function myFunctionRD1(){
         var xrRD1 = new XMLHttpRequest();
         var urlRD1 = "saveNewTextRD1.php";
         var textRD1 = document.getElementById("RD1").innerHTML;
         var varsRD1 = "newTextRD1="+textRD1;
         
         xrRD1.open("POST", urlRD1, true);
         xrRD1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD1.send(varsRD1);
     }
     
  </script>
  
  
  
  <script>
     function myFunctionRD2(){
         var xrRD2 = new XMLHttpRequest();
         var urlRD2 = "saveNewTextRD2.php";
         var textRD2 = document.getElementById("RD2").innerHTML;
         var varsRD2 = "newTextRD2="+textRD2;
         
         xrRD2.open("POST", urlRD2, true);
         xrRD2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD2.send(varsRD2);
     }
     
  </script>
  
  <script>
     function myFunctionRD3(){
         var xrRD3 = new XMLHttpRequest();
         var urlRD3 = "saveNewTextRD3.php";
         var textRD3 = document.getElementById("RD3").innerHTML;
         var varsRD3 = "newTextRD3="+textRD3;
         
         xrRD3.open("POST", urlRD3, true);
         xrRD3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD3.send(varsRD3);
     }
     
  </script>
  
  <script>
     function myFunctionRD4(){
         var xrRD4 = new XMLHttpRequest();
         var urlRD4 = "saveNewTextRD4.php";
         var textRD4 = document.getElementById("RD4").innerHTML;
         var varsRD4 = "newTextRD4="+textRD4;
         
         xrRD4.open("POST", urlRD4, true);
         xrRD4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD4.send(varsRD4);
     }
     
  </script>
  
  
  <script>
     function myFunctionRD5(){
         var xrRD5 = new XMLHttpRequest();
         var urlRD5 = "saveNewTextRD5.php";
         var textRD5 = document.getElementById("RD5").innerHTML;
         var varsRD5 = "newTextRD5="+textRD5;
         
         xrRD5.open("POST", urlRD5, true);
         xrRD5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD5.send(varsRD5);
     }
     
  </script>
  
  <script>
     function myFunctionRD6(){
         var xrRD6 = new XMLHttpRequest();
         var urlRD6 = "saveNewTextRD6.php";
         var textRD6 = document.getElementById("RD6").innerHTML;
         var varsRD6 = "newTextRD6="+textRD6;
         
         xrRD6.open("POST", urlRD6, true);
         xrRD6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD6.send(varsRD6);
     }
     
  </script>
  
  
   <script>
     function myFunctionRD7(){
         var xrRD7 = new XMLHttpRequest();
         var urlRD7 = "saveNewTextRD7.php";
         var textRD7 = document.getElementById("RD7").innerHTML;
         var varsRD7 = "newTextRD7="+textRD7;
         
         xrRD7.open("POST", urlRD7, true);
         xrRD7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD7.send(varsRD7);
     }
     
  </script>
  
   <script>
     function myFunctionRD8(){
         var xrRD8 = new XMLHttpRequest();
         var urlRD8 = "saveNewTextRD8.php";
         var textRD8 = document.getElementById("RD8").innerHTML;
         var varsRD8 = "newTextRD8="+textRD8;
         
         xrRD8.open("POST", urlRD8, true);
         xrRD8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRD8.send(varsRD8);
     }
     
  </script>
  
  
   <script>
     function myFunctionRE1(){
         var xrRE1 = new XMLHttpRequest();
         var urlRE1 = "saveNewTextRE1.php";
         var textRE1 = document.getElementById("RE1").innerHTML;
         var varsRE1 = "newTextRE1="+textRE1;
         
         xrRE1.open("POST", urlRE1, true);
         xrRE1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE1.send(varsRE1);
     }
     
  </script>
  
  
     <script>
     function myFunctionRE2(){
         var xrRE2 = new XMLHttpRequest();
         var urlRE2 = "saveNewTextRE2.php";
         var textRE2 = document.getElementById("RE2").innerHTML;
         var varsRE2 = "newTextRE2="+textRE2;
         
         xrRE2.open("POST", urlRE2, true);
         xrRE2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE2.send(varsRE2);
     }
     
  </script>
  
  
<script>
     function myFunctionRE3(){
         var xrRE3 = new XMLHttpRequest();
         var urlRE3 = "saveNewTextRE3.php";
         var textRE3 = document.getElementById("RE3").innerHTML;
         var varsRE3 = "newTextRE3="+textRE3;
         
         xrRE3.open("POST", urlRE3, true);
         xrRE3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE3.send(varsRE3);
     }
     
  </script>
  
  
<script>
     function myFunctionRE4(){
         var xrRE4 = new XMLHttpRequest();
         var urlRE4 = "saveNewTextRE4.php";
         var textRE4 = document.getElementById("RE4").innerHTML;
         var varsRE4 = "newTextRE4="+textRE4;
         
         xrRE4.open("POST", urlRE4, true);
         xrRE4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE4.send(varsRE4);
     }
     
  </script>
  
<script>
     function myFunctionRE5(){
         var xrRE5 = new XMLHttpRequest();
         var urlRE5 = "saveNewTextRE5.php";
         var textRE5 = document.getElementById("RE5").innerHTML;
         var varsRE5 = "newTextRE5="+textRE5;
         
         xrRE5.open("POST", urlRE5, true);
         xrRE5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE5.send(varsRE5);
     }
     
  </script>
  
<script>
     function myFunctionRE6(){
         var xrRE6 = new XMLHttpRequest();
         var urlRE6 = "saveNewTextRE6.php";
         var textRE6 = document.getElementById("RE6").innerHTML;
         var varsRE6 = "newTextRE6="+textRE6;
         
         xrRE6.open("POST", urlRE6, true);
         xrRE6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE6.send(varsRE6);
     }
     
  </script>
  
<script>
     function myFunctionRE7(){
         var xrRE7 = new XMLHttpRequest();
         var urlRE7 = "saveNewTextRE7.php";
         var textRE7 = document.getElementById("RE7").innerHTML;
         var varsRE7 = "newTextRE7="+textRE7;
         
         xrRE7.open("POST", urlRE7, true);
         xrRE7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE7.send(varsRE7);
     }
     
  </script>
  
<script>
     function myFunctionRE8(){
         var xrRE8 = new XMLHttpRequest();
         var urlRE8 = "saveNewTextRE8.php";
         var textRE8 = document.getElementById("RE8").innerHTML;
         var varsRE8 = "newTextRE8="+textRE8;
         
         xrRE8.open("POST", urlRE8, true);
         xrRE8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE8.send(varsRE8);
     }
     
  </script>
  
  
<script>
     function myFunctionRE9(){
         var xrRE9 = new XMLHttpRequest();
         var urlRE9 = "saveNewTextRE9.php";
         var textRE9 = document.getElementById("RE9").innerHTML;
         var varsRE9 = "newTextRE9="+textRE9;
         
         xrRE9.open("POST", urlRE9, true);
         xrRE9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE9.send(varsRE9);
     }
     
  </script>
  
<script>
     function myFunctionRE10(){
         var xrRE10 = new XMLHttpRequest();
         var urlRE10 = "saveNewTextRE10.php";
         var textRE10 = document.getElementById("RE10").innerHTML;
         var varsRE10 = "newTextRE10="+textRE10;
         
         xrRE10.open("POST", urlRE10, true);
         xrRE10.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE10.send(varsRE10);
     }
     
  </script>
  
<script>
     function myFunctionRE11(){
         var xrRE11 = new XMLHttpRequest();
         var urlRE11 = "saveNewTextRE11.php";
         var textRE11 = document.getElementById("RE11").innerHTML;
         var varsRE11 = "newTextRE11="+textRE11;
         
         xrRE11.open("POST", urlRE11, true);
         xrRE11.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRE11.send(varsRE11);
     }
     
  </script>
  
<script>
     function myFunctionRF1(){
         var xrRF1 = new XMLHttpRequest();
         var urlRF1 = "saveNewTextRF1.php";
         var textRF1 = document.getElementById("RF1").innerHTML;
         var varsRF1 = "newTextRF1="+textRF1;
         
         xrRF1.open("POST", urlRF1, true);
         xrRF1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRF1.send(varsRF1);
     }
     
  </script>
  
  
<script>
     function myFunctionRF2(){
         var xrRF2 = new XMLHttpRequest();
         var urlRF2 = "saveNewTextRF2.php";
         var textRF2 = document.getElementById("RF2").innerHTML;
         var varsRF2 = "newTextRF2="+textRF2;
         
         xrRF2.open("POST", urlRF2, true);
         xrRF2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRF2.send(varsRF2);
     }
     
  </script>
  
<script>
     function myFunctionRF3(){
         var xrRF3 = new XMLHttpRequest();
         var urlRF3 = "saveNewTextRF3.php";
         var textRF3 = document.getElementById("RF3").innerHTML;
         var varsRF3 = "newTextRF3="+textRF3;
         
         xrRF3.open("POST", urlRF3, true);
         xrRF3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRF3.send(varsRF3);
     }
     
  </script>
  
<script>
     function myFunctionRF4(){
         var xrRF4 = new XMLHttpRequest();
         var urlRF4 = "saveNewTextRF4.php";
         var textRF4 = document.getElementById("RF4").innerHTML;
         var varsRF4 = "newTextRF4="+textRF4;
         
         xrRF4.open("POST", urlRF4, true);
         xrRF4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRF4.send(varsRF4);
     }
     
  </script>
  
<script>
     function myFunctionRG1(){
         var xrRG1 = new XMLHttpRequest();
         var urlRG1 = "saveNewTextRG1.php";
         var textRG1 = document.getElementById("RG1").innerHTML;
         var varsRG1 = "newTextRG1="+textRG1;
         
         xrRG1.open("POST", urlRG1, true);
         xrRG1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG1.send(varsRG1);
     }
     
  </script>
  
  
<script>
     function myFunctionRG2(){
         var xrRG2 = new XMLHttpRequest();
         var urlRG2 = "saveNewTextRG2.php";
         var textRG2 = document.getElementById("RG2").innerHTML;
         var varsRG2 = "newTextRG2="+textRG2;
         
         xrRG2.open("POST", urlRG2, true);
         xrRG2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG2.send(varsRG2);
     }
     
  </script>
  
  
<script>
     function myFunctionRG3(){
         var xrRG3 = new XMLHttpRequest();
         var urlRG3 = "saveNewTextRG3.php";
         var textRG3 = document.getElementById("RG3").innerHTML;
         var varsRG3 = "newTextRG3="+textRG3;
         
         xrRG3.open("POST", urlRG3, true);
         xrRG3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG3.send(varsRG3);
     }
     
  </script>
  
<script>
     function myFunctionRG4(){
         var xrRG4 = new XMLHttpRequest();
         var urlRG4 = "saveNewTextRG4.php";
         var textRG4 = document.getElementById("RG4").innerHTML;
         var varsRG4 = "newTextRG4="+textRG4;
         
         xrRG4.open("POST", urlRG4, true);
         xrRG4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG4.send(varsRG4);
     }
     
  </script>
  
<script>
     function myFunctionRG5(){
         var xrRG5 = new XMLHttpRequest();
         var urlRG5 = "saveNewTextRG5.php";
         var textRG5 = document.getElementById("RG5").innerHTML;
         var varsRG5 = "newTextRG5="+textRG5;
         
         xrRG5.open("POST", urlRG5, true);
         xrRG5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG5.send(varsRG5);
     }
     
  </script>
  
  
<script>
     function myFunctionRG6(){
         var xrRG6 = new XMLHttpRequest();
         var urlRG6 = "saveNewTextRG6.php";
         var textRG6 = document.getElementById("RG6").innerHTML;
         var varsRG6 = "newTextRG6="+textRG6;
         
         xrRG6.open("POST", urlRG6, true);
         xrRG6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG6.send(varsRG6);
     }
     
  </script>
  
  
<script>
     function myFunctionRG7(){
         var xrRG7 = new XMLHttpRequest();
         var urlRG7 = "saveNewTextRG7.php";
         var textRG7 = document.getElementById("RG7").innerHTML;
         var varsRG7 = "newTextRG7="+textRG7;
         
         xrRG7.open("POST", urlRG7, true);
         xrRG7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG7.send(varsRG7);
     }
     
  </script>
  
<script>
     function myFunctionRG8(){
         var xrRG8 = new XMLHttpRequest();
         var urlRG8 = "saveNewTextRG8.php";
         var textRG8 = document.getElementById("RG8").innerHTML;
         var varsRG8 = "newTextRG8="+textRG8;
         
         xrRG8.open("POST", urlRG8, true);
         xrRG8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRG8.send(varsRG8);
     }
     
  </script>
  
<script>
     function myFunctionRH1(){
         var xrRH1 = new XMLHttpRequest();
         var urlRH1 = "saveNewTextRH1.php";
         var textRH1 = document.getElementById("RH1").innerHTML;
         var varsRH1 = "newTextRH1="+textRH1;
         
         xrRH1.open("POST", urlRH1, true);
         xrRH1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH1.send(varsRH1);
     }
     
  </script>
  
  
<script>
     function myFunctionRH2(){
         var xrRH2 = new XMLHttpRequest();
         var urlRH2 = "saveNewTextRH2.php";
         var textRH2 = document.getElementById("RH2").innerHTML;
         var varsRH2 = "newTextRH2="+textRH2;
         
         xrRH2.open("POST", urlRH2, true);
         xrRH2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH2.send(varsRH2);
     }
     
  </script>
  
  
<script>
     function myFunctionRH3(){
         var xrRH3 = new XMLHttpRequest();
         var urlRH3 = "saveNewTextRH3.php";
         var textRH3 = document.getElementById("RH3").innerHTML;
         var varsRH3 = "newTextRH3="+textRH3;
         
         xrRH3.open("POST", urlRH3, true);
         xrRH3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH3.send(varsRH3);
     }
     
  </script>
  
  
<script>
     function myFunctionRH4(){
         var xrRH4 = new XMLHttpRequest();
         var urlRH4 = "saveNewTextRH4.php";
         var textRH4 = document.getElementById("RH4").innerHTML;
         var varsRH4 = "newTextRH4="+textRH4;
         
         xrRH4.open("POST", urlRH4, true);
         xrRH4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH4.send(varsRH4);
     }
     
  </script>
  
  
<script>
     function myFunctionRH5(){
         var xrRH5 = new XMLHttpRequest();
         var urlRH5 = "saveNewTextRH5.php";
         var textRH5 = document.getElementById("RH5").innerHTML;
         var varsRH5 = "newTextRH5="+textRH5;
         
         xrRH5.open("POST", urlRH5, true);
         xrRH5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH5.send(varsRH5);
     }
     
  </script>
  
<script>
     function myFunctionRH6(){
         var xrRH6 = new XMLHttpRequest();
         var urlRH6 = "saveNewTextRH6.php";
         var textRH6 = document.getElementById("RH6").innerHTML;
         var varsRH6 = "newTextRH6="+textRH6;
         
         xrRH6.open("POST", urlRH6, true);
         xrRH6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH6.send(varsRH6);
     }
     
  </script>
  
<script>
     function myFunctionRH7(){
         var xrRH7 = new XMLHttpRequest();
         var urlRH7 = "saveNewTextRH7.php";
         var textRH7 = document.getElementById("RH7").innerHTML;
         var varsRH7 = "newTextRH7="+textRH7;
         
         xrRH7.open("POST", urlRH7, true);
         xrRH7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH7.send(varsRH7);
     }
     
  </script>
  
  
<script>
     function myFunctionRH8(){
         var xrRH8 = new XMLHttpRequest();
         var urlRH8 = "saveNewTextRH8.php";
         var textRH8 = document.getElementById("RH8").innerHTML;
         var varsRH8 = "newTextRH8="+textRH8;
         
         xrRH8.open("POST", urlRH8, true);
         xrRH8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRH8.send(varsRH8);
     }
     
  </script>
  
  
<script>
     function myFunctionRI1(){
         var xrRI1 = new XMLHttpRequest();
         var urlRI1 = "saveNewTextRI1.php";
         var textRI1 = document.getElementById("RI1").innerHTML;
         var varsRI1 = "newTextRI1="+textRI1;
         
         xrRI1.open("POST", urlRI1, true);
         xrRI1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI1.send(varsRI1);
     }
     
  </script>
  
  
<script>
     function myFunctionRI2(){
         var xrRI2 = new XMLHttpRequest();
         var urlRI2 = "saveNewTextRI2.php";
         var textRI2 = document.getElementById("RI2").innerHTML;
         var varsRI2 = "newTextRI2="+textRI2;
         
         xrRI2.open("POST", urlRI2, true);
         xrRI2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI2.send(varsRI2);
     }
     
  </script>
  
  
<script>
     function myFunctionRI3(){
         var xrRI3 = new XMLHttpRequest();
         var urlRI3 = "saveNewTextRI3.php";
         var textRI3 = document.getElementById("RI3").innerHTML;
         var varsRI3 = "newTextRI3="+textRI3;
         
         xrRI3.open("POST", urlRI3, true);
         xrRI3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI3.send(varsRI3);
     }
     
  </script>
  
<script>
     function myFunctionRI4(){
         var xrRI4 = new XMLHttpRequest();
         var urlRI4 = "saveNewTextRI4.php";
         var textRI4 = document.getElementById("RI4").innerHTML;
         var varsRI4 = "newTextRI4="+textRI4;
         
         xrRI4.open("POST", urlRI4, true);
         xrRI4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI4.send(varsRI4);
     }
     
  </script> 
  
  
<script>
     function myFunctionRI5(){
         var xrRI5 = new XMLHttpRequest();
         var urlRI5 = "saveNewTextRI5.php";
         var textRI5 = document.getElementById("RI5").innerHTML;
         var varsRI5 = "newTextRI5="+textRI5;
         
         xrRI5.open("POST", urlRI5, true);
         xrRI5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI5.send(varsRI5);
     }
     
  </script> 
  
<script>
     function myFunctionRI6(){
         var xrRI6 = new XMLHttpRequest();
         var urlRI6 = "saveNewTextRI6.php";
         var textRI6 = document.getElementById("RI6").innerHTML;
         var varsRI6 = "newTextRI6="+textRI6;
         
         xrRI6.open("POST", urlRI6, true);
         xrRI6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI6.send(varsRI6);
     }
     
  </script> 
  
  
<script>
     function myFunctionRI7(){
         var xrRI7 = new XMLHttpRequest();
         var urlRI7 = "saveNewTextRI7.php";
         var textRI7 = document.getElementById("RI7").innerHTML;
         var varsRI7 = "newTextRI7="+textRI7;
         
         xrRI7.open("POST", urlRI7, true);
         xrRI7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI7.send(varsRI7);
     }
     
  </script> 
  
<script>
     function myFunctionRI8(){
         var xrRI8 = new XMLHttpRequest();
         var urlRI8 = "saveNewTextRI8.php";
         var textRI8 = document.getElementById("RI8").innerHTML;
         var varsRI8 = "newTextRI8="+textRI8;
         
         xrRI8.open("POST", urlRI8, true);
         xrRI8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI8.send(varsRI8);
     }
     
  </script> 
  
  
<script>
     function myFunctionRI9(){
         var xrRI9 = new XMLHttpRequest();
         var urlRI9 = "saveNewTextRI9.php";
         var textRI9 = document.getElementById("RI9").innerHTML;
         var varsRI9 = "newTextRI9="+textRI9;
         
         xrRI9.open("POST", urlRI9, true);
         xrRI9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRI9.send(varsRI9);
     }
     
  </script> 
  
  
<script>
     function myFunctionRJ1(){
         var xrRJ1 = new XMLHttpRequest();
         var urlRJ1 = "saveNewTextRJ1.php";
         var textRJ1 = document.getElementById("RJ1").innerHTML;
         var varsRJ1 = "newTextRJ1="+textRJ1;
         
         xrRJ1.open("POST", urlRJ1, true);
         xrRJ1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ1.send(varsRJ1);
     }
     
  </script> 
  
  
<script>
     function myFunctionRJ2(){
         var xrRJ2 = new XMLHttpRequest();
         var urlRJ2 = "saveNewTextRJ2.php";
         var textRJ2 = document.getElementById("RJ2").innerHTML;
         var varsRJ2 = "newTextRJ2="+textRJ2;
         
         xrRJ2.open("POST", urlRJ2, true);
         xrRJ2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ2.send(varsRJ2);
     }
     
  </script> 
  
<script>
     function myFunctionRJ3(){
         var xrRJ3 = new XMLHttpRequest();
         var urlRJ3 = "saveNewTextRJ3.php";
         var textRJ3 = document.getElementById("RJ3").innerHTML;
         var varsRJ3 = "newTextRJ3="+textRJ3;
         
         xrRJ3.open("POST", urlRJ3, true);
         xrRJ3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ3.send(varsRJ3);
     }
     
  </script> 
  
  
<script>
     function myFunctionRJ4(){
         var xrRJ4 = new XMLHttpRequest();
         var urlRJ4 = "saveNewTextRJ4.php";
         var textRJ4 = document.getElementById("RJ4").innerHTML;
         var varsRJ4 = "newTextRJ4="+textRJ4;
         
         xrRJ4.open("POST", urlRJ4, true);
         xrRJ4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ4.send(varsRJ4);
     }
     
  </script> 
  
  
<script>
     function myFunctionRJ5(){
         var xrRJ5 = new XMLHttpRequest();
         var urlRJ5 = "saveNewTextRJ5.php";
         var textRJ5 = document.getElementById("RJ5").innerHTML;
         var varsRJ5 = "newTextRJ5="+textRJ5;
         
         xrRJ5.open("POST", urlRJ5, true);
         xrRJ5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ5.send(varsRJ5);
     }
     
  </script> 
  
  
<script>
     function myFunctionRJ6(){
         var xrRJ6 = new XMLHttpRequest();
         var urlRJ6 = "saveNewTextRJ6.php";
         var textRJ6 = document.getElementById("RJ6").innerHTML;
         var varsRJ6 = "newTextRJ6="+textRJ6;
         
         xrRJ6.open("POST", urlRJ6, true);
         xrRJ6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ6.send(varsRJ6);
     }
     
  </script> 
  
<script>
     function myFunctionRJ7(){
         var xrRJ7 = new XMLHttpRequest();
         var urlRJ7 = "saveNewTextRJ7.php";
         var textRJ7 = document.getElementById("RJ7").innerHTML;
         var varsRJ7 = "newTextRJ7="+textRJ7;
         
         xrRJ7.open("POST", urlRJ7, true);
         xrRJ7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ7.send(varsRJ7);
     }
     
  </script> 
  
<script>
     function myFunctionRJ8(){
         var xrRJ8 = new XMLHttpRequest();
         var urlRJ8 = "saveNewTextRJ8.php";
         var textRJ8 = document.getElementById("RJ8").innerHTML;
         var varsRJ8 = "newTextRJ8="+textRJ8;
         
         xrRJ8.open("POST", urlRJ8, true);
         xrRJ8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ8.send(varsRJ8);
     }
     
  </script> 
  
<script>
     function myFunctionRJ9(){
         var xrRJ9 = new XMLHttpRequest();
         var urlRJ9 = "saveNewTextRJ9.php";
         var textRJ9 = document.getElementById("RJ9").innerHTML;
         var varsRJ9 = "newTextRJ9="+textRJ9;
         
         xrRJ9.open("POST", urlRJ9, true);
         xrRJ9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRJ9.send(varsRJ9);
     }
     
  </script> 
  
  
  <script>
     function myFunctionRK1(){
         var xrRK1 = new XMLHttpRequest();
         var urlRK1 = "saveNewTextRK1.php";
         var textRK1 = document.getElementById("RK1").innerHTML;
         var varsRK1 = "newTextRK1="+textRK1;
         
         xrRK1.open("POST", urlRK1, true);
         xrRK1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRK1.send(varsRK1);
     }
     
  </script> 
  
  
   <script>
     function myFunctionRK2(){
         var xrRK2 = new XMLHttpRequest();
         var urlRK2 = "saveNewTextRK2.php";
         var textRK2 = document.getElementById("RK2").innerHTML;
         var varsRK2 = "newTextRK2="+textRK2;
         
         xrRK2.open("POST", urlRK2, true);
         xrRK2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRK2.send(varsRK2);
     }
     
  </script> 
  
  <script>
     function myFunctionRK3(){
         var xrRK3 = new XMLHttpRequest();
         var urlRK3 = "saveNewTextRK3.php";
         var textRK3 = document.getElementById("RK3").innerHTML;
         var varsRK3 = "newTextRK3="+textRK3;
         
         xrRK3.open("POST", urlRK3, true);
         xrRK3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRK3.send(varsRK3);
     }
     
  </script> 
  
   <script>
     function myFunctionRK4(){
         var xrRK4 = new XMLHttpRequest();
         var urlRK4 = "saveNewTextRK4.php";
         var textRK4 = document.getElementById("RK4").innerHTML;
         var varsRK4 = "newTextRK4="+textRK4;
         
         xrRK4.open("POST", urlRK4, true);
         xrRK4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRK4.send(varsRK4);
     }
     
  </script> 
  
   <script>
     function myFunctionRK5(){
         var xrRK5 = new XMLHttpRequest();
         var urlRK5 = "saveNewTextRK5.php";
         var textRK5 = document.getElementById("RK5").innerHTML;
         var varsRK5 = "newTextRK5="+textRK5;
         
         xrRK5.open("POST", urlRK5, true);
         xrRK5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRK5.send(varsRK5);
     }
     
  </script> 
  
  
   <script>
     function myFunctionRK6(){
         var xrRK6 = new XMLHttpRequest();
         var urlRK6 = "saveNewTextRK6.php";
         var textRK6 = document.getElementById("RK6").innerHTML;
         var varsRK6 = "newTextRK6="+textRK6;
         
         xrRK6.open("POST", urlRK6, true);
         xrRK6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRK6.send(varsRK6);
     }
     
  </script> 
  
  
   <script>
     function myFunctionRK7(){
         var xrRK7 = new XMLHttpRequest();
         var urlRK7 = "saveNewTextRK7.php";
         var textRK7 = document.getElementById("RK7").innerHTML;
         var varsRK7 = "newTextRK7="+textRK7;
         
         xrRK7.open("POST", urlRK7, true);
         xrRK7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrRK7.send(varsRK7);
     }
     
  </script> 

  
  
</head>


<body id="ht_ml" style="visibility: hidden;">


<div style="visibility: visible; z-index: -1;">
    <style>
	body{
	
	background:url("IMG_4713-6.jpg") no-repeat center center fixed; 
    background-size: 2000px 1500px ;
	}
	
	@media only screen and (max-width: 1366px) {
    body {
        zoom: 80%;
    }
}
	
	</style>
</div>





<form id="form1" name="id" method="POST" action="<?php echo $editFormAction; ?>">




 <div id="para1" style="border: 3px solid #509189; background-color:#509189; visibility:visible; margin-top: 0px;" class="example1">
 
<p id="myDiv" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunction()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false" >  <?php include("myText.txt"); ?> </p>          





<br />

                    <p>
                    
                
                 
                    <br />
                     <input type="radio" name="genero_avg" value="<?php include("myTextR1.txt") ?>" id="genero_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="r1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionA()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR1.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="genero_avg" value="<?php include("myText2.txt"); ?>" id="genero_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="r2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionB()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false"> <?php include("myText2.txt"); ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="genero_avg" id="genero_2" style="margin-left: 10px; margin-top:-10px;" value="<?php include("myTextR3.txt"); ?>" />    <label  id="r3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionC()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false"> <?php include("myTextR3.txt"); ?> </label>
                   <br />
                    <br />
                     <br />
                      <br />
                      
                    
    					
						
                    </p> 
  </div>
  
  

  <p>&nbsp;</p> <div id="para2" class="example2" style="border: 3px solid #509189; background-color: #509189; margin-top: 2%;">
                    <p id="RB4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB4()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRB4.txt"); ?> </p>
                     <br />
                   
                   
                  <p>
                    <br />
                     <input type="radio" name="idade_avg" id="idade_0" style="margin-left: 10px; margin-top:-10px;" value="<?php include("myTextRB3.txt") ?>" />    <label  id="RB3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" id="idade_1" style="margin-left: 10px; margin-top:-10px;" value="<?php include("myTextRB5.txt") ?>" />    <label  id="RB5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB5.txt") ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB6.txt") ?>" id="idade_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB7.txt") ?>" id="idade_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB8.txt") ?>" id="idade_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB8" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB8.txt") ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB9.txt") ?>" id="idade_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB9" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB9()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB9.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB10.txt") ?>" id="idade_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB10" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB10()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB10.txt") ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB11.txt") ?>" id="idade_7" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB11"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB11()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB11.txt") ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB12.txt") ?>" id="idade_8" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB12"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB12()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB12.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB13.txt") ?>" id="idade_9" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB13" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB13()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB13.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB14.txt") ?>" id="idade_10" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB14" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB14()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB14.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB15.txt") ?>" id="idade_11" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB15" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB15()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB15.txt") ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="idade_avg" value="<?php include("myTextRB16.txt") ?>" id="idade_12" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB16"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB16()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB16.txt") ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                    <input type="radio" name="idade_avg" value="<?php include("myTextRB17.txt") ?>" id="idade_13" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB17" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB17()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB17.txt") ?> </label>
                    <br />
                    <br />
                    <br />
                    <br />
                    <input type="radio" name="idade_avg" value="<?php include("myTextRB18.txt") ?>" id="idade_14" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RB18" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRB18()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRB18.txt") ?> </label>
                  </p> </div>
  </div>
                <p>&nbsp;</p> 
        <div id="para3" class="example3"  style="border: 3px solid #509189;
     background-color: 	#509189; transform: translate(-5%, 20%); margin-top: 150px;">        <p id="RC1" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRC1.txt"); ?> </p>
                     <br />
                
  <p>
     <input type="radio" name="estado_civil_avg" value="<?php include("myTextRC2.txt") ?>" id="estado_civil_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RC2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRC2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="estado_civil_avg" value="<?php include("myTextRC3.txt") ?>" id="estado_civil_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RC3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRC3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
   <input type="radio" name="estado_civil_avg" value="<?php include("myTextRC4.txt") ?>" id="estado_civil_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RC4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRC4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="estado_civil_avg" value="<?php include("myTextRC5.txt") ?>" id="estado_civil_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RC5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRC5.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="estado_civil_avg" value="<?php include("myTextRC6.txt") ?>" id="estado_civil_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RC6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRC6.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="estado_civil_avg" value="<?php include("myTextRC7.txt") ?>" id="estado_civil_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RC7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRC7.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
                  
    <input type="radio" name="estado_civil_avg" value="<?php include("myTextRC8.txt") ?>" id="estado_civil_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RC8" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRC8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRC8.txt") ?> </label>
  <p>   <br /> </div>
  
 
  <div id="para4" class="example4"  style="border: 3px solid #509189;
     background-color: 	#509189; transform: translate(-5%, 10%); margin-top: 100px; ">     <p id="RD1"  <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRD1.txt"); ?> </p> <BR/>

    <p>
       <input type="radio" name="escolaridade_avg" value="<?php include("myTextRD2.txt") ?>" id="escolaridade_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RD2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRD2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="escolaridade_avg" value="<?php include("myTextRD3.txt") ?>" id="escolaridade_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RD3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRD3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
       <input type="radio" name="escolaridade_avg" value="<?php include("myTextRD4.txt") ?>" id="escolaridade_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RD4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRD4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="escolaridade_avg" value="<?php include("myTextRD5.txt") ?>" id="escolaridade_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RD5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRD5.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
       <input type="radio" name="escolaridade_avg" value="<?php include("myTextRD6.txt") ?>" id="escolaridade_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RD6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRD6.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="escolaridade_avg" value="<?php include("myTextRD7.txt") ?>" id="escolaridade_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RD7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRD7.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="escolaridade_avg" value="<?php include("myTextRD8.txt") ?>" id="escolaridade_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RD8"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRD8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRD8.txt") ?> </label>
                   
    </p> </div>
  <p>&nbsp; </p>
  <div id="para5" class="example5"  style="border: 3px solid #509189;
     background-color: 	#509189; transform: translate(-5%, -20%); margin-top: 120px;">     <p id="RE1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRE1.txt"); ?> </p> <BR/>
  <p>&nbsp;</p>
  <p>
    <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE2.txt") ?>" id="situacao_profissional_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE3.txt") ?>" id="situacao_profissional_1" style="margin-left: 10px; margin-top:-10px;"/> <label  id="RE3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE4.txt") ?>" id="situacao_profissional_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
                     <br />
     <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE5.txt") ?>" id="situacao_profissional_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE5.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE6.txt")  ?>" id="situacao_profissional_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE6.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
   <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE7.txt")   ?>" id="situacao_profissional_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE7()'";} ?>style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE7.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE8.txt")   ?>" id="situacao_profissional_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE8" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE8.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE9.txt")   ?>" id="situacao_profissional_7" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE9" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE9()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE9.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE10.txt")   ?>" id="situacao_profissional_8" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE10" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE10()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE10.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
   <input type="radio" name="situacao_profissional_avg" value="<?php include("myTextRE11.txt")   ?>" id="situacao_profissional_9" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RE11" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRE11()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRE11.txt") ?> </label>
                     <br />
  </p> </div>
  <div id="para6" class="example6"  style="border: 3px solid #509189;
     background-color: 	#509189; transform: translate(-5%, -30%); margin-top: 120px;">    <p id="RF1" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRF1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRF1.txt"); ?> </p> <BR/>


  <p>
     <input type="radio" name="primeira_vez_que_visita_o_avg" value="<?php include("myTextRF2.txt") ?>" id="primeira_vez_que_visita_o_avg_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RF2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRF2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRF2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="primeira_vez_que_visita_o_avg" value="<?php include("myTextRF3.txt") ?>" id="primeira_vez_que_visita_o_avg_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RF3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRF3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRF3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
   <input type="radio" name="primeira_vez_que_visita_o_avg" value="<?php include(   "myTextRF4.txt") ?>" id="primeira_vez_que_visita_o_avg_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RF4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRF4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRF4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
  </p> </div>
  <p>&nbsp;</p>
  <div id="para7" class="example7"  style="border: 3px solid #509189;
     background-color: 	#509189; margin-top: 60px;">    <p id="RG1" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRG1.txt"); ?> </p> <BR/>
  <p>
    <input type="radio" name="ultima_vez_que_visitou_o_avg" value="<?php include("myTextRG2.txt") ?>" id="ultima_vez_que_visitou_o_avg_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RG2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRG2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="ultima_vez_que_visitou_o_avg" value="<?php include("myTextRG3.txt") ?>" id="ultima_vez_que_visitou_o_avg_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RG3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRG3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="ultima_vez_que_visitou_o_avg" value="<?php include("myTextRG4.txt") ?>" id="ultima_vez_que_visitou_o_avg_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RG4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRG4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="ultima_vez_que_visitou_o_avg" value="<?php include("myTextRG5.txt") ?>" id="ultima_vez_que_visitou_o_avg_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RG5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRG5.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
   <input type="radio" name="ultima_vez_que_visitou_o_avg" value="<?php include("myTextRG6.txt") ?>" id="ultima_vez_que_visitou_o_avg_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RG6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRG6.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="ultima_vez_que_visitou_o_avg" value="<?php include("myTextRG7.txt") ?>" id="ultima_vez_que_visitou_o_avg_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RG7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRG7.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="ultima_vez_que_visitou_o_avg" value="<?php include("myTextRG8.txt") ?>" id="ultima_vez_que_visitou_o_avg_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RG8" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRG8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRG8.txt") ?> </label>
                     <br />
                     
  </p></div>
   <div id="para8" class="example8"  style="border: 3px solid #509189;
     background-color: 	#509189; margin-top: 100px;">    <p id="RH1" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRH1.txt"); ?> </p> <BR/>
  <p>
  
  
    <input type="radio" name="D_q_s_da_existencia_do_avg" value="<?php include("myTextRH2.txt") ?>" id="D_q_s_da_existencia_do_avg_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RH2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRH2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="D_q_s_da_existencia_do_avg" value="<?php include("myTextRH3.txt") ?>" id="D_q_s_da_existencia_do_avg_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RH3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRH3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="D_q_s_da_existencia_do_avg" value="<?php include("myTextRH4.txt") ?>" id="D_q_s_da_existencia_do_avg_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RH4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRH4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="D_q_s_da_existencia_do_avg" value="<?php include("myTextRH5.txt") ?>" id="D_q_s_da_existencia_do_avg_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RH5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRH5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="D_q_s_da_existencia_do_avg" value="<?php include("myTextRH6.txt") ?>" id="D_q_s_da_existencia_do_avg_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RH6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRH6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="D_q_s_da_existencia_do_avg" value="<?php include("myTextRH7.txt") ?>" id="D_q_s_da_existencia_do_avg_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RH7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRH7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="D_q_s_da_existencia_do_avg" value="<?php include("myTextRH8.txt") ?>" id="D_q_s_da_existencia_do_avg_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RH8" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRH8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRH8.txt") ?> </label>
                   <br />
  </p> </div>
   <div id="para9" class="example9"  style="border: 3px solid #509189;
     background-color: 	#509189; transform: translate(-5%, -60%); margin-top: auto; margin-bottom: auto; MARGIN-TOP: 100PX; text-align: left;">   <p id="RI1" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRI1.txt"); ?> 
     </p> <BR/>
  
  <p>    
    <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI2.txt") ?>" id="Como_ficou_a_saber_do_avg_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI3.txt") ?>" id="Como_ficou_a_saber_do_avg_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI4.txt") ?>" id="Como_ficou_a_saber_do_avg_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI5.txt") ?>" id="Como_ficou_a_saber_do_avg_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI5.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI6.txt") ?>" id="Como_ficou_a_saber_do_avg_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI6.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
     <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI7.txt") ?>" id="Como_ficou_a_saber_do_avg_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI7.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI8.txt") ?>" id="Como_ficou_a_saber_do_avg_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI8" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI8.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Como_ficou_a_saber_do_avg" value="<?php include("myTextRI9.txt") ?>" id="Como_ficou_a_saber_do_avg_7" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RI9" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRI9()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRI9.txt") ?> </label>
                     <br />
                     </div>
  </p>
  <p><br />
  <div id="para10" class="example10"  style="border: 3px solid #509189;
     background-color: 	#509189; MARGIN-TOP: 160PX; text-align: left;">    
     <p id="RJ1" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRJ1.txt"); ?> 
     </p> <BR/>
     
  <p>
    <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ2.txt") ?>" id="Motivos_da_visita_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
     <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ3.txt") ?>" id="Motivos_da_visita_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
     <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ4.txt") ?>" id="Motivos_da_visita_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ4()'";} ?>style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
     <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ5.txt") ?>" id="Motivos_da_visita_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ5.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
   <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ6.txt") ?>" id="Motivos_da_visita_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ6.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
     <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ7.txt") ?>" id="Motivos_da_visita_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ7.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ8.txt") ?>" id="Motivos_da_visita_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ8" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ8.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
     <input type="radio" name="Motivos_da_visita_avg" value="<?php include("myTextRJ9.txt") ?>" id="Motivos_da_visita_7" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RJ9" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRJ9()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRJ9.txt") ?> </label>
                     <br />
  </p> </div> <br>
  
  
  
  <div id="para11" class="example11"  style="border: 3px solid #509189;
     background-color: 	#509189; margin-top: 60px;">    
      <p id="RK1" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRK1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextRK1.txt"); ?> </p> <BR/>
     
  <p>
     <input type="radio" name="Avaliacao_da_visita_avg" value="<?php include("myTextRK2.txt") ?>" id="Avaliacao_da_visita_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RK2" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRK2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRK2.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
     <input type="radio" name="Avaliacao_da_visita_avg" value="<?php include("myTextRK3.txt") ?>" id="Avaliacao_da_visita_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RK3" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRK3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRK3.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Avaliacao_da_visita_avg" value="<?php include("myTextRK4.txt") ?>" id="Avaliacao_da_visita_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RK4" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRK4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRK4.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Avaliacao_da_visita_avg" value="<?php include("myTextRK5.txt") ?>" id="Avaliacao_da_visita_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RK5" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRK5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRK5.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
    <input type="radio" name="Avaliacao_da_visita_avg" value="<?php include("myTextRK6.txt") ?>" id="Avaliacao_da_visita_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RK6" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRK6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRK6.txt") ?> </label>
                     <br />
                    <br />
                    <br />
                    <br /> 
   <input type="radio" name="Avaliacao_da_visita_avg" value="<?php include("myTextRK7.txt") ?>" id="Avaliacao_da_visita_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="RK7" <?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionRK7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextRK7.txt") ?> </label>
   <BR />
  </p> </div>
  <div id="para12" class="example12"  style="border: 3px solid #509189;
     background-color: 	#509189;  transform: translate(-5%, -290%); margin-top: 350px;">    <p>Deixe aqui a sua sugestão  </p>
  <p>&nbsp;</p>
  <p>
    <label for="textfield"></label>
	
    <textarea name="sugestoes_avg" id="sugestoes_0" style="resize: none; width: 350px;"> </textarea>
	<br><br><br><br>
    <input type="submit" name="button" id="button" value="Enviar" />
    <br />    
    <br />
    <br />
  </p>
  <input type="hidden" name="MM_insert" value="id" />
  
  </div>
</form>
</frame>
<script src="java_s.js"></script>
<script src="java_s1.js"></script>
<script src="java_s2.js"></script>
<script src="java_avg_seguinte.js"></script>
<script src="teste_java.js"></script>

</body>
</html>
<?php
mysql_free_result($Recordset11112211222);


?>
