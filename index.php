<?php 
require_once 'config/config.php'; 

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container mt-4">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
        </div>
    </div>
    <section>
        <div class="container marketing">
            <p>หมวดหมู่ยอดนิยม</p>
            <hr>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-6">
            <!-- col -->
            <div class="col"> <a href="pveget.php" class="text-decoration-none text-inherit">
                    <!-- card -->
                    <div class="card card-product">
                        <div class="card-body text-center py-8">
                            <!-- img -->
                            <img src="img/vgt1.jpg" alt="logo1" class="mb-3">
                            <!-- text -->
                            <div class="text-truncate">ผักและผลไม้</div>
                        </div>
                    </div>
                </a></div>
            <!-- col -->
            <div class="col"> <a href="pmeat.php" class="text-decoration-none text-inherit">
                    <!-- card -->
                    <div class="card card-product">
                        <div class="card-body text-center py-8">
                            <!-- img -->
                            <img src="img/vgt1.jpg" alt="logo1" class="mb-3">
                            <!-- text -->
                            <div class="text-truncate">เนื้อสัตว์แช่แข็ง</div>
                        </div>
                    </div>
                </a></div>
            <!-- col -->
            <div class="col"> <a href="psea.php" class="text-decoration-none text-inherit">
                    <!-- card -->
                    <div class="card card-product">
                        <div class="card-body text-center py-8">
                            <!-- img -->
                            <img src="img/vgt1.jpg" alt="logo1" class="mb-3">
                            <!-- text -->
                            <div class="text-truncate">อาหารทะเลแช่แข็ง</div>
                        </div>
                    </div>
                </a></div>
            <div class="col"> <a href="pdeli.php" class="text-decoration-none text-inherit">
                    <!-- card -->
                    <div class="card card-product">
                        <div class="card-body text-center py-8">
                            <!-- img -->
                            <img src="img/vgt1.jpg" alt="logo1" class="mb-3">
                            <!-- text -->
                            <div class="text-truncate">อาหารสำเร็จรูป</div>
                        </div>
                    </div>
                </a></div>
        </div>
    </section>
    <section class="my-lg-14 my-8 mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">สินค้าแนะนำ</h3>
                <hr>
          </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
          <div class="col">
            <div class="card card-product">
              <div class="card-body">

                <div class="text-center position-relative ">
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger">Sale</span>
                  </div>
                  <a href="#!"> <img src="/img/meat1.jpg" alt="picfood" class="mb-4 img-fluid"></a>

                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>เนื้อสัตว์แช่แข็ง</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">SUPREME BEEF IMPORT RED MEAT FZ
                    450G</a></h2>        

                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">฿140</span> <span class="text-decoration-line-through text-muted">฿170</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> เพิ่ม</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative">
                  <a href="./pages/shop-single.html"><img src="/img/pork.jpeg" alt="picfood" class="mb-4 img-fluid"></a>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>อาหารสำเร็จรูป</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">ซีพี ขาหมูและหมูสามชั้นคูโรบูตะในน้ำพะโล้แช่แข็ง 530 กรัม</a></h2>

                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">฿130</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> เพิ่ม</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img src="img/fish1.jpeg" alt="picfood" class="mb-3 img-fluid"></a>
  
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>อาหารทะเลแช่แข็ง</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">ท็อปส์เนื้อปลากะพงขาวไร้ก้างหั่นชิ้นแช่แข็ง 250กรัม</a></h2>
   
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">฿100</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> เพิ่ม</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img src="img/meat3.jpg" alt="picfood" class="mb-3 img-fluid"></a>
 
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger">Hot</span>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>อาหารสำเร็จรูป</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">เอโร่ ไก่นิวออร์ลีนส์ปีกกลางแช่แข็ง 1000 กรัม</a></h2>

                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$3</span> <span class="text-decoration-line-through text-muted">$5</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> เพิ่ม</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img src="img/food1.jpeg" alt="picfood" class="mb-3 img-fluid"></a>
 
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>อาหารสำเร็จรูป</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">เอโร่ ขนมครกญี่ปุ่นไส้ปลาหมึกสายแช่แข็ง 20 กรัม </a></h2>

                <div class="d-flex justify-content-between mt-4">
                  <div><span class="text-dark">$13</span> <span class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> เพิ่ม</a></div>
                </div>
              </div>
            </div>
          </div>
          
    </section>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">62160036</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"></a></li>
            <li class="list-inline-item"><a href="#"></a></li>
            <li class="list-inline-item"><a href="#"></a></li>
        </ul>
    </footer>

    <?php require_once 'includes/footer.php';  ?>