<!DOCTYPE HTML>
<html>

<head>
<title> Greek Life Database </title>
<style>
        body{
        background-color: maroon;
        color:  #d4af37;
        }

        h1{
                text-align: center;
        }

        aside{
                background-color: green;
        }

        ul{
                font-weight: 900;
        }

        ul li{
                color: white;
                font-weight: 700;
        }

        .container{
                display: inline-block;
        }

        .center{        
        display: inline;
        text-align:center;
        margin:auto;
        
        }

        .boxText{
        color: black;
        text-align:center;
        background-color: #ffcc66;
        width: 600px;
        border: 10px solid #d4af37;
        padding: 40px;
        margin-top:60px;
        margin-right: auto;
        margin-left:auto;
        }
        .pSubBox{
                text-align:left;

                }

        img {
   display: block;
  margin-left: auto;
  margin-right: auto;
        }

        .formSide{
                padding-top:20px;
                padding-left:42%;
        }

</style>
</head>

<body>

<h1> SALISBURY UNIVERSITY GREEK LIFE </h1>
<img  src ="https://cosida.com/common/controls/image_handler.aspx?thumb_id=0&image_path=/images/2019/2/21/SalisburyLogo.png" alt = "Salisbury University Sammy the Seagull" style="width:200px;height:200px;">

<div style="text-align:center;">
<?php include 'menu.php';
$a = 0;
$s =0;

?>
<br>
</div>

<div class="boxText">
<h3> Description of Website </h3>
<div class="pSubBox">
<p>This section is dedicated to explaining our website. </p>
<p> More details will go here as we further understand HTML,CSS, and PHP. Until then we are keeping this work very limited.</p>
</div>
</div>

<div class="formSide">
        <form  action="COSC386/WillJ/eventSearch.php" method="post">
        <input type="text" name = "orgStudent" placeHolder="Enter an Organization Name">
        <input type ="submit" value="Search">
        </form>

        <form action="COSC386/WillJ/eventSearch.php" method="post">
        <input type = "text" name="eventOrg" placeholder = "Enter an Organization Name">
        <input type="submit" value="Search">
        </form>
</div>

<div class="center">
<h2> Lists Of Councils At Salisbury </h2>
<form action="" method="POST">

<?php
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');
$query = "select name from Councils";
$r = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($r)){
        #       echo"<input type='radio' name='councilSelect' value=" "> ";
                #echo"<input type='radio' id = " $a . "name='councilSelect' value=". $a . ">";
        #echo"<label for=" . $a . ">" . $row . "</label>";
                $a = $a +1;
                echo "<input type='radio' name='councilSelect' id=" . $a . " value=" . $a . ">";
                echo"<label for=" . $a . ">" . $row['name'] . "</label>";
                echo"<br>";
}
echo"<input type='submit' value='Select Council'>";
$s = $_POST["councilSelect"];
?>
</form>

<?php
if($s==0){
        #echo"NOT SELECTED";
}else{
        $query= "select councilName from Organizations";

        $ra = mysqli_query($connect,$query);
                for($i = 0; $i <= $a; $i++){
                        $row = mysqli_fetch_array($ra);
                        if($s == $i)
                                $answer = $row["councilName"];
                        }

        echo"<br>";
        echo "<h2 style='color:white;'>You have selected " . $answer . "</h2>";
        echo "<h4 style='color:white;'> Organizations Apart of This Fraternity/Sorority </h4>";

        $newQuery ="select * from Organizations where councilName = '$answer'";
        $ro = mysqli_query($connect,$newQuery);
        echo "<table border=1 style='margin:auto;'>";
        echo "<th> Name </th>";
        echo "<th> Type </th>";
                while($row = mysqli_fetch_array($ro)){
                        echo"<tr>";
                        echo "<td style='color:white;'>  <a href='https://lamp.salisbury.edu/~wjenkins2/orgDisplay.php?varname=". $row['name'] . "'>" . $row['name'] . "</td>"; #displays all organizations of that council
                        echo "<td style='color:white;'>" . $row['type'] . "</td>";

                        echo "</tr>";
                                                                   }
        echo "</table>";
}
?>
</div>

</body>
</html>