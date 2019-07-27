<main>
	<div id="guitar"></div>
	<h2>Music at JavaJam</h2>
	<p>The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some music you won&#39;t want to miss!</p>
	<?php
	foreach ($records as $row) {
		echo "<div>";
		echo "<h4>"; echo $row->month; echo "</h4>";
		echo"<td>";?><img src="<?php echo $row->musician_image_URL;?>" height="80" width="80"><?php echo "</td>";
		echo"<td>"; echo $row->description;echo"</td>";
		echo"</div>";
	}
	?>
</main>
