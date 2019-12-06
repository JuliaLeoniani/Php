<?php 
function mostrarAlerta(){
    
			//session_start();
			 if(isset($_SESSION["success"])){
                 echo "<div class='success success-tipo'>";
                 echo $_SESSION["success"];
                 echo '</div>';
                 unset($_SESSION["success"]);
             }
            }
?>