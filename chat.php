<?php
//connect to mysql

session_start();
session_regenerate_id();
include ('db_connect.inc.php');

    $u = $_SESSION['username'];
    $uid = $_SESSION['loginid'];
$con = mysqli_connect("localhost","root","","db_test");

//test connection
if(mysqli_connect_errno()){
echo 'failed to connect to Mysql: '.mysqli_connect_error();

}
include ('db_connect.inc.php');



   //create select query
   $query = "SELECT * FROM shouts ORDER BY id DESC";
   $shouts = mysqli_query($con, $query);
   
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title> Group Chat</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: arial;
            font-size: 16px;
            line-height: 5em;
            background: #f4f4f4;
        }

        #contain {
            background: blue;
            margin: 50px auto;
            overflow: auto;
            width: 60%;
            min-height: 620px;
        }

        header h1 {
            color: #ffffff;
            font-size: 22px;
            padding: 15px 0 10px 10px;
            border-bottom: 2px solid #ffffff;
        }

        #shouts {
            width: 90%;
            background: #f4f4f4;
            height: 400px;
            margin: 30px auto;
            overflow: auto;

        }

        .shout {
            list-style: none;
            padding: 8px;
            border-bottom: 1px #cccccc dotted;
        }

        .shout span {
            color: #aaaaaa;
        }

        #input {
            width: 90%;
            min-height: 80px;
            margin: auto;
            padding: 0;
        }

        #input input[type='text'] {
            height: 25px;
            width: 40%;
            padding: 3px;
            margin-bottom: 20px;
            border: #666666 solid 1px;
        }

        #input .shout-btn {
            padding: 5px;
            margin-bottom: 30px;
            width: 100%;
            margin: 10px auto;
        }

        .error {
            background: red;
            color: #ffffff;
            padding: 5px;
            margin-bottom: 20px;
        }

        @media only screen and (max-width:768px) {
            #input input[type='text'] {
                width: 98%;
            }
        }

    </style>
</head>

<body>
    <a href="comment1.php"><button style="color:red; font-size:30px">RETURN BACK</button></a>
    <div id="contain">
        <header>
            <h1><b>CHAT-boot</b></h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                <li class="shout"><span>
                        <?php echo $row['time']; ?> - </span><b>
                        <?php echo $row['user']; ?>:</b>
                    <?php echo $row['message']; ?>
                </li>

                <?php endwhile; ?>

            </ul>
        </div>
        <div id="input">
            <?php if(isset($_GET['error'])): ?>
            <div class="error">
                <?php echo $_GET['error']; ?>
            </div>
            <?php endif; ?>

            <form method="post" action="chat.php">

                <input type="text" name="user" readonly="readonly" value="<?php echo $u?>">
                <input type="text" name="message" placeholder="type message" />
                <br />
                <input class="shout-btn" type="submit" name="submit" value="send" />
            </form>
        </div>
    </div>

    <?php


//check if form was submitted
if(isset($_POST['submit'])){

 $message = mysqli_real_escape_string($con, $_POST['message']);
 $user = mysqli_real_escape_string($con, $_POST['user']);

//set time zone
date_default_timezone_set('America/New_York');
$time = date('h:i:s a',time());

//validate input

if(!isset($user) || $user == '' || !isset($message) || $message == ''){
    $error = "Please fill in ur name and a message";
	header("Location: chat.php?error".urlencode($error));
	exit();
 }
else{

    $query = "INSERT INTO shouts (user, message, time)
	   VALUES ('$user','$message','$time')";
	   if(!mysqli_query($con, $query)){
	    die('Error: '.mysqli_error($con));
	   }else{
	      //header("Location: chat.php");
		  exit();
	   }
    }


}

?>

</body>

</html>
