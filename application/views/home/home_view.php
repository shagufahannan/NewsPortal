<?php

if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    // $email = ($this->session->userdata['logged_in']['email']);
} else {
    //header("location: login");
}
?>
<div class="w3-container">
    <h1>NEWS</h1>
    <?php
        $query = $this->Home_model-> getAllNews();
        foreach ($query->result() as $row)
        {
            ?>
            <div class="w3-panel w3-pale-green">
            <h3><?php echo $row->title;  ?></h3>
            <p><?php echo $row->details; ?></p>
            <hr>
          </div>
          <?php 
        }
    ?>
    
</div>