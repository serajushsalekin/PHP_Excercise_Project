<?php
	define('TITLE', 'Menu | DemoHustle');
	include 'include/header.php';
  ?>
<div id="menu-items">
	<h1>Our Menu Items</h1>
	<p><em>Click any menu item to learn more</em></p>
	<hr>

	<ul>
		<?php 
			foreach ($menu_items as $itemName => $itemDetail) { ?>
				<li><a href="dish.php?item=<?php echo $itemName; ?>"> <?php echo $itemDetail["title"];  ?></a><sup> $</sup><?php echo $itemDetail["price"]; ?></li>
			
		<?php } ?>
	</ul>
</div>


 <?php include 'include/footer.php';  ?>