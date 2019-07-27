<main>
    <div id="couch"></div>
<h2>JavaJam Gear</h2>
<p>JavaJam gear not only looks good, it's good to your wallet, too.</p>
<p>Get a 10% discount when you wear a JavaJam shirt or bring in your JavaJam mug!</p>
<?php
$pro1 = 0;
foreach ($records as $row) {
          echo '<div>';
           echo '<div><img src="'.$row->Product_Image_URL.'"></div>';
           echo '<div><p>'.$row->Description.'</p>';
           echo '<form method="post" action="cart/addCart">';
           echo '<input type="hidden" name="desc" id="desc" value="'.$row->Name.'">';
           echo '<input type="hidden" name="cost" id="cost" value="'.$row->price.'">';
           echo '<input type="submit" name = "submit" value ="Add to Cart">';
           $pro1 = $pro1 + 1;
           echo '</form>';
           echo '</div>';
           echo '</div>';
}
?>
</main>
