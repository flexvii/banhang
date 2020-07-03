<?php
    if(isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else{$tham_so="";}
    switch($tham_so)
    {
        case "xuat_san_pham":
            include("chuc_nang/san_pham/xuat.php");
        break;
        case "chi_tiet_san_pham":
            include("chuc_nang/san_pham/chi_tiet_san_pham.php");
        break;
        default:
            echo "trang chủ";
    }
?>
