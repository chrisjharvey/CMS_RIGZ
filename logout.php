<?php
        if(isset($_GET['log']) && ($_GET['log']=='out')){
            
            session_destroy();
           
            header('location:login.php');
        }
          echo "<a class='btn' href='?log=out'>Logout</a>";
  ?>