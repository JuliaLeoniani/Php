<?php 
session_start();
function mostrarAlerta(){
    			 if(isset($_SESSION["success"])){
                 echo "<div class='success success-tipo'>";
                 echo $_SESSION["success"];
                 echo '</div>';
                 unset($_SESSION["success"]);
             }
            
            }
            
?>