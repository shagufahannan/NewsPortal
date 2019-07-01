<?php 
if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/login/index.php/login");
    }
?>
<br/>
<div class = "w3-container">
<?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
?>
<div id="main">
<div id="registration" class = "w3-container w3-center">
<h2> Sign Up</h2>
<hr/>
<?php
echo form_open('Registration/register_new_user');


echo form_label('Create Username ');
echo"<br/>";
echo form_input('username');
echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
echo"<br/>";
echo form_label('Email ');
echo"<br/>";
$data = array(
'type' => 'email',
'name' => 'email_value'
);
echo form_input($data);
echo"<br/>";

echo form_label('Phone ');
echo"<br/>";
$data1 = array(
'type' => 'text',
'name' => 'phone_value'
);
echo form_input($data1);
echo"<br/>";

echo"<br/>";
echo form_label('Password ');
echo"<br/>";
echo form_password('password');
echo"<br/>";
echo"<br/>";
echo '<input type="submit" class="w3-btn w3-blue"  value=" Sign Up " name="submit"/>';//form_submit('submit', 'Sign Up');
echo form_close();
?>
<!--a href="< ?php echo base_url() ?> ">For Login Click Here</a-->

</div>
</div>
</div>