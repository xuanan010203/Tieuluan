<?php 
include_once("Controller/cSanPham.php");
$p = new controlSanPham();
if(isset($_REQUEST["th"])){
    $kq= $p->getAllSanPhamByType($_REQUEST["th"]);
  }else if(isset($_REQUEST["btnTimKiem"])){
    $kq= $p->getAllSanPhamByName($_REQUEST["btnTuKhoa"]);
  }else{  
    $kq= $p->getAllSanPham();
  }
if($kq){
   
    while($r = mysqli_fetch_assoc($kq)){
        echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/SanPham/'.$r["hinh"].'" >
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">'.$r["nameproduct"].'</h6>
                        <div class="d-flex justify-content-center">
                            <h6>'.$r["giaban"].'</h6><h6 class="text-muted ml-2"><del>'.$r["giagoc"].'</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>';
        
    }
}
?>