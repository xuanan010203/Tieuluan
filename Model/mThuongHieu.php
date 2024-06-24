<?php 
include_once("ketnoi.php");
class modelThuongHieu{
    public function selectAllThuongHieu(){
        $p = new clsKetNoi();
        $con = $p ->MoKetNoi();
        $truyvan = "Select * from typepro";
        $ketqua= mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $ketqua;

    }
}
?>