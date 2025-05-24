<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sales Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style></style>
</head>
<body>
<?php include("./Header/header.php"); ?>
<div class="container">
      <!-- Carousel -->
    <div class="carousel-container">
      <div class="carousel-inner-custom">
          <div class="carousel-img">
              <img src="./images/sources1.avif" alt="">
              <img src="./images/cources2.jpg" alt="">
            <img src="./images/cources3.png" alt="">
            <img src="./images/cources4.jpg" alt="">
          </div>
    
        </div>
        <!-- Navigation arrows -->
         <span class="arrow-icon-left"><i class="fa-solid fa-arrow-left"></i></span>
         <span class="arrow-icon-right"><i class="fa-solid fa-arrow-right"></i></span>
    </div>
    <div class="container-edit">
      <!-- Features Section -->
      <section class="features">
        <h2>CÁC LOẠI XE NỔI BẬT</h2>
         <div class="features-list">
            <div class="feature-item">
              <h3 class="features-title">Type HR Civic</h3>
              <p class="features-desc">Cá tính mạnh mẽ, năng động</p>
              <img src="./images/cources1.jpg" alt="">
            </div>
             <div class="feature-item">
              <h3 class="features-title">Type HR Civic</h3>
              <p class="features-desc">Cá tính mạnh mẽ, năng động</p>
              <img src="./images/cources1.jpg" alt="">
            </div>
             <div class="feature-item">
              <h3 class="features-title">Type HR Civic</h3>
              <p class="features-desc">Cá tính mạnh mẽ, năng động</p>
              <img src="./images/cources1.jpg" alt="">
            </div>
             <div class="feature-item">
              <h3 class="features-title">Type HR Civic</h3>
              <p class="features-desc">Cá tính mạnh mẽ, năng động</p>
              <img src="./images/cources1.jpg" alt="">
            </div>
             <div class="feature-item">
              <h3 class="features-title">Type HR Civic</h3>
              <p class="features-desc">Cá tính mạnh mẽ, năng động</p>
              <img src="./images/cources1.jpg" alt="">
            </div>
             <div class="feature-item">
              <h3 class="features-title">Type HR Civic</h3>
              <p class="features-desc">Cá tính mạnh mẽ, năng động</p>
              <img src="./images/cources1.jpg" alt="">
            </div>
         </div>
      </section>
      <!-- Brand -->
      <section class="brands">
        <h2 >THƯƠNG HIỆU NỔI TIẾNG</h2>
        <div class="list-brands">
                <div class="card-brand">                   
                  <img src="./images/cources1.jpg" class="card-img-top p-3"  alt="">
                  <div class="inf-overlay">
                     <h5 class="card-title">BMW</h5>
                     <a href="#!" >Xem sản phẩm</a>
                  </div>
                </div>
                <div class="card-brand">                   
                  <img src="./images/cources1.jpg" class="card-img-top p-3"  alt="">
                  <div class="inf-overlay">
                     <h5 class="card-title">BMW</h5>
                     <a href="#!" >Xem sản phẩm</a>
                  </div>
                </div>
                <div class="card-brand">                   
                  <img src="./images/cources1.jpg" class="card-img-top p-3"  alt="">
                  <div class="inf-overlay">
                     <h5 class="card-title">BMW</h5>
                     <a href="#!" >Xem sản phẩm</a>
                  </div>
                </div>
                <div class="card-brand">                   
                  <img src="./images/cources1.jpg" class="card-img-top p-3"  alt="">
                  <div class="inf-overlay">
                     <h5 class="card-title">BMW</h5>
                     <a href="#!" >Xem sản phẩm</a>
                  </div>
                </div>
        </div>
       </section>
    

    </div>
</div>

<!-- Footer -->
 <?php include './footer/footer.php'; ?>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script>
  const imgAll = document.querySelectorAll(".carousel-img img");
  const list = document.querySelector(".carousel-img");
  const iconLeft = document.querySelector(".arrow-icon-left");
  const iconRight = document.querySelector(".arrow-icon-right");
  const imgLength = imgAll.length;
  let currentIdx = 0;

  function updateTransform() {
    const width = imgAll[0].offsetWidth;
    list.style.transform = `translateX(${-width * currentIdx}px)`;
    list.style.transition = '0.5s ease';
  }

  function slideShow() {
    currentIdx = (currentIdx + 1) % imgLength;
    updateTransform();
  }

  let interval = setInterval(slideShow,3000);

  iconLeft.addEventListener("click", () => {
    clearInterval(interval);
    currentIdx = (currentIdx === 0) ? imgLength - 1 : currentIdx - 1;
    updateTransform();
    interval = setInterval(slideShow, 3000);
  });

  iconRight.addEventListener("click", () => {
    clearInterval(interval);
    currentIdx = (currentIdx === imgLength - 1) ? 0 : currentIdx + 1;
    updateTransform();
    interval = setInterval(slideShow, 3000);
  });

  // Resize support
  window.addEventListener('resize', updateTransform);
</script>
</body>
</html>