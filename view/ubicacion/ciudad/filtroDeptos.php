<?php
echo "<option>"."Seleccione..."."</option>";
while($dep= mysqli_fetch_assoc($deptos)){
                echo "<option value='".$dep['dep_id']."'>".$dep['dep_descripcion']."</option>";
            }
            
            ?>