<?php
    include("ket_noi.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web bán hàng</title>
        <link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
    </head>
    <body>
        <center>
            <table width="990px">
                <tr>
                    <td colspan="3"><img src="hinh_anh/so32.JPG" width="300px" height="300px" ></td>
                </tr>
                <tr>
                    <td colspan="3" height="50px" >
                        <?php
                            include("chuc_nang/menu_ngang/menu_ngang.php");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td width="170px" valign="top" >
                    <?php
                        include("chuc_nang/menu_doc/menu_doc.php");
                    ?>
                    </td>
                    <td width="650px" valign="top" >
                        <?php
                            include("chuc_nang/dieu_huong.php");
                        ?>
                    </td>
                    <td width="170px" valign="top" >Cột phải</td>
                </tr>
                <tr>
                    <td colspan="3">Footer</td>
                </tr>
            </table>
        </center>
    </body>
</html>
