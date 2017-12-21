<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game_world";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Game world. - Enjoy The Greatest games">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Game World.</title>
	</head>
	<body>
			<?php include 'inc/menu.php';?>
			<div id="platforms">
			<h2><a onclick=
			"document.getElementById('Playstation').style.display='block';
			 document.getElementById('nintendo_switch').style.display='none';
			 document.getElementById('Pc').style.display='none';
			">playstation</a></h2>
			<h2><a onclick=
			"document.getElementById('Playstation').style.display='none';
			 document.getElementById('nintendo_switch').style.display='block';
			 document.getElementById('Pc').style.display='none';
			">nintendo switch</a></h2>
			<h2><a onclick=
			"document.getElementById('Playstation').style.display='none';
			 document.getElementById('nintendo_switch').style.display='none';
			 document.getElementById('Pc').style.display='block';
			">PC</a></h2>
			</div>
			<div id="Playstation">
				<div class="games">
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM ps4 WHERE id = 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM ps4 WHERE id = 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM ps4 WHERE id = 2 ";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM ps4 WHERE id = 2 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM ps4 WHERE id = 3";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM ps4 WHERE id = 3 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM ps4 WHERE id = 4";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM ps4 WHERE id = 4 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM ps4 WHERE id = 5";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM ps4 WHERE id = 5 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM ps4 WHERE id = 6";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM ps4 WHERE id = 6 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                </div>
            </div>
            <div id="nintendo_switch">
                <div class="games">
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM nintendo_switch WHERE id = 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM nintendo_switch WHERE id = 1 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM nintendo_switch WHERE id = 2";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM nintendo_switch WHERE id = 2 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM nintendo_switch WHERE id = 3";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM nintendo_switch WHERE id = 3 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM nintendo_switch WHERE id = 4";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;" >
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM nintendo_switch WHERE id = 4 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM nintendo_switch WHERE id = 5";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM nintendo_switch WHERE id = 5 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM nintendo_switch WHERE id = 6";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM nintendo_switch WHERE id = 6 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                </div>
            </div>
            <div id="Pc">
                <div class="games">
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM pc WHERE id = 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM pc WHERE id = 1 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM pc WHERE id = 2";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM pc WHERE id = 2 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM pc WHERE id = 3";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM pc WHERE id = 3 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM pc WHERE id = 4";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM pc WHERE id = 4 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM pc WHERE id = 5";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM pc WHERE id = 5 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
                    <div class="game_item">
                        <img src=<?php $sql = "SELECT picture FROM pc WHERE id = 6 ";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row = $result->fetch_assoc()){
                                echo $row['picture'];
                            }
                        }
                        else{
                            echo "0 results";
                        }
                        ?> style="width:160px;height:200px;margin-left:19px;">
                        <div class="BUYbutton"><a href="checkout.php">BUY</a></div>
                        <h4><?php $sql = "SELECT gamename FROM pc WHERE id = 6 ";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0){
                                while ($row = $result->fetch_assoc()){
                                    echo $row['gamename'];
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            ?></h4>
                    </div>
		    </div>
			</div>

		<?php include 'inc/footer.php';?>
  </body>
</html>
