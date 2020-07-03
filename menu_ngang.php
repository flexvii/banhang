<?php
    $tv="select * from menu_ngang order by id";
    $tv_1=mysql_query($tv);
    echo "<div class='menu_ngang' >";
    while($tv_2=mysql_fetch_array($tv_1))
    {
        echo "<a href=''>";
            echo $tv_2['ten'];
        echo "</a>";
    }
    echo "</div>";
?>
