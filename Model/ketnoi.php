<?php 
class clsKetNoi{
    public function MoKetNoi(){
        return mysqli_connect("localhost","xuanan123","123456","qlap");
}
public function DongKetNoi($con){
    mysqli_close($con);
}
}
?>