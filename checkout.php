<?php



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
		<div id="co"><h2>checkout</h2></div>
      <table id="checkouttable">
        <thead>
          <td>Image</td>
          <td>Game</td>
          <td>Description</td>
          <td>total</td>
        </thead>
        <tr>
          <td><img src="images\game_covers\HZD.jpg"></td>
          <td>horizon zero dawn</td>
          <td>Horizon - Zero Dawn is an exciting new action role playing game developed by Guerrilla Games, the makers of the famous Killzone series.</td>
          <td>€64,98</td>
        </tr>
        <tr>
          <td><img src="images\game_covers\SBFII.jpg"></td>
          <td>Star Wars - Battlefront II</td>
          <td>Embark on rich and vibrant Star Wars multiplayer battles from all three eras: prequel, classic and new trilogy.
              Customize your heroes, starfighters or soldiers, each with unique skills that you can use during the battle.
          </td>
          <td>€64,98</td>
        </tr>
          <tr>
              <td><img src="images\game_covers\terraria.jpg"></td>
              <td>terraria</td>
              <td>Dig, fight, discover, build! Nothing is impossible in this action-packed adventure game. The world is your canvas and the earth itself is your paint.
                  Grab your tools and go for it! Make weapons to fight enemies from different environments.
              </td>
              <td>€10,00</td>
          </tr>
        <tfoot>
          <tr>
            <td colspan="4">€139,96</td>
          </tr>
        </tfoot>
      </table>
      <div id="checkout">
          <div id="fix">is this alright?</div>
          <div id="buy">
            <a href="index.php">YES</a>
          </div>
          <div id="back" >
              <a href="games.php">no</a>
          </div>
      </div>
		<?php include 'inc/footer.php';?>
  </body>
</html>
