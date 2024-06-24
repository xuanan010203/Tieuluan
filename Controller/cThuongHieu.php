<?php 
include_once("Model/mThuongHieu.php");
class controlThuongHieu{
    public function getAllThuongHieu(){
        $p = new modelThuongHieu();
        $tbl = $p->selectAllThuongHieu();
        if($r= mysqli_fetch_assoc($tbl)){
            return $tbl;
        }else {
            return 0;
        }
        
    }
}
?>