<!DOCTYPE html>
<head>
    <title>3</title>
    <script src="https://vk.com/js/api/openapi.js?160" type="text/javascript"></script>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
  <script>

  	var inputtext
function a_value()
{
inputtext = document.getElementById('msg').value ;
alert(inputtext);
}

  function draw() {
    A = parseInt(document.getElementById('A').value, 10);
    B = parseInt(document.getElementById('B').value, 10);
    C = parseInt(document.getElementById('C').value, 10);
    if(((A + B) <= C) || ((C + B) <= A) || ((A + C) <= B))
    {alert("Сумма двух сторон меньше или равна третьей, это не треугольник"); return;}
P = (A + B + C)/2 ;
S = Math.sqrt(P*(P-A)*(P-B)*(P-C));
H = S*2/A ;
X = Math.sqrt((Math.pow(B, 2)-Math.pow(H, 2)));

// A = A + 100;
// H = H + 100;
// X = X + 100;

//alert(A+","+ H+","+ X+","+ A+","+ B+","+ C);
  var canvas = document.getElementById('canvas');
  if (canvas.getContext){
    var ctx = canvas.getContext('2d');
ctx.clearRect(0,0,300,300);
    ctx.beginPath();
    ctx.moveTo(0,0);
    ctx.lineTo(A,0);
    ctx.lineTo(X,H);
    ctx.lineTo(0,0);
    ctx.stroke();
  }
}
 function validate(evt) {
         var theEvent = evt || window.event;
         var key = theEvent.keyCode || theEvent.which;
         key = String.fromCharCode( key );
         var regex = /[0-9]|\./;
         if( !regex.test(key) ) {
           theEvent.returnValue = false;
           if(theEvent.preventDefault) theEvent.preventDefault();
         }
       }

  </script>
<!-- <style type="text/css">
       canvas { border: 1px solid black; }
     </style> -->
 </head>
 <body> <!--onload="draw();" -->
<?php 
         echo "tst"; 
         ?>
   <details>
   <summary>phpinfo</summary>
   <p><iframe src="index1.php" width="966" height="200">
   </iframe></p>
  </details>

<br>
<center><canvas id="canvas" width="300" height="300"></canvas>
  <br>
<label for="A">первая линия</label>

    <input type="text" id="A" name="A" required
         minlength="1" maxlength="3" size="3" pattern="[0-9]{1,3}"
onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}"
          onkeypress='validate(event)'
ondragstart="return false" onselectstart="return false"
oncontextmenu='return false;'

         />
 <label for="B">вторая линия</label>

    <input type="text" id="B" name="B" required
        minlength="1" maxlength="3" size="3" pattern="[0-9]{1,3}"
onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}"
         onkeypress='validate(event)'
ondragstart="return false" onselectstart="return false"
oncontextmenu='return false;'

        />
        <label for="C">третья линия</label>

           <input type="text" id="C" name="C" required
               minlength="1" maxlength="3" size="3" pattern="[0-9]{1,3}"
        onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}"
                onkeypress='validate(event)'
        ondragstart="return false" onselectstart="return false"
        oncontextmenu='return false;'

               />
       <br>
       <input type="submit" onclick="draw();" value="Нарисовать треугольник">
</center>


<!-- <?php
// $mysqli = new mysqli("************************", "***", "**************", "test");
// if ($mysqli->connect_errno) {
//    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

// if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
//    !$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)")) {
//   echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
//}

//$res = $mysqli->query("SELECT id FROM test");

//echo "Обратный порядок...\n";
//for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
//    $res->data_seek($row_no);
//    $row = $res->fetch_assoc();
//    echo " id = " . $row['id'] . "\n";
//}

//echo "Исходный порядок строк...\n";
//$res->data_seek(0);
//while ($row = $res->fetch_assoc()) {
//    echo " id = " . $row['id'] . "\n";
//}
//?> -->
<input type="text" id="msg" name="msg" />
<input type="button" id="msgbtn" name="msgbtn" onclick="a_value();"/>




<script type="text/javascript">
  VK.init({
    apiId: 6891719
  });
</script>
 </body>
</html>