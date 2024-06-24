<?php 
include_once("Controller/cThuongHieu.php");
$p = new controlThuongHieu();
$kq = $p->getAllThuongHieu();
if($kq){
    while($r = mysqli_fetch_assoc($kq)){
        echo '<a href="?th='.$r["idtype"].'" class="nav-item nav-link">'.$r["nametype"].'</a>';
    }
}
?>