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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO ccm (genero_ccm, idade_ccm, estado_civil_ccm, escolaridade_ccm, situacao_profissional_ccm, primeira_vez_que_visita_ecultural, eculturais_visitados, ultima_vez_que_visitou_eculturais, como_ficou_a_saber_dos_eculturais, motivos_da_visita_a_ecultural, sugestoes) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['genero_ccm'], "text"),
                       GetSQLValueString($_POST['idade_ccm'], "text"),
                       GetSQLValueString($_POST['estado_civil_ccm'], "text"),
                       GetSQLValueString($_POST['escolaridade_ccm'], "text"),
                       GetSQLValueString($_POST['situacao_profissional_ccm'], "text"),
                       GetSQLValueString($_POST['primeira_vez_que_visita_ecultural'], "text"),
                       GetSQLValueString($_POST['eculturais_visitados'], "text"),
                       GetSQLValueString($_POST['ultima_vez_que_visitou_eculturais'], "text"),
                       GetSQLValueString($_POST['como_ficou_a_saber_dos_eculturais'], "text"),
                       GetSQLValueString($_POST['motivos_da_visita_a_ecultural'], "text"),
                       GetSQLValueString($_POST['sugestoes'], "text"));

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
$query_Recordset_ccm1 = "SELECT * FROM ccm";
$Recordset_ccm1 = mysql_query($query_Recordset_ccm1, $quest_s) or die(mysql_error());
$row_Recordset_ccm1 = mysql_fetch_assoc($Recordset_ccm1);
$totalRows_Recordset_ccm1 = mysql_num_rows($Recordset_ccm1);

mysql_free_result($Recordset_ccm1);
?>



<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questionário CCM</title>




<link rel="icon" href="ccm_icon.jpg" sizes="16x16" type="image/jpg">
<link rel="stylesheet" type="text/css" href="estilos_para_formuls.css">


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
background:url(anigif_marinha.gif) no-repeat center center fixed; 

@media only screen and (max-width: 768px) {
			 #para1{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para2{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para3{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para4{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para5{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para6{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para7{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para8{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para9{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para10{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para11{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para12{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
}



@media only screen and (max-width: 411px) {
			 #para1{
				  width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para2{
				  width: 900px;
				   margin-left: 15px;
				   
			 }
			 
			 #para3{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para4{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para5{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			 #para6{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para7{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para8{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para9{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para10{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para11{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
			  #para12{
				   width: 900px;
				   margin-left: 15px;
			 }
			 
}


</style>


  <script>
     function myFunctionR_CCM_A1(){
         var xrR_CCM_A1 = new XMLHttpRequest();
         var urlR_CCM_A1 = "saveNewTextR_CCM_A1.php";
         var textR_CCM_A1 = document.getElementById("R_CCM_A1").innerHTML;
         var varsR_CCM_A1 = "newTextR_CCM_A1="+textR_CCM_A1;
         
         xrR_CCM_A1.open("POST", urlR_CCM_A1, true);
         xrR_CCM_A1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_A1.send(varsR_CCM_A1);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_A2(){
         var xrR_CCM_A2 = new XMLHttpRequest();
         var urlR_CCM_A2 = "saveNewTextR_CCM_A2.php";
         var textR_CCM_A2 = document.getElementById("R_CCM_A2").innerHTML;
         var varsR_CCM_A2 = "newTextR_CCM_A2="+textR_CCM_A2;
         
         xrR_CCM_A2.open("POST", urlR_CCM_A2, true);
         xrR_CCM_A2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_A2.send(varsR_CCM_A2);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_A3(){
         var xrR_CCM_A3 = new XMLHttpRequest();
         var urlR_CCM_A3 = "saveNewTextR_CCM_A3.php";
         var textR_CCM_A3 = document.getElementById("R_CCM_A3").innerHTML;
         var varsR_CCM_A3 = "newTextR_CCM_A3="+textR_CCM_A3;
         
         xrR_CCM_A3.open("POST", urlR_CCM_A3, true);
         xrR_CCM_A3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_A3.send(varsR_CCM_A3);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_A4(){
         var xrR_CCM_A4 = new XMLHttpRequest();
         var urlR_CCM_A4 = "saveNewTextR_CCM_A4.php";
         var textR_CCM_A4 = document.getElementById("R_CCM_A4").innerHTML;
         var varsR_CCM_A4 = "newTextR_CCM_A4="+textR_CCM_A4;
         
         xrR_CCM_A4.open("POST", urlR_CCM_A4, true);
         xrR_CCM_A4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_A4.send(varsR_CCM_A4);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B1(){
         var xrR_CCM_B1 = new XMLHttpRequest();
         var urlR_CCM_B1 = "saveNewTextR_CCM_B1.php";
         var textR_CCM_B1 = document.getElementById("R_CCM_B1").innerHTML;
         var varsR_CCM_B1 = "newTextR_CCM_B1="+textR_CCM_B1;
         
         xrR_CCM_B1.open("POST", urlR_CCM_B1, true);
         xrR_CCM_B1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B1.send(varsR_CCM_B1);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B2(){
         var xrR_CCM_B2 = new XMLHttpRequest();
         var urlR_CCM_B2 = "saveNewTextR_CCM_B2.php";
         var textR_CCM_B2 = document.getElementById("R_CCM_B2").innerHTML;
         var varsR_CCM_B2 = "newTextR_CCM_B2="+textR_CCM_B2;
         
         xrR_CCM_B2.open("POST", urlR_CCM_B2, true);
         xrR_CCM_B2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B2.send(varsR_CCM_B2);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B3(){
         var xrR_CCM_B3 = new XMLHttpRequest();
         var urlR_CCM_B3 = "saveNewTextR_CCM_B3.php";
         var textR_CCM_B3 = document.getElementById("R_CCM_B3").innerHTML;
         var varsR_CCM_B3 = "newTextR_CCM_B3="+textR_CCM_B3;
         
         xrR_CCM_B3.open("POST", urlR_CCM_B3, true);
         xrR_CCM_B3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B3.send(varsR_CCM_B3);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_B4(){
         var xrR_CCM_B4 = new XMLHttpRequest();
         var urlR_CCM_B4 = "saveNewTextR_CCM_B4.php";
         var textR_CCM_B4 = document.getElementById("R_CCM_B4").innerHTML;
         var varsR_CCM_B4 = "newTextR_CCM_B4="+textR_CCM_B4;
         
         xrR_CCM_B4.open("POST", urlR_CCM_B4, true);
         xrR_CCM_B4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B4.send(varsR_CCM_B4);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_B5(){
         var xrR_CCM_B5 = new XMLHttpRequest();
         var urlR_CCM_B5 = "saveNewTextR_CCM_B5.php";
         var textR_CCM_B5 = document.getElementById("R_CCM_B5").innerHTML;
         var varsR_CCM_B5 = "newTextR_CCM_B5="+textR_CCM_B5;
         
         xrR_CCM_B5.open("POST", urlR_CCM_B5, true);
         xrR_CCM_B5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B5.send(varsR_CCM_B5);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B6(){
         var xrR_CCM_B6 = new XMLHttpRequest();
         var urlR_CCM_B6 = "saveNewTextR_CCM_B6.php";
         var textR_CCM_B6 = document.getElementById("R_CCM_B6").innerHTML;
         var varsR_CCM_B6 = "newTextR_CCM_B6="+textR_CCM_B6;
         
         xrR_CCM_B6.open("POST", urlR_CCM_B6, true);
         xrR_CCM_B6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B6.send(varsR_CCM_B6);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_B7(){
         var xrR_CCM_B7 = new XMLHttpRequest();
         var urlR_CCM_B7 = "saveNewTextR_CCM_B7.php";
         var textR_CCM_B7 = document.getElementById("R_CCM_B7").innerHTML;
         var varsR_CCM_B7 = "newTextR_CCM_B7="+textR_CCM_B7;
         
         xrR_CCM_B7.open("POST", urlR_CCM_B7, true);
         xrR_CCM_B7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B7.send(varsR_CCM_B7);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_B8(){
         var xrR_CCM_B8 = new XMLHttpRequest();
         var urlR_CCM_B8 = "saveNewTextR_CCM_B8.php";
         var textR_CCM_B8 = document.getElementById("R_CCM_B8").innerHTML;
         var varsR_CCM_B8 = "newTextR_CCM_B8="+textR_CCM_B8;
         
         xrR_CCM_B8.open("POST", urlR_CCM_B8, true);
         xrR_CCM_B8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B8.send(varsR_CCM_B8);
     }
     
  </script> 
  
    <script>
     function myFunctionR_CCM_B9(){
         var xrR_CCM_B9 = new XMLHttpRequest();
         var urlR_CCM_B9 = "saveNewTextR_CCM_B9.php";
         var textR_CCM_B9 = document.getElementById("R_CCM_B9").innerHTML;
         var varsR_CCM_B9 = "newTextR_CCM_B9="+textR_CCM_B9;
         
         xrR_CCM_B9.open("POST", urlR_CCM_B9, true);
         xrR_CCM_B9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B9.send(varsR_CCM_B9);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B10(){
         var xrR_CCM_B10 = new XMLHttpRequest();
         var urlR_CCM_B10 = "saveNewTextR_CCM_B10.php";
         var textR_CCM_B10 = document.getElementById("R_CCM_B10").innerHTML;
         var varsR_CCM_B10 = "newTextR_CCM_B10="+textR_CCM_B10;
         
         xrR_CCM_B10.open("POST", urlR_CCM_B10, true);
         xrR_CCM_B10.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B10.send(varsR_CCM_B10);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_B11(){
         var xrR_CCM_B11 = new XMLHttpRequest();
         var urlR_CCM_B11 = "saveNewTextR_CCM_B11.php";
         var textR_CCM_B11 = document.getElementById("R_CCM_B11").innerHTML;
         var varsR_CCM_B11 = "newTextR_CCM_B11="+textR_CCM_B11;
         
         xrR_CCM_B11.open("POST", urlR_CCM_B11, true);
         xrR_CCM_B11.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B11.send(varsR_CCM_B11);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B12(){
         var xrR_CCM_B12 = new XMLHttpRequest();
         var urlR_CCM_B12 = "saveNewTextR_CCM_B12.php";
         var textR_CCM_B12 = document.getElementById("R_CCM_B12").innerHTML;
         var varsR_CCM_B12 = "newTextR_CCM_B12="+textR_CCM_B12;
         
         xrR_CCM_B12.open("POST", urlR_CCM_B12, true);
         xrR_CCM_B12.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B12.send(varsR_CCM_B12);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_B13(){
         var xrR_CCM_B13 = new XMLHttpRequest();
         var urlR_CCM_B13 = "saveNewTextR_CCM_B13.php";
         var textR_CCM_B13 = document.getElementById("R_CCM_B13").innerHTML;
         var varsR_CCM_B13 = "newTextR_CCM_B13="+textR_CCM_B13;
         
         xrR_CCM_B13.open("POST", urlR_CCM_B13, true);
         xrR_CCM_B13.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B13.send(varsR_CCM_B13);
     }
     
  </script> 
  
    <script>
     function myFunctionR_CCM_B14(){
         var xrR_CCM_B14 = new XMLHttpRequest();
         var urlR_CCM_B14 = "saveNewTextR_CCM_B14.php";
         var textR_CCM_B14 = document.getElementById("R_CCM_B14").innerHTML;
         var varsR_CCM_B14 = "newTextR_CCM_B14="+textR_CCM_B14;
         
         xrR_CCM_B14.open("POST", urlR_CCM_B14, true);
         xrR_CCM_B14.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B14.send(varsR_CCM_B14);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B15(){
         var xrR_CCM_B15 = new XMLHttpRequest();
         var urlR_CCM_B15 = "saveNewTextR_CCM_B15.php";
         var textR_CCM_B15 = document.getElementById("R_CCM_B15").innerHTML;
         var varsR_CCM_B15 = "newTextR_CCM_B15="+textR_CCM_B15;
         
         xrR_CCM_B15.open("POST", urlR_CCM_B15, true);
         xrR_CCM_B15.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B15.send(varsR_CCM_B15);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_B16(){
         var xrR_CCM_B16 = new XMLHttpRequest();
         var urlR_CCM_B16 = "saveNewTextR_CCM_B16.php";
         var textR_CCM_B16 = document.getElementById("R_CCM_B16").innerHTML;
         var varsR_CCM_B16 = "newTextR_CCM_B16="+textR_CCM_B16;
         
         xrR_CCM_B16.open("POST", urlR_CCM_B16, true);
         xrR_CCM_B16.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_B16.send(varsR_CCM_B16);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_C1(){
         var xrR_CCM_C1 = new XMLHttpRequest();
         var urlR_CCM_C1 = "saveNewTextR_CCM_C1.php";
         var textR_CCM_C1 = document.getElementById("R_CCM_C1").innerHTML;
         var varsR_CCM_C1 = "newTextR_CCM_C1="+textR_CCM_C1;
         
         xrR_CCM_C1.open("POST", urlR_CCM_C1, true);
         xrR_CCM_C1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C1.send(varsR_CCM_C1);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_C2(){
         var xrR_CCM_C2 = new XMLHttpRequest();
         var urlR_CCM_C2 = "saveNewTextR_CCM_C2.php";
         var textR_CCM_C2 = document.getElementById("R_CCM_C2").innerHTML;
         var varsR_CCM_C2 = "newTextR_CCM_C2="+textR_CCM_C2;
         
         xrR_CCM_C2.open("POST", urlR_CCM_C2, true);
         xrR_CCM_C2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C2.send(varsR_CCM_C2);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_C3(){
         var xrR_CCM_C3 = new XMLHttpRequest();
         var urlR_CCM_C3 = "saveNewTextR_CCM_C3.php";
         var textR_CCM_C3 = document.getElementById("R_CCM_C3").innerHTML;
         var varsR_CCM_C3 = "newTextR_CCM_C3="+textR_CCM_C3;
         
         xrR_CCM_C3.open("POST", urlR_CCM_C3, true);
         xrR_CCM_C3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C3.send(varsR_CCM_C3);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_C4(){
         var xrR_CCM_C4 = new XMLHttpRequest();
         var urlR_CCM_C4 = "saveNewTextR_CCM_C4.php";
         var textR_CCM_C4 = document.getElementById("R_CCM_C4").innerHTML;
         var varsR_CCM_C4 = "newTextR_CCM_C4="+textR_CCM_C4;
         
         xrR_CCM_C4.open("POST", urlR_CCM_C4, true);
         xrR_CCM_C4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C4.send(varsR_CCM_C4);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_C5(){
         var xrR_CCM_C5 = new XMLHttpRequest();
         var urlR_CCM_C5 = "saveNewTextR_CCM_C5.php";
         var textR_CCM_C5 = document.getElementById("R_CCM_C5").innerHTML;
         var varsR_CCM_C5 = "newTextR_CCM_C5="+textR_CCM_C5;
         
         xrR_CCM_C5.open("POST", urlR_CCM_C5, true);
         xrR_CCM_C5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C5.send(varsR_CCM_C5);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_C6(){
         var xrR_CCM_C6 = new XMLHttpRequest();
         var urlR_CCM_C6 = "saveNewTextR_CCM_C6.php";
         var textR_CCM_C6 = document.getElementById("R_CCM_C6").innerHTML;
         var varsR_CCM_C6 = "newTextR_CCM_C6="+textR_CCM_C6;
         
         xrR_CCM_C6.open("POST", urlR_CCM_C6, true);
         xrR_CCM_C6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C6.send(varsR_CCM_C6);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_C7(){
         var xrR_CCM_C7 = new XMLHttpRequest();
         var urlR_CCM_C7 = "saveNewTextR_CCM_C7.php";
         var textR_CCM_C7 = document.getElementById("R_CCM_C7").innerHTML;
         var varsR_CCM_C7 = "newTextR_CCM_C7="+textR_CCM_C7;
         
         xrR_CCM_C7.open("POST", urlR_CCM_C7, true);
         xrR_CCM_C7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C7.send(varsR_CCM_C7);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_C8(){
         var xrR_CCM_C8 = new XMLHttpRequest();
         var urlR_CCM_C8 = "saveNewTextR_CCM_C8.php";
         var textR_CCM_C8 = document.getElementById("R_CCM_C8").innerHTML;
         var varsR_CCM_C8 = "newTextR_CCM_C8="+textR_CCM_C8;
         
         xrR_CCM_C8.open("POST", urlR_CCM_C8, true);
         xrR_CCM_C8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_C8.send(varsR_CCM_C8);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_D1(){
         var xrR_CCM_D1 = new XMLHttpRequest();
         var urlR_CCM_D1 = "saveNewTextR_CCM_D1.php";
         var textR_CCM_D1 = document.getElementById("R_CCM_D1").innerHTML;
         var varsR_CCM_D1 = "newTextR_CCM_D1="+textR_CCM_D1;
         
         xrR_CCM_D1.open("POST", urlR_CCM_D1, true);
         xrR_CCM_D1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D1.send(varsR_CCM_D1);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_D2(){
         var xrR_CCM_D2 = new XMLHttpRequest();
         var urlR_CCM_D2 = "saveNewTextR_CCM_D2.php";
         var textR_CCM_D2 = document.getElementById("R_CCM_D2").innerHTML;
         var varsR_CCM_D2 = "newTextR_CCM_D2="+textR_CCM_D2;
         
         xrR_CCM_D2.open("POST", urlR_CCM_D2, true);
         xrR_CCM_D2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D2.send(varsR_CCM_D2);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_D3(){
         var xrR_CCM_D3 = new XMLHttpRequest();
         var urlR_CCM_D3 = "saveNewTextR_CCM_D3.php";
         var textR_CCM_D3 = document.getElementById("R_CCM_D3").innerHTML;
         var varsR_CCM_D3 = "newTextR_CCM_D3="+textR_CCM_D3;
         
         xrR_CCM_D3.open("POST", urlR_CCM_D3, true);
         xrR_CCM_D3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D3.send(varsR_CCM_D3);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_D4(){
         var xrR_CCM_D4 = new XMLHttpRequest();
         var urlR_CCM_D4 = "saveNewTextR_CCM_D4.php";
         var textR_CCM_D4 = document.getElementById("R_CCM_D4").innerHTML;
         var varsR_CCM_D4 = "newTextR_CCM_D4="+textR_CCM_D4;
         
         xrR_CCM_D4.open("POST", urlR_CCM_D4, true);
         xrR_CCM_D4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D4.send(varsR_CCM_D4);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_D5(){
         var xrR_CCM_D5 = new XMLHttpRequest();
         var urlR_CCM_D5 = "saveNewTextR_CCM_D5.php";
         var textR_CCM_D5 = document.getElementById("R_CCM_D5").innerHTML;
         var varsR_CCM_D5 = "newTextR_CCM_D5="+textR_CCM_D5;
         
         xrR_CCM_D5.open("POST", urlR_CCM_D5, true);
         xrR_CCM_D5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D5.send(varsR_CCM_D5);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_D6(){
         var xrR_CCM_D6 = new XMLHttpRequest();
         var urlR_CCM_D6 = "saveNewTextR_CCM_D6.php";
         var textR_CCM_D6 = document.getElementById("R_CCM_D6").innerHTML;
         var varsR_CCM_D6 = "newTextR_CCM_D6="+textR_CCM_D6;
         
         xrR_CCM_D6.open("POST", urlR_CCM_D6, true);
         xrR_CCM_D6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D6.send(varsR_CCM_D6);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_D7(){
         var xrR_CCM_D7 = new XMLHttpRequest();
         var urlR_CCM_D7 = "saveNewTextR_CCM_D7.php";
         var textR_CCM_D7 = document.getElementById("R_CCM_D7").innerHTML;
         var varsR_CCM_D7 = "newTextR_CCM_D7="+textR_CCM_D7;
         
         xrR_CCM_D7.open("POST", urlR_CCM_D7, true);
         xrR_CCM_D7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D7.send(varsR_CCM_D7);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_D8(){
         var xrR_CCM_D8 = new XMLHttpRequest();
         var urlR_CCM_D8 = "saveNewTextR_CCM_D8.php";
         var textR_CCM_D8 = document.getElementById("R_CCM_D8").innerHTML;
         var varsR_CCM_D8 = "newTextR_CCM_D8="+textR_CCM_D8;
         
         xrR_CCM_D8.open("POST", urlR_CCM_D8, true);
         xrR_CCM_D8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_D8.send(varsR_CCM_D8);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_E1(){
         var xrR_CCM_E1 = new XMLHttpRequest();
         var urlR_CCM_E1 = "saveNewTextR_CCM_E1.php";
         var textR_CCM_E1 = document.getElementById("R_CCM_E1").innerHTML;
         var varsR_CCM_E1 = "newTextR_CCM_E1="+textR_CCM_E1;
         
         xrR_CCM_E1.open("POST", urlR_CCM_E1, true);
         xrR_CCM_E1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E1.send(varsR_CCM_E1);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_E2(){
         var xrR_CCM_E2 = new XMLHttpRequest();
         var urlR_CCM_E2 = "saveNewTextR_CCM_E2.php";
         var textR_CCM_E2 = document.getElementById("R_CCM_E2").innerHTML;
         var varsR_CCM_E2 = "newTextR_CCM_E2="+textR_CCM_E2;
         
         xrR_CCM_E2.open("POST", urlR_CCM_E2, true);
         xrR_CCM_E2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E2.send(varsR_CCM_E2);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_E3(){
         var xrR_CCM_E3 = new XMLHttpRequest();
         var urlR_CCM_E3 = "saveNewTextR_CCM_E3.php";
         var textR_CCM_E3 = document.getElementById("R_CCM_E3").innerHTML;
         var varsR_CCM_E3 = "newTextR_CCM_E3="+textR_CCM_E3;
         
         xrR_CCM_E3.open("POST", urlR_CCM_E3, true);
         xrR_CCM_E3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E3.send(varsR_CCM_E3);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_E4(){
         var xrR_CCM_E4 = new XMLHttpRequest();
         var urlR_CCM_E4 = "saveNewTextR_CCM_E4.php";
         var textR_CCM_E4 = document.getElementById("R_CCM_E4").innerHTML;
         var varsR_CCM_E4 = "newTextR_CCM_E4="+textR_CCM_E4;
         
         xrR_CCM_E4.open("POST", urlR_CCM_E4, true);
         xrR_CCM_E4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E4.send(varsR_CCM_E4);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_E5(){
         var xrR_CCM_E5 = new XMLHttpRequest();
         var urlR_CCM_E5 = "saveNewTextR_CCM_E5.php";
         var textR_CCM_E5 = document.getElementById("R_CCM_E5").innerHTML;
         var varsR_CCM_E5 = "newTextR_CCM_E5="+textR_CCM_E5;
         
         xrR_CCM_E5.open("POST", urlR_CCM_E5, true);
         xrR_CCM_E5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E5.send(varsR_CCM_E5);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_E6(){
         var xrR_CCM_E6 = new XMLHttpRequest();
         var urlR_CCM_E6 = "saveNewTextR_CCM_E6.php";
         var textR_CCM_E6 = document.getElementById("R_CCM_E6").innerHTML;
         var varsR_CCM_E6 = "newTextR_CCM_E6="+textR_CCM_E6;
         
         xrR_CCM_E6.open("POST", urlR_CCM_E6, true);
         xrR_CCM_E6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E6.send(varsR_CCM_E6);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_E7(){
         var xrR_CCM_E7 = new XMLHttpRequest();
         var urlR_CCM_E7 = "saveNewTextR_CCM_E7.php";
         var textR_CCM_E7 = document.getElementById("R_CCM_E7").innerHTML;
         var varsR_CCM_E7 = "newTextR_CCM_E7="+textR_CCM_E7;
         
         xrR_CCM_E7.open("POST", urlR_CCM_E7, true);
         xrR_CCM_E7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E7.send(varsR_CCM_E7);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_E8(){
         var xrR_CCM_E8 = new XMLHttpRequest();
         var urlR_CCM_E8 = "saveNewTextR_CCM_E8.php";
         var textR_CCM_E8 = document.getElementById("R_CCM_E8").innerHTML;
         var varsR_CCM_E8 = "newTextR_CCM_E8="+textR_CCM_E8;
         
         xrR_CCM_E8.open("POST", urlR_CCM_E8, true);
         xrR_CCM_E8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E8.send(varsR_CCM_E8);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_E9(){
         var xrR_CCM_E9 = new XMLHttpRequest();
         var urlR_CCM_E9 = "saveNewTextR_CCM_E9.php";
         var textR_CCM_E9 = document.getElementById("R_CCM_E9").innerHTML;
         var varsR_CCM_E9 = "newTextR_CCM_E9="+textR_CCM_E9;
         
         xrR_CCM_E9.open("POST", urlR_CCM_E9, true);
         xrR_CCM_E9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E9.send(varsR_CCM_E9);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_E10(){
         var xrR_CCM_E10 = new XMLHttpRequest();
         var urlR_CCM_E10 = "saveNewTextR_CCM_E10.php";
         var textR_CCM_E10 = document.getElementById("R_CCM_E10").innerHTML;
         var varsR_CCM_E10 = "newTextR_CCM_E10="+textR_CCM_E10;
         
         xrR_CCM_E10.open("POST", urlR_CCM_E10, true);
         xrR_CCM_E10.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E10.send(varsR_CCM_E10);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_E11(){
         var xrR_CCM_E11 = new XMLHttpRequest();
         var urlR_CCM_E11 = "saveNewTextR_CCM_E11.php";
         var textR_CCM_E11 = document.getElementById("R_CCM_E11").innerHTML;
         var varsR_CCM_E11 = "newTextR_CCM_E11="+textR_CCM_E11;
         
         xrR_CCM_E11.open("POST", urlR_CCM_E11, true);
         xrR_CCM_E11.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_E11.send(varsR_CCM_E11);
     }
     
  </script> 
  
  
  <script>
     function myFunctionR_CCM_F1(){
         var xrR_CCM_F1 = new XMLHttpRequest();
         var urlR_CCM_F1 = "saveNewTextR_CCM_F1.php";
         var textR_CCM_F1 = document.getElementById("R_CCM_F1").innerHTML;
         var varsR_CCM_F1 = "newTextR_CCM_F1="+textR_CCM_F1;
         
         xrR_CCM_F1.open("POST", urlR_CCM_F1, true);
         xrR_CCM_F1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_F1.send(varsR_CCM_F1);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_F2(){
         var xrR_CCM_F2 = new XMLHttpRequest();
         var urlR_CCM_F2 = "saveNewTextR_CCM_F2.php";
         var textR_CCM_F2 = document.getElementById("R_CCM_F2").innerHTML;
         var varsR_CCM_F2 = "newTextR_CCM_F2="+textR_CCM_F2;
         
         xrR_CCM_F2.open("POST", urlR_CCM_F2, true);
         xrR_CCM_F2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_F2.send(varsR_CCM_F2);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_F3(){
         var xrR_CCM_F3 = new XMLHttpRequest();
         var urlR_CCM_F3 = "saveNewTextR_CCM_F3.php";
         var textR_CCM_F3 = document.getElementById("R_CCM_F3").innerHTML;
         var varsR_CCM_F3 = "newTextR_CCM_F3="+textR_CCM_F3;
         
         xrR_CCM_F3.open("POST", urlR_CCM_F3, true);
         xrR_CCM_F3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_F3.send(varsR_CCM_F3);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_F4(){
         var xrR_CCM_F4 = new XMLHttpRequest();
         var urlR_CCM_F4 = "saveNewTextR_CCM_F4.php";
         var textR_CCM_F4 = document.getElementById("R_CCM_F4").innerHTML;
         var varsR_CCM_F4 = "newTextR_CCM_F4="+textR_CCM_F4;
         
         xrR_CCM_F4.open("POST", urlR_CCM_F4, true);
         xrR_CCM_F4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_F4.send(varsR_CCM_F4);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_G1(){
         var xrR_CCM_G1 = new XMLHttpRequest();
         var urlR_CCM_G1 = "saveNewTextR_CCM_G1.php";
         var textR_CCM_G1 = document.getElementById("R_CCM_G1").innerHTML;
         var varsR_CCM_G1 = "newTextR_CCM_G1="+textR_CCM_G1;
         
         xrR_CCM_G1.open("POST", urlR_CCM_G1, true);
         xrR_CCM_G1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G1.send(varsR_CCM_G1);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_G2(){
         var xrR_CCM_G2 = new XMLHttpRequest();
         var urlR_CCM_G2 = "saveNewTextR_CCM_G2.php";
         var textR_CCM_G2 = document.getElementById("R_CCM_G2").innerHTML;
         var varsR_CCM_G2 = "newTextR_CCM_G2="+textR_CCM_G2;
         
         xrR_CCM_G2.open("POST", urlR_CCM_G2, true);
         xrR_CCM_G2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G2.send(varsR_CCM_G2);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_G3(){
         var xrR_CCM_G3 = new XMLHttpRequest();
         var urlR_CCM_G3 = "saveNewTextR_CCM_G3.php";
         var textR_CCM_G3 = document.getElementById("R_CCM_G3").innerHTML;
         var varsR_CCM_G3 = "newTextR_CCM_G3="+textR_CCM_G3;
         
         xrR_CCM_G3.open("POST", urlR_CCM_G3, true);
         xrR_CCM_G3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G3.send(varsR_CCM_G3);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_G4(){
         var xrR_CCM_G4 = new XMLHttpRequest();
         var urlR_CCM_G4 = "saveNewTextR_CCM_G4.php";
         var textR_CCM_G4 = document.getElementById("R_CCM_G4").innerHTML;
         var varsR_CCM_G4 = "newTextR_CCM_G4="+textR_CCM_G4;
         
         xrR_CCM_G4.open("POST", urlR_CCM_G4, true);
         xrR_CCM_G4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G4.send(varsR_CCM_G4);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_G5(){
         var xrR_CCM_G5 = new XMLHttpRequest();
         var urlR_CCM_G5 = "saveNewTextR_CCM_G5.php";
         var textR_CCM_G5 = document.getElementById("R_CCM_G5").innerHTML;
         var varsR_CCM_G5 = "newTextR_CCM_G5="+textR_CCM_G5;
         
         xrR_CCM_G5.open("POST", urlR_CCM_G5, true);
         xrR_CCM_G5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G5.send(varsR_CCM_G5);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_G6(){
         var xrR_CCM_G6 = new XMLHttpRequest();
         var urlR_CCM_G6 = "saveNewTextR_CCM_G6.php";
         var textR_CCM_G6 = document.getElementById("R_CCM_G6").innerHTML;
         var varsR_CCM_G6 = "newTextR_CCM_G6="+textR_CCM_G6;
         
         xrR_CCM_G6.open("POST", urlR_CCM_G6, true);
         xrR_CCM_G6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G6.send(varsR_CCM_G6);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_G7(){
         var xrR_CCM_G7 = new XMLHttpRequest();
         var urlR_CCM_G7 = "saveNewTextR_CCM_G7.php";
         var textR_CCM_G7 = document.getElementById("R_CCM_G7").innerHTML;
         var varsR_CCM_G7 = "newTextR_CCM_G7="+textR_CCM_G7;
         
         xrR_CCM_G7.open("POST", urlR_CCM_G7, true);
         xrR_CCM_G7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G7.send(varsR_CCM_G7);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_G8(){
         var xrR_CCM_G8 = new XMLHttpRequest();
         var urlR_CCM_G8 = "saveNewTextR_CCM_G8.php";
         var textR_CCM_G8 = document.getElementById("R_CCM_G8").innerHTML;
         var varsR_CCM_G8 = "newTextR_CCM_G8="+textR_CCM_G8;
         
         xrR_CCM_G8.open("POST", urlR_CCM_G8, true);
         xrR_CCM_G8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_G8.send(varsR_CCM_G8);
     }
     
  </script> 
  
  
  
   <script>
     function myFunctionR_CCM_H1(){
         var xrR_CCM_H1 = new XMLHttpRequest();
         var urlR_CCM_H1 = "saveNewTextR_CCM_H1.php";
         var textR_CCM_H1 = document.getElementById("R_CCM_H1").innerHTML;
         var varsR_CCM_H1 = "newTextR_CCM_H1="+textR_CCM_H1;
         
         xrR_CCM_H1.open("POST", urlR_CCM_H1, true);
         xrR_CCM_H1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H1.send(varsR_CCM_H1);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_H2(){
         var xrR_CCM_H2 = new XMLHttpRequest();
         var urlR_CCM_H2 = "saveNewTextR_CCM_H2.php";
         var textR_CCM_H2 = document.getElementById("R_CCM_H2").innerHTML;
         var varsR_CCM_H2 = "newTextR_CCM_H2="+textR_CCM_H2;
         
         xrR_CCM_H2.open("POST", urlR_CCM_H2, true);
         xrR_CCM_H2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H2.send(varsR_CCM_H2);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_H3(){
         var xrR_CCM_H3 = new XMLHttpRequest();
         var urlR_CCM_H3 = "saveNewTextR_CCM_H3.php";
         var textR_CCM_H3 = document.getElementById("R_CCM_H3").innerHTML;
         var varsR_CCM_H3 = "newTextR_CCM_H3="+textR_CCM_H3;
         
         xrR_CCM_H3.open("POST", urlR_CCM_H3, true);
         xrR_CCM_H3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H3.send(varsR_CCM_H3);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_H4(){
         var xrR_CCM_H4 = new XMLHttpRequest();
         var urlR_CCM_H4 = "saveNewTextR_CCM_H4.php";
         var textR_CCM_H4 = document.getElementById("R_CCM_H4").innerHTML;
         var varsR_CCM_H4 = "newTextR_CCM_H4="+textR_CCM_H4;
         
         xrR_CCM_H4.open("POST", urlR_CCM_H4, true);
         xrR_CCM_H4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H4.send(varsR_CCM_H4);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_H5(){
         var xrR_CCM_H5 = new XMLHttpRequest();
         var urlR_CCM_H5 = "saveNewTextR_CCM_H5.php";
         var textR_CCM_H5 = document.getElementById("R_CCM_H5").innerHTML;
         var varsR_CCM_H5 = "newTextR_CCM_H5="+textR_CCM_H5;
         
         xrR_CCM_H5.open("POST", urlR_CCM_H5, true);
         xrR_CCM_H5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H5.send(varsR_CCM_H5);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_H6(){
         var xrR_CCM_H6 = new XMLHttpRequest();
         var urlR_CCM_H6 = "saveNewTextR_CCM_H6.php";
         var textR_CCM_H6 = document.getElementById("R_CCM_H6").innerHTML;
         var varsR_CCM_H6 = "newTextR_CCM_H6="+textR_CCM_H6;
         
         xrR_CCM_H6.open("POST", urlR_CCM_H6, true);
         xrR_CCM_H6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H6.send(varsR_CCM_H6);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_H7(){
         var xrR_CCM_H7 = new XMLHttpRequest();
         var urlR_CCM_H7 = "saveNewTextR_CCM_H7.php";
         var textR_CCM_H7 = document.getElementById("R_CCM_H7").innerHTML;
         var varsR_CCM_H7 = "newTextR_CCM_H7="+textR_CCM_H7;
         
         xrR_CCM_H7.open("POST", urlR_CCM_H7, true);
         xrR_CCM_H7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H7.send(varsR_CCM_H7);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_H8(){
         var xrR_CCM_H8 = new XMLHttpRequest();
         var urlR_CCM_H8 = "saveNewTextR_CCM_H8.php";
         var textR_CCM_H8 = document.getElementById("R_CCM_H8").innerHTML;
         var varsR_CCM_H8 = "newTextR_CCM_H8="+textR_CCM_H8;
         
         xrR_CCM_H8.open("POST", urlR_CCM_H8, true);
         xrR_CCM_H8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_H8.send(varsR_CCM_H8);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_I1(){
         var xrR_CCM_I1 = new XMLHttpRequest();
         var urlR_CCM_I1 = "saveNewTextR_CCM_I1.php";
         var textR_CCM_I1 = document.getElementById("R_CCM_I1").innerHTML;
         var varsR_CCM_I1 = "newTextR_CCM_I1="+textR_CCM_I1;
         
         xrR_CCM_I1.open("POST", urlR_CCM_I1, true);
         xrR_CCM_I1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_I1.send(varsR_CCM_I1);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_I2(){
         var xrR_CCM_I2 = new XMLHttpRequest();
         var urlR_CCM_I2 = "saveNewTextR_CCM_I2.php";
         var textR_CCM_I2 = document.getElementById("R_CCM_I2").innerHTML;
         var varsR_CCM_I2 = "newTextR_CCM_I2="+textR_CCM_I2;
         
         xrR_CCM_I2.open("POST", urlR_CCM_I2, true);
         xrR_CCM_I2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_I2.send(varsR_CCM_I2);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_I3(){
         var xrR_CCM_I3 = new XMLHttpRequest();
         var urlR_CCM_I3 = "saveNewTextR_CCM_I3.php";
         var textR_CCM_I3 = document.getElementById("R_CCM_I3").innerHTML;
         var varsR_CCM_I3 = "newTextR_CCM_I3="+textR_CCM_I3;
         
         xrR_CCM_I3.open("POST", urlR_CCM_I3, true);
         xrR_CCM_I3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_I3.send(varsR_CCM_I3);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_I4(){
         var xrR_CCM_I4 = new XMLHttpRequest();
         var urlR_CCM_I4 = "saveNewTextR_CCM_I4.php";
         var textR_CCM_I4 = document.getElementById("R_CCM_I4").innerHTML;
         var varsR_CCM_I4 = "newTextR_CCM_I4="+textR_CCM_I4;
         
         xrR_CCM_I4.open("POST", urlR_CCM_I4, true);
         xrR_CCM_I4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_I4.send(varsR_CCM_I4);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_I5(){
         var xrR_CCM_I5 = new XMLHttpRequest();
         var urlR_CCM_I5 = "saveNewTextR_CCM_I5.php";
         var textR_CCM_I5 = document.getElementById("R_CCM_I5").innerHTML;
         var varsR_CCM_I5 = "newTextR_CCM_I5="+textR_CCM_I5;
         
         xrR_CCM_I5.open("POST", urlR_CCM_I5, true);
         xrR_CCM_I5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_I5.send(varsR_CCM_I5);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_I6(){
         var xrR_CCM_I6 = new XMLHttpRequest();
         var urlR_CCM_I6 = "saveNewTextR_CCM_I6.php";
         var textR_CCM_I6 = document.getElementById("R_CCM_I6").innerHTML;
         var varsR_CCM_I6 = "newTextR_CCM_I6="+textR_CCM_I6;
         
         xrR_CCM_I6.open("POST", urlR_CCM_I6, true);
         xrR_CCM_I6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_I6.send(varsR_CCM_I6);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_J1(){
         var xrR_CCM_J1 = new XMLHttpRequest();
         var urlR_CCM_J1 = "saveNewTextR_CCM_J1.php";
         var textR_CCM_J1 = document.getElementById("R_CCM_J1").innerHTML;
         var varsR_CCM_J1 = "newTextR_CCM_J1="+textR_CCM_J1;
         
         xrR_CCM_J1.open("POST", urlR_CCM_J1, true);
         xrR_CCM_J1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J1.send(varsR_CCM_J1);
     }
     
  </script>
  
  <script>
     function myFunctionR_CCM_J2(){
         var xrR_CCM_J2 = new XMLHttpRequest();
         var urlR_CCM_J2 = "saveNewTextR_CCM_J2.php";
         var textR_CCM_J2 = document.getElementById("R_CCM_J2").innerHTML;
         var varsR_CCM_J2 = "newTextR_CCM_J2="+textR_CCM_J2;
         
         xrR_CCM_J2.open("POST", urlR_CCM_J2, true);
         xrR_CCM_J2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J2.send(varsR_CCM_J2);
     }
     
  </script>  
  
   <script>
     function myFunctionR_CCM_J3(){
         var xrR_CCM_J3 = new XMLHttpRequest();
         var urlR_CCM_J3 = "saveNewTextR_CCM_J3.php";
         var textR_CCM_J3 = document.getElementById("R_CCM_J3").innerHTML;
         var varsR_CCM_J3 = "newTextR_CCM_J3="+textR_CCM_J3;
         
         xrR_CCM_J3.open("POST", urlR_CCM_J3, true);
         xrR_CCM_J3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J3.send(varsR_CCM_J3);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_J4(){
         var xrR_CCM_J4 = new XMLHttpRequest();
         var urlR_CCM_J4 = "saveNewTextR_CCM_J4.php";
         var textR_CCM_J4 = document.getElementById("R_CCM_J4").innerHTML;
         var varsR_CCM_J4 = "newTextR_CCM_J4="+textR_CCM_J4;
         
         xrR_CCM_J4.open("POST", urlR_CCM_J4, true);
         xrR_CCM_J4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J4.send(varsR_CCM_J4);
     }
     
  </script>
  
  <script>
     function myFunctionR_CCM_J5(){
         var xrR_CCM_J5 = new XMLHttpRequest();
         var urlR_CCM_J5 = "saveNewTextR_CCM_J5.php";
         var textR_CCM_J5 = document.getElementById("R_CCM_J5").innerHTML;
         var varsR_CCM_J5 = "newTextR_CCM_J5="+textR_CCM_J5;
         
         xrR_CCM_J5.open("POST", urlR_CCM_J5, true);
         xrR_CCM_J5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J5.send(varsR_CCM_J5);
     }
     
  </script>  
  
   <script>
     function myFunctionR_CCM_J6(){
         var xrR_CCM_J6 = new XMLHttpRequest();
         var urlR_CCM_J6 = "saveNewTextR_CCM_J6.php";
         var textR_CCM_J6 = document.getElementById("R_CCM_J6").innerHTML;
         var varsR_CCM_J6 = "newTextR_CCM_J6="+textR_CCM_J6;
         
         xrR_CCM_J6.open("POST", urlR_CCM_J6, true);
         xrR_CCM_J6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J6.send(varsR_CCM_J6);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_J7(){
         var xrR_CCM_J7 = new XMLHttpRequest();
         var urlR_CCM_J7 = "saveNewTextR_CCM_J7.php";
         var textR_CCM_J7 = document.getElementById("R_CCM_J7").innerHTML;
         var varsR_CCM_J7 = "newTextR_CCM_J7="+textR_CCM_J7;
         
         xrR_CCM_J7.open("POST", urlR_CCM_J7, true);
         xrR_CCM_J7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J7.send(varsR_CCM_J7);
     }
     
  </script> 
  
   <script>
     function myFunctionR_CCM_J8(){
         var xrR_CCM_J8 = new XMLHttpRequest();
         var urlR_CCM_J8 = "saveNewTextR_CCM_J8.php";
         var textR_CCM_J8 = document.getElementById("R_CCM_J8").innerHTML;
         var varsR_CCM_J8 = "newTextR_CCM_J8="+textR_CCM_J8;
         
         xrR_CCM_J8.open("POST", urlR_CCM_J8, true);
         xrR_CCM_J8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J8.send(varsR_CCM_J8);
     }
     
  </script> 
  
  <script>
     function myFunctionR_CCM_J9(){
         var xrR_CCM_J9 = new XMLHttpRequest();
         var urlR_CCM_J9 = "saveNewTextR_CCM_J9.php";
         var textR_CCM_J9 = document.getElementById("R_CCM_J9").innerHTML;
         var varsR_CCM_J9 = "newTextR_CCM_J9="+textR_CCM_J9;
         
         xrR_CCM_J9.open("POST", urlR_CCM_J9, true);
         xrR_CCM_J9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_CCM_J9.send(varsR_CCM_J9);
     }
     
  </script> 









</head>

 
<body id="ht_ml" style="visibility: hidden; color: #fff; text-overflow: ellipsis; white-space: nowrap;">

 	<div class="fullscreen-video-wrap" >
    <style>
	body{
	background:url(anigif_marinha.gif) no-repeat center center fixed; 
	  background-size: 2000px 1200px ;
	
	}
	
	@media only screen and (max-width: 1366px) {
    body {
        zoom: 80%;
    }
}
	
	</style>
</div>



 
 <form name="form1" id="id" method="POST" action="<?php echo $editFormAction; ?>">
 <div id="para1" style="visibility: visible; border: 3px solid #234769;
     background-color: #234769; text-overflow: ellipsis; white-space: nowrap;" class="example1" >
     
      <p id="R_CCM_A1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_A1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_A1.txt"); ?> </p>
                     <br />
     
   <p>
      <input type="radio" name="genero_ccm" value="<?php include("myTextR_CCM_A2.txt") ?>" id="genero_ccm_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_A2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_A2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_A2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="genero_ccm" value="<?php include("myTextR_CCM_A3.txt") ?>" id="genero_ccm_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_A3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_A3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_A3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="genero_ccm" value="<?php include("myTextR_CCM_A4.txt") ?>" id="genero_ccm_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_A4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_A4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_A4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   </p>  </div>
   
    <div id="para2" style=" border: 3px solid #234769; background-color: #234769; margin-top: -65px;" class="example2" >
     <p id="R_CCM_B1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_B1.txt"); ?> </p>
                     <br />
    
   <p>
      <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B2.txt") ?>" id="idade_ccm_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B3.txt") ?>" id="idade_ccm_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B4.txt") ?>" id="idade_ccm_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B5.txt") ?>" id="idade_ccm_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B6.txt") ?>" id="idade_ccm_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B7.txt") ?>" id="idade_ccm_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B8.txt") ?>" id="idade_ccm_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B8"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B8.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B9.txt") ?>" id="idade_ccm_7" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B9"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B9()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B9.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B10.txt") ?>" id="idade_ccm_8" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B10"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B10()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B10.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B11.txt") ?>" id="idade_ccm_9" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B11"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B11()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B11.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B12.txt") ?>" id="idade_ccm_10" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B12"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B12()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B12.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B13.txt") ?>" id="idade_ccm_11" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B13"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B13()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B13.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B14.txt") ?>" id="idade_ccm_12" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B14"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B14()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B14.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B15.txt") ?>" id="idade_ccm_13" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B15"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B15()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B15.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="idade_ccm" value="<?php include("myTextR_CCM_B16.txt") ?>" id="idade_ccm_14" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_B16"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_B16()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_B16.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <br>
   </p></div>
   <div id="para3" style=" border: 3px solid #234769;
     background-color: #234769; margin-top: 300px;" class="example3" >
       <p id="R_CCM_C1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_C1.txt"); ?> </p>
                     <br />
     
   <p>
     <input type="radio" name="estado_civil_ccm" value="<?php include("myTextR_CCM_C2.txt") ?>" id="estado_civil_ccm_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_C2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_C2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="estado_civil_ccm" value="<?php include("myTextR_CCM_C3.txt") ?>" id="estado_civil_ccm_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_C3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_C3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="estado_civil_ccm" value="<?php include("myTextR_CCM_C4.txt") ?>" id="estado_civil_ccm_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_C4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_C4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="estado_civil_ccm" value="<?php include("myTextR_CCM_C5.txt") ?>" id="estado_civil_ccm_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_C5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_C5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="estado_civil_ccm" value="<?php include("myTextR_CCM_C6.txt") ?>" id="estado_civil_ccm_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_C6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_C6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="estado_civil_ccm" value="<?php include("myTextR_CCM_C7.txt") ?>" id="estado_civil_ccm_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_C7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_C7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
       <input type="radio" name="estado_civil_ccm" value="<?php include("myTextR_CCM_C8.txt") ?>" id="estado_civil_ccm_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_C8"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_C8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_C8.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   </p></div>
   
   <div id="para4" style=" border: 3px solid #234769;
     background-color: #234769; margin-top: 50px;" class="example4" >
      <p id="R_CCM_D1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_D1.txt"); ?> </p>
                     <br />
     
   <p>
      <input type="radio" name="escolaridade_ccm" value="<?php include("myTextR_CCM_D2.txt") ?>" id="escolaridade_ccm_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_D2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_D2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="escolaridade_ccm" value="<?php include("myTextR_CCM_D3.txt") ?>" id="escolaridade_ccm_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_D3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_D3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="escolaridade_ccm" value="<?php include("myTextR_CCM_D4.txt") ?>" id="escolaridade_ccm_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_D4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_D4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="escolaridade_ccm" value="<?php include("myTextR_CCM_D5.txt") ?>" id="escolaridade_ccm_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_D5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_D5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="escolaridade_ccm" value="<?php include("myTextR_CCM_D6.txt") ?>" id="escolaridade_ccm_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_D6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_D6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="escolaridade_ccm" value="<?php include("myTextR_CCM_D7.txt") ?>" id="escolaridade_ccm_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_D7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_D7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="escolaridade_ccm" value="<?php include("myTextR_CCM_D8.txt") ?>" id="escolaridade_ccm_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_D8"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_D8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_D8.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   </p></div>
   
   <div id="para5" style=" border: 3px solid #234769;
     background-color: #234769; margin-top: 50px;" class="example5" >
      <p id="R_CCM_E1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_E1.txt"); ?> </p>
                     <br />
     
   <p>
    <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E2.txt") ?>" id="situacao_profissional_ccm_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E3.txt") ?>" id="situacao_profissional_ccm_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E4.txt") ?>" id="situacao_profissional_ccm_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E5.txt") ?>" id="situacao_profissional_ccm_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E6.txt") ?>" id="situacao_profissional_ccm_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E7.txt") ?>" id="situacao_profissional_ccm_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E8.txt") ?>" id="situacao_profissional_ccm_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E8"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E8.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E9.txt") ?>" id="situacao_profissional_ccm_7" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E9"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E9()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E9.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E10.txt") ?>" id="situacao_profissional_ccm_8" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E10"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E10()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E10.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="situacao_profissional_ccm" value="<?php include("myTextR_CCM_E11.txt") ?>" id="situacao_profissional_ccm_9" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_E11"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_E11()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_E11.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   </p></div>
   
   <div id="para6" style=" border: 3px solid #234769;
     background-color: #234769; margin-top:300px;" class="example6" >
      <p id="R_CCM_F1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_F1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_F1.txt"); ?> </p>
                     <br />
     
   <p>
     <input type="radio" name="primeira_vez_que_visita_ecultural" value="<?php include("myTextR_CCM_F2.txt") ?>" id="primeira_vez_que_visita_ecultural_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_F2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_F2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_F2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="primeira_vez_que_visita_ecultural" value="<?php include("myTextR_CCM_F3.txt") ?>" id="primeira_vez_que_visita_ecultural_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_F3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_F3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_F3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="primeira_vez_que_visita_ecultural" value="<?php include("myTextR_CCM_F4.txt") ?>" id="primeira_vez_que_visita_ecultural_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_F4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_F4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_F4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   </p></div>
   
   <div id="para7" style=" border: 3px solid #234769; background-color: #234769; margin-top: -300px;" class="example7" >
     <p id="R_CCM_G1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_G1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_G1.txt"); ?> </p>
                     <br />
    
   <p>
      <input type="radio" name="eculturais_visitados" value="<?php include("myTextR_CCM_G2.txt") ?>" id="eculturais_visitados_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_G2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_G2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_G2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="eculturais_visitados" value="<?php include("myTextR_CCM_G3.txt") ?>" id="eculturais_visitados_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_G3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_G3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_G3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="eculturais_visitados" value="<?php include("myTextR_CCM_G4.txt") ?>" id="eculturais_visitados_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_G4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_G4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_G4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="eculturais_visitados" value="<?php include("myTextR_CCM_G5.txt") ?>" id="eculturais_visitados_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_G5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_G5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_G5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="eculturais_visitados" value="<?php include("myTextR_CCM_G6.txt") ?>" id="eculturais_visitados_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_G6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_G6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_G6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="eculturais_visitados" value="<?php include("myTextR_CCM_G7.txt") ?>" id="eculturais_visitados_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_G7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_G7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_G7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     
     
   </p></div>
   
    <div id="para8" style=" border: 3px solid #234769; background-color: #234769; margin-top: 250px;" class="example8" >
     <p id="R_CCM_H1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_H1.txt"); ?> </p>
                     <br />
     
      <p>
                       <input type="radio" name="ultima_vez_que_visitou_eculturais" value="<?php include("myTextR_CCM_H2.txt") ?>" id="ultima_vez_que_visitou_eculturais_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_H2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_H2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                      <input type="radio" name="ultima_vez_que_visitou_eculturais" value="<?php include("myTextR_CCM_H3.txt") ?>" id="ultima_vez_que_visitou_eculturais_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_H3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_H3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                        <input type="radio" name="ultima_vez_que_visitou_eculturais" value="<?php include("myTextR_CCM_H4.txt") ?>" id="ultima_vez_que_visitou_eculturais_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_H4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_H4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                          <input type="radio" name="ultima_vez_que_visitou_eculturais" value="<?php include("myTextR_CCM_H5.txt") ?>" id="ultima_vez_que_visitou_eculturais_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_H5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_H5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                        <input type="radio" name="ultima_vez_que_visitou_eculturais" value="<?php include("myTextR_CCM_H6.txt") ?>" id="ultima_vez_que_visitou_eculturais_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_H6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_H6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                         <input type="radio" name="ultima_vez_que_visitou_eculturais" value="<?php include("myTextR_CCM_H7.txt") ?>" id="ultima_vez_que_visitou_eculturais_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_H7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_H7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                     <input type="radio" name="ultima_vez_que_visitou_eculturais" value="<?php include("myTextR_CCM_H8.txt") ?>" id="ultima_vez_que_visitou_eculturais_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_H8"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_H8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_H8.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
                    
                       
      </p>
   </div>
      <!--
     <label>
       <input type="radio" name="ultima_vez_que_visitou_eculturais" value="7" id="ultima_vez_que_visitou_eculturais_6">
       7</label>
     <br> -->
     
   
   <div id="para9" style=" border: 3px solid #234769;
     background-color: #234769; margin-top: -250px;" class="example9" >
    <p id="R_CCM_I1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_I1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_I1.txt"); ?> </p>
                     <br />
    
   <p>
       <input type="radio" name="como_ficou_a_saber_dos_eculturais" value="<?php include("myTextR_CCM_I2.txt") ?>" id="como_ficou_a_saber_dos_eculturais_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_I2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_I2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_I2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="como_ficou_a_saber_dos_eculturais" value="<?php include("myTextR_CCM_I3.txt") ?>" id="como_ficou_a_saber_dos_eculturais_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_I3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_I3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_I3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="como_ficou_a_saber_dos_eculturais" value="<?php include("myTextR_CCM_I4.txt") ?>" id="como_ficou_a_saber_dos_eculturais_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_I4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_I4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_I4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="como_ficou_a_saber_dos_eculturais" value="<?php include("myTextR_CCM_I5.txt") ?>" id="como_ficou_a_saber_dos_eculturais_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_I5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_I5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_I5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="como_ficou_a_saber_dos_eculturais" value="<?php include("myTextR_CCM_I6.txt") ?>" id="como_ficou_a_saber_dos_eculturais_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_I6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_I6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_I6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   </p></div>
   
   <div id="para10" style=" border: 3px solid #234769;
     background-color: #234769; margin-top: 850px;" class="example10" >
     <p id="R_CCM_J1"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J1()'";} ?> onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">   <?php include("myTextR_CCM_J1.txt"); ?> </p>
                     <br />
    
   <p>
      <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J2.txt") ?>" id="motivos_da_visita_a_ecultural_0" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J2"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J2()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J2.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J3.txt") ?>" id="motivos_da_visita_a_ecultural_1" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J3"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J3()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J3.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
    <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J4.txt") ?>" id="motivos_da_visita_a_ecultural_2" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J4"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J4()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J4.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
      <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J5.txt") ?>" id="motivos_da_visita_a_ecultural_3" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J5"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J5()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J5.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J6.txt") ?>" id="motivos_da_visita_a_ecultural_4" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J6"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J6()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J6.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J7.txt") ?>" id="motivos_da_visita_a_ecultural_5" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J7"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J7()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J7.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J8.txt") ?>" id="motivos_da_visita_a_ecultural_6" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J8"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J8()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J8.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
     <input type="radio" name="motivos_da_visita_a_ecultural" value="<?php include("myTextR_CCM_J9.txt") ?>" id="motivos_da_visita_a_ecultural_7" style="margin-left: 10px; margin-top:-10px;"/>    <label  id="R_CCM_J9"<?php if ( isset($_SESSION['my_session'])) {echo"contenteditable='true' onblur='myFunctionR_CCM_J9()'";} ?> style="margin-top: -25px; margin-left: 30px;" onkeypress="return (this.innerText.length <= 55)" onpaste="return false;" onDrag="return false" onDrop="return false">  <?php include("myTextR_CCM_J9.txt") ?> </label>
                   <br />
                    <br />
                    <br />
                    <br />
   </p></div>
   
   <div id="para11" style=" border: 3px solid #234769;
     background-color: #234769; margin-top: -300px; " class="example11" >
     <p> Deixe aqui a sua sugestão </p>
   <p>
    <label for="sugestoes"></label>
    <textarea name="sugestoes" id="sugestoes_0" style="resize: none; width: 350px;"> </textarea>
	<br />
    <br />
    <br />
    <br />
    <input type="submit" name="button" id="button" value="Enviar" />
    <br />
    <br />
    <br />
    <br />
   </p></div>
   <input type="hidden" name="MM_insert" value="form1">
  
   
 
   
    
 </form>
 
<script src="java_ccm.js"></script>
<script src="java_ccm1.js"></script>
<script src="java_ccm22.js"></script>
<script src="java_ccm3.js"></script>
<script src="java_ccm4.js"></script>

 
</body>
</html>