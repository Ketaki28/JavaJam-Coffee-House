<main>
<div align="center">

<br/>
<br/>
<strong>Shopping cart</strong>
<br/>
<br/>
<?php
    echo '<table>';
    $total=0;
    echo '<tr class="altcolor" ><th> <b> Description </b></th><th> <b> Quantity </b></th><th> <b> Rate </b></th><th> <b> Price </b></th></tr>';
    foreach ($this->session->all_userdata() as $row) {
      if(isset($row['desc']))
      echo '<tr ><th> <b> '.$row['desc'].' </b></td><td>'.$row['quantity'].'</td><td>'.$row['cost'].'</td><td>'.$row['price'].'</td></tr>';
      $total=$total+$row['price'];
    }
    echo '<tr><td></td><td>Total</td><td>'.$total.'</td>';
    echo '</table>';
?>
<div>
    <div>
      <!-- <a href="gear">Continue Shopping </a> </br>
      <a href="placeyourorder">Place order </a> -->
      <form method="post" action="gear">
            <input type="submit" name="submit" value="Continue Shopping">
        </form>
    </div>
    <div>

        <form method="post" action="placeyourorder">
            <input type="submit" name="Place Order" value="Place Order" >
        </form>
    </div>

    </div>
</div>
</main>
