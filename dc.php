
<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<title>Distance Converter</title> 
<style media="screen">
center{
margin-top:200px;
}
.div1{
border:2px solid black;
width:600px;

}
p{
background-color:red;
margin-top:-2px;
text-align:center;
color:white;
font-size:40px;
margin-left:-2px;
}
form{
margin-left:20px;
}
label{
font-size:20px;
font-weight:bold;
margin-top:20px;
}
select{
width:300px;
font-size:20px;
padding:5px;
margin-top:10px;
}
#select:hover{
cursor:pointer;
}
//option:hover{
//cursor:pointer;
//}
#amount{
width:280px;
font-size:18px;
padding:7px;
margin-top:20px;
}
#convert{
font-size:22px;
font-width:bold;
width:120px;
border:1px solid blue;
border-radius:5px;
margin-top:20px;
//margin-left:90px;
padding:5px;
}
#convert:hover{
cursor:pointer;
opacity:0.8;
}
h3{
  font-size:25px;

}

</style>
</head>
<body>
<center>
  <div class="div1">
  
  <p>Distance Converter</p>
  <form class="" action="dc.php" method="post">
  <br>
 <lable  Style="font-size:30px;">Select a Conversion Option</lable>
</br>
   <select class="" name="Distance" require>
    <option option selected hidden>choose options </option>
   <option value="Meter to Centimeter">Meter to Centimeter</option>
   <option value="Kilometer to Meter">Kilometer to Meter</option>
   <option value="Mile to Kilometer">Mile to Kilometer</option>
   <option value="Yard to Meter">yard to Meter</option>
   <option value="Meter to yard">Meter to yard</option>
     <option value="yard to foot">yard to foot</option>
     <option value="foot to yard">foot to yard</option>
      <option value="foot to inch">foot to inch</option>
      <option value="inch to foot">inch to foot</option>
      <option value="Numerical mile to Kilometer">Numerical to Kilometer</option>
       <option value="Kilometer to  Numerical mile">Kilometer to  Numerical mile</option>
       <option value="Centemeter to inch">Centemeter to inch</option>
      <option value="inch to Centemeter">inch to Centemeter</option>
  </select>

  <input id="amount" type="number" name="amount" value="" placeholder="Entera value" required>
  <h3>
   <?php
       if(isset($_POST['convert'])){
       $amount=$_POST['amount'];
       $option=$_POST['Distance'];


      if($option=='Meter to Centimeter'){
        $result=$amount*100;
        echo $amount."1 Meter=".$result." Centemeter";
       }
       if($option=='Centimeter to Meter'){
        $result=$amount/100;
        echo $amount."1 centimeter=".$result."Meter";
       }
    }
  ?>
  </h3>
<input id="convert" type="submit" name="convert" value="convert">
  
  </form>
  </br>
</div>
</center>
</body>
</html>
