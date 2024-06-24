<?php 
include_once("ketnoi.php");
class modelSanPham{
    public function selectAllSanPham(){
        $p = new clsKetNoi();
        $con = $p ->MoKetNoi();
        $truyvan = "Select * from product";
        $ketqua= mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $ketqua;

    }
    public function selectAllSanPhamByName($ten){
        $p = new clsKetNoi();
        $con = $p->MoKetNoi();
        $truyvan = "SELECT p.* FROM product p JOIN typepro t on p.idtype=t.idtype where p.nameproduct like N'%$ten%'";
        $tbl = mysqli_query($con, $truyvan);
        $p ->DongKetNoi($con);
        return $tbl;

    }
    public function selectAllSanPhamByType($th){
        $p = new clsKetNoi();
        $con = $p->MoKetNoi();
        $truyvan = "SELECT p.* FROM product p JOIN typepro t on p.idtype=t.idtype where p.idtype = '$th'";
        $tbl = mysqli_query($con, $truyvan);
        $p ->DongKetNoi($con);
        return $tbl;

    }


}
?>