<!DOCTYPE HTML>
<html>
<head>
  <script>
     function myFunctionR_AVG_QUEST1(){
         var xrR_AVG_QUEST1 = new XMLHttpRequest();
         var urlR_AVG_QUEST1 = "saveNewTextR_AVG_QUEST1.php";
         var textR_AVG_QUEST1 = document.getElementById("R_AVG_QUEST1").innerHTML;
         var varsR_AVG_QUEST1 = "newTextR_AVG_QUEST1="+textR_AVG_QUEST1;
         
         xrR_AVG_QUEST1.open("POST", urlR_AVG_QUEST1, true);
         xrR_AVG_QUEST1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xrR_AVG_QUEST1.send(varsR_AVG_QUEST1);
     }
     
  </script> 
</head>
<body>

<h1>HELLO WORLD!</h1>

<div id="R_AVG_QUEST1" contenteditable="true" onblur="myFunctionR_AVG_QUEST1()">

<?php include("myTextR_AVG_QUEST1.txt"); ?>

</div>



</body>



</html>



