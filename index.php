<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            $title = "Savyata Bhattarai";
            $surname =  10;
            $bool = true;
            echo  $bool?"hello world!":$title.$surname;
        ?>
    </title>
    <script>
        console.log("<?php echo "hy"?>");                                  
    </script>
    <style>
        body{
            background:<?php echo "grey"?>;
            color:<?php echo "white"?>;
        }
    </style>
</head>
<body>

<button style="color: <?php echo "green";?>"> CLick me </button>
<?php 
    $name ="Savyata Bhattarai";
    $word = "Hello world 123 asd";
    echo "the length is : ".strlen($name)."<br/>";
    echo "Total word  is : ".str_word_count($word)."<br/>";
    echo "the reverse is : ".strrev($name)."<br/>";


    define("API_URL","https://example.com");    ///constant declaration
    echo API_URL;

    //it helps to print all data type like array ,object and soon 
    print_r("current port : ".$_SERVER['SERVER_PORT']."<br/>");   //super global variable
    print_r("current server name : ".$_SERVER['SERVER_NAME']."<br/>");   //super global variable
    print_r("current file : ".$_SERVER['PHP_SELF']."<br/>");   //super global variable
    print_r("current http user agent  : ".$_SERVER['HTTP_USER_AGENT']."<br/>");   //super global variable
 
    //class 
    class bike{
        function model(){
            $model_name = "royal enfield";
            echo "Bike Model : ".$model_name;
        }
    }
    //Object
    $obj=new bike();
    $obj->model();
?>

<!-- if else -->
<?php 
$mark = 50;
if($mark>60){
    echo "the student is pass !!"."<br/>";
}
elseif($mark<20){
    echo "the is never ever giving exam !!"."<br/>";
}
else{
    echo "the student is fail !!"."<br/>";
}

?>

<!-- switch case -->
<?php
function getDayofweek($num){
    switch($num){
        case 1:
        return "Sunday !!" ."<br/>";
        break;
        case 2:
        return  "Monday!!"."<br/>";
        break;
        case 3:
        return  "Tuesday !!"."<br/>";
        break;
        case 4:
        return  "wednesday !!" ."<br/>";
        break;
        case 5:
        return  "Thursday!!" ."<br/>";
        break;   
        case 6:
        return "Friday!!" ."<br/>";
        break;
        case 7:
        return  "Saturday!!" ."<br/>";
        break;
        default:
        return "Input is not valid !!" ."<br/>";

    }
}
$day=getDayofweek(4);
echo"The day is :".$day;
?>    
</body>
</html>