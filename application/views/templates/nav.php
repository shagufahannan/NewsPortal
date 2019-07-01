
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="<?php echo base_url() ?>index.php/Home" class="w3-bar-item w3-button">HOME</a>
          
    <!--a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a-->
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <?php 
        if (isset($this->session->userdata['logged_in'])) {
          //redirect('/Home/','refresh');
           ?>
           <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i> WELCOME <?php echo $this->session->userdata['logged_in']['username']; ?></a>
           <a href="<?php echo base_url() ?>index.php/MyNews" class="w3-bar-item w3-button"> CREATE NEWS</a>
           <a href="<?php echo base_url() ?>index.php/Login/logout" class="w3-bar-item w3-button"> SIGN OUT</a>
            <!--a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Sign Out</a-->
           <?php     
        }else{
          ?>
          <a href="<?php echo base_url() ?>index.php/Login/index" class="w3-bar-item w3-button">SIGN IN</a>
          <a href="<?php echo base_url() ?>index.php/Registration/index" class="w3-bar-item w3-button">SIGN UP</a>
           
          <?php
        }
      ?>
      <!--a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Sign In</a>
      <a href="#Sign In" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> Sign Up</a-->
      <a href="<?php echo base_url() ?>index.php/Home/about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="<?php echo base_url() ?>index.php/Home/contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<br><br>