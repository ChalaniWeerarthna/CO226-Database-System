<head>
     
    <style>
      


        .box{
            width: 400px;
            height: 500px;
            padding: 50px;
            margin:20px;
            border:solid;
            border-color: black;
        }

    
    </style> 
     
     
     
     
</head>




<div class="box">
<?php
     
    if(isset($_POST['submit'])){

        $num = $_POST['number'];
        $size = $_POST['size'];

        $color=$_POST['colors'];

        if(isset($_POST['extra1'])){
           $extra="* Cap";
        }

        if(isset($_POST['extra2'])){

            $extra="* Wrist Band";

        }

        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $add1 =$_POST['add1'];
        $add2 =$_POST['add2'];
        $add3 =$_POST['add3'];
        $comments=$_POST['comments'];

        echo "<h1>Your Information System</h1><br><br>";
        echo "Thank you, $firstName for your perches from our web site<br> <br>";
        echo "Your item color is :$color & T-Shirt size : $size <br><br>";
        echo "Selected item/items are : <br><br> $extra<br><br>";
        echo "Your items will be sent to :<br><br>";


        echo "<i>$firstName $lastName ,<br>$add1,<br>$add2,<br>$add3 </i><br>";
        echo "Thank you for submitting your comments. We appriciate it. You said:<br>";
        echo "<i>$comments</i> <br>";

        





    }

?>
</div>