<?php
        if(is_null($know[0])){
            if(is_null($know[1])){?>
                <td><p><?php echo "なし";?></p></td></tr>
        <?php}else{?>
                <td><p><?php echo $know[0];?></p></td></tr>
        <?php}
        }else{?>
            <td><p><?php echo $know[0]." ".$know[1];?></p></td></tr>

    <?php}

         ?>
