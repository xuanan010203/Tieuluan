<?php 
include_once("Model/mSanPham.php");
class controlSanPham{
    public function getAllSanPham(){
        $p = new modelSanPham();
        $tbl = $p->selectAllSanPham();
        if($r= mysqli_fetch_assoc($tbl)){
            return $tbl;
        }else {
            return 0;
        }
    }

    public function getAllSanPhamByName($ten){
        $p = new modelSanPham();
        $tbl = $p->selectAllSanPhamByName($ten);
        if(mysqli_num_rows($tbl)>0){
            return $tbl;
        }else{ 
            return false;
        }


    }
    public function getAllSanPhamByType($th){
        $p = new modelSanPham();
        $tbl = $p->selectAllSanPhamByType($th);
        if(mysqli_num_rows($tbl)>0){
            return $tbl;
        }else{ 
            return false;
        }


    }
}
?>