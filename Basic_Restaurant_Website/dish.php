<?php
	define('TITLE', 'Menu Items | DemoHustle');
	include 'include/header.php';
	function strip_baad_chars($input)
	{
		$output = preg_replace("/[^a-zA-Z0-9_-]/","",$input);
		return $output;
	}

	if (isset($_GET['item'])) {
		$menu_item = strip_baad_chars($_GET['item']);
		$dish = $menu_items["$menu_item"];
	}

	function suggestedTip($price, $tip) {
		$totalTip = $price * $tip;
		return $totalTip;
		//echo money_format("%.2n", $totalTip);
	}

  ?>

  <hr>

  <div id="dish">
  	<h1><?php echo $dish["title"]; ?> <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h1>
  	<p><?php echo $dish['blurb']; ?></p>
  	<br>
  	<p><strong>Suggested Beverage : <?php echo $dish['drink']; ?></strong></p>
  	<p><em>Suggested tip: <sup>$</sup><?php 
  					$tip =suggestedTip($dish["price"], 0.20);
  					echo "$tip";
  	 ?></em></p>
		
  </div>
  <hr>
  <a href="menu.php" class="button previous">&laquo; Back to Menu</a>



<?php include 'include/footer.php';  ?>