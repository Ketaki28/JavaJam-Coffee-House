<main>
<div>
    <div class="error"><?php echo $this->session->flashdata('message'); ?></div>
      <?php  echo form_open('placeyourorder/placeorder');?>
        <div align="center">
          <strong>Shopping cart</strong>
      <?php
      echo '<table class ="cartTable">';
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
    </div>
      <?php $data_fieldset = array( 'id' => 'customer_info', 'class' => 'customer_info' );
      echo form_fieldset('Fill Details', $data_fieldset);?>
      <?php echo "<div>"; ?>
        <?php echo form_label('Name :'); ?>
        <?php echo form_input(array('id' => 'Name', 'name' => 'Name', 'placeholder'=>'Enter your name')); ?>
        <?php echo "</div>"; ?>

        <?php echo "<div>"; ?>
          <?php echo form_label('Email :'); ?>
          <?php echo form_input(array('id' => 'Email', 'name' => 'Email','placeholder'=>'Enter your email')); ?>
          <?php echo "</div>"; ?>

          <?php echo "<div>"; ?>
            <?php echo form_label('Address :'); ?>
            <?php echo form_input(array('id' => 'Address', 'name' => 'Address','placeholder'=>'Enter your address')); ?>
            <?php echo "</div>"; ?>

            <?php echo "<div>"; ?>
              <?php echo form_label('City :'); ?>
              <?php echo form_input(array('id' => 'City', 'name' => 'City','placeholder'=>'Enter your city')); ?>
              <?php echo "</div>"; ?>

              <?php echo "<div>"; ?>
                <?php echo "<div>"; ?>  <?php echo form_label('State :'); ?> <?php echo "</div>"; ?>
                <?php echo "<div>"; ?>  <?php echo form_input(array('id' => 'State', 'name' => 'State','placeholder'=>'Enter your state')); ?> <?php echo "</div>"; ?>
                <?php echo "<div>"; ?>  <?php echo form_label('Zip :'); ?> <?php echo "</div>"; ?>
                <?php echo "<div>"; ?>  <?php echo form_input(array('id' => 'Zip', 'name' => 'Zip','placeholder'=>'Enter your zip')); ?> <?php echo "</div>"; ?>
                <?php echo "</div>"; ?>

                <?php echo "<div>"; ?>
                  <?php echo form_label('CreditCard :'); ?>
                  <?php echo form_input(array('id' => 'CreditCard', 'name' => 'CreditCard','placeholder'=>'Enter your CreditCard number')); ?>
                  <?php echo "</div>"; ?>

                  <?php echo "<div>"; ?>
                    <?php echo "<div>"; ?>  <?php echo form_label('Expry month:'); ?> <?php echo "</div>"; ?>
                    <?php echo "<div>"; ?>  <?php echo form_input(array('id' => 'ExpMonth', 'name' => 'ExpMonth','placeholder'=>'Enter your expiry month')); ?> <?php echo "</div>"; ?>
                    <?php echo "<div>"; ?>  <?php echo form_label('Expiry year:'); ?> <?php echo "</div>"; ?>
                    <?php echo "<div>"; ?>  <?php echo form_input(array('id' => 'ExpYear', 'name' => 'ExpYear','placeholder'=>'Enter your expiry year')); ?> <?php echo "</div>"; ?>
                    <?php echo "</div>"; ?>

                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Order Now','name' => 'submit1' )); ?>
                    <?php  echo form_fieldset_close();?>
                  </form>

                </div>
              </main>
