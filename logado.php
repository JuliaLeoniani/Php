<?php 
function mostrarLogado(){
    			 if(isset($_SESSION["logado"])){
                 echo "<div class='success success-tipo'>";
                 echo $_SESSION["logado"];
                 echo '</div>';
                 unset($_SESSION["logado"]);
             }
            
            }
            
?>