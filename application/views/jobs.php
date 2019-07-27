<main>
	<h2>Jobs at JavaJam</h2>
	<p>Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk (*).</p>
	<div class="error"><?php echo $this->session->flashdata('message'); ?></div>
  <div id="container">
    <?php  echo form_open('jobs/apply');
    echo form_label('*Name :');
    echo form_input(array('id' => 'myName', 'name' => 'myName'));
    echo form_label('*Email :');
    echo form_input(array('id' => 'myEmail', 'name' => 'myEmail'));
    echo form_label('*Experience :');
    echo form_textarea(array('id' => 'myExperience', 'name' => 'myExperience'));
    echo form_submit(array('id' => 'submit', 'value' => 'Apply Now','name' => 'submit1' ));
    echo form_close(); ?>
  </div>
</main>
