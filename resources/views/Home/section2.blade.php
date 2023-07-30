
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

 
  <title>#</title>

  
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
  
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
}

.section2-products {
    padding: 80px 0 54px;
}

.section2-products .header {
    margin-bottom: 50px;
}

.section2-products .header h3 {
    font-size: 1rem;
    color: #fe302f;
    font-weight: 500;
}

.section2-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section2-products .single-product {
    margin-bottom: 26px;
}

.section2-products .single-product .part-1 {
    position: relative;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
}

.section2-products .single-product .part-1::before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        transition: all 0.3s;
}

.section2-products .single-product:hover .part-1::before {
        transform: scale(1.2,1.2) rotate(5deg);
}

.section2-products #product-1 .part-1::before {
    background: url("https://www.uncovervietnam.com/wp-content/uploads/2019/07/Dalat-Palace-Heritage-Hotel-5-2.jpg") no-repeat center;
    background-size: cover;
        transition: all 0.3s;
}

.section2-products #product-2 .part-1::before {
    background: url("https://ehgtravel.com/wp-content/uploads/2018/04/connecting-room4_26652666895_o.jpg") no-repeat center;
    background-size: cover;
}

.section2-products #product-3 .part-1::before {
    background: url("https://th.bing.com/th/id/R.4f6c9c451006517637dac4789e196218?rik=vRENH9pRcF03HQ&riu=http%3a%2f%2fd1a896ec7cb361b0d54d-1dc878dead8ec78a84e429cdf4c9df00.r52.cf1.rackcdn.com%2fu%2fpark-hotel-alexandra%2frooms%2fPHAL---Superior-Room--Night-.jpg&ehk=OyE8NRBW%2bVTEFJ2Lr3M862lVwsBmI5sZFYrr8xGUyag%3d&risl=&pid=ImgRaw&r=0") no-repeat center;
    background-size: cover;
}

.section2-products #product-4 .part-1::before {
    background: url("https://www.hoianchic.com/images/accommodation/grand-chic/Grand_Chic_Room_-_Hoi_An_Chic_Hotel__01.jpg") no-repeat center;
    background-size: cover;
}

.section2-products .single-product .part-1 .discount,
.section2-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section2-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section2-products .single-product .part-1 ul {
    position: absolute;
    bottom: -41px;
    left: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
}

.section2-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section2-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section2-products .single-product .part-1 ul li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section2-products .single-product .part-1 ul li a:hover {
    color: #fe302f;
}

.section2-products .single-product .part-2 .product-title {
    font-size: 1rem;
}

.section2-products .single-product .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
}

.section2-products .single-product .part-2 .product-old-price {
    position: relative;
    padding: 0 7px;
    margin-right: 2px;
    opacity: 0.6;
}

.section2-products .single-product .part-2 .product-old-price::after {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #444444;
    transform: translateY(-50%);
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <section2 class="section2-products">
        <div class="container">
                <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                                <div class="header">
                                        <h2>Sale Rooms</h2>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-1" class="single-product">
                                        <div class="part-1">
                                                <ul>
                                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                                </ul>
                                        </div>
                                        <div class="part-2">
                                                <h3 class="product-title">Here Product Title</h3>
                                                <h4 class="product-old-price">$79.99</h4>
                                                <h4 class="product-price">$49.99</h4>
                                        </div>
                                </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-2" class="single-product">
                                        <div class="part-1">
                                                
                                                <ul>
                                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                                </ul>
                                        </div>
                                        <div class="part-2">
                                                <h3 class="product-title">Here Product Title</h3>
                                                <h4 class="product-price">$49.99</h4>
                                        </div>
                                </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-3" class="single-product">
                                        <div class="part-1">
                                                <ul>
                                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                                </ul>
                                        </div>
                                        <div class="part-2">
                                                <h3 class="product-title">Here Product Title</h3>
                                                <h4 class="product-old-price">$79.99</h4>
                                                <h4 class="product-price">$49.99</h4>
                                        </div>
                                </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-4" class="single-product">
                                        <div class="part-1">
                                 
                                                <ul>
                                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                                </ul>
                                        </div>
                                        <div class="part-2">
                                                <h3 class="product-title">Here Product Title</h3>
                                                <h4 class="product-price">$49.99</h4>
                                        </div>
                                </div>
                        </div>

                </div>
        </div>
</section2>
  
  
  
  
</body>

</html>