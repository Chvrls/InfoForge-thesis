<?php
	require "functions.php";
	check_login();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/wishlist.css">
    <link rel="stylesheet" href="assets/css/cart.css">

    <title>Infoforge</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <div class="page-content">
    <header class="header">
        <div class="header__top">
            <div class="header__container container">
                <div class="header__contact">
                    <span>(+63)9123456789 </span>
                    <span> Our Location</span>
                </div>
                <p class="header__alert-news">Super Value Deals - Save More with coupons</p>
                <div class="header__login">
                 <span class="header__top-action">
                 <?php if(check_login(false)):?>
                  Hi,<span class="name-container"> <?=$_SESSION['USER']->name ?></span> 
                  <?php endif;?>
                 </span> 
                    <a href="logout.php" class="header__top-action"> &nbsp; &nbsp; &nbsp; &nbsp;Logout</a>
                </div>
                
            </div>
        </div>

        <nav class="nav nav-color">
        <a href="index.html" class="nav__logo">
          <img src="assets/img/logo.png" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="products.html" class="nav__link">Products</a>
            </li>
            <li class="nav__item">
              <a href="forge.html" class="nav__link">Forge</a>
            </li> 
            <li class="nav__item">
              <a href="#" class="nav__link">About Us</a>
            </li>
            <li class="nav__item">
              <a href="#footer" class="nav__link">Contact Us</a> 
            </li>
          </ul>
          <div class="header__search">
            <input type="text" placeholder="Search for items..." class="form__input"/>
            <button class="search__btn">
              <img src="assets/img/search.png" alt="">
            </button>
          </div>
        </div>

        <div class="header__user-actions">
          <div class="wishlist-icon-container header__action-btn">
            <img src="assets/img/icon-heart.svg" class="wishlist-icon" id="wishlistIcon">
            <span class="count" id="wishlistBadge">0</span>
          </div>
          <div class="header__action-btn cart-container">
            <img src="assets/img/icon-cart.svg" class="cart-icon" id="cartIcon">
            <span class="count" id="cartBadge">0</span>
          </div>
        </div>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section--lg">
        <div class="home__container container grid">
          <div class="home__content">
            <span class="home__subtitle">Hot Promotions</span>
            <h1 class="home__title">Dominate with the <Span>Best</Span></h1>
            <p class="home__description">Save more up to 10% 0ff</p>
            <a href="shop.html" class="btn">Shop Now</a>
          </div>  
          <img src="assets/img/home-img.png" alt="" class="home__img"/>
        </div>
      </section>

      <!--=============== CATEGORIES ===============-->
      <section class="categories container section">
        <h3 class="section__title"><span>Popular </span>Categories</h3>
        <div class="categories__container swiper">
          <div class="swiper-wrapper">
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-1.jpg" alt="" class="category__img">
              <h3 class="category__title">Motherboard</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-2.jpg" alt="" class="category__img">
              <h3 class="category__title">Casing</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-3.jpg" alt="" class="category__img">
              <h3 class="category__title">Monitors</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-4.jpg" alt="" class="category__img">
              <h3 class="category__title">Mouse</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-5.jpg" alt="" class="category__img">
              <h3 class="category__title">Keyboard</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-6.jpg" alt="" class="category__img">
              <h3 class="category__title">Camera</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-7.jpg" alt="" class="category__img">
              <h3 class="category__title">RAMs</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-8.jpg" alt="" class="category__img">
              <h3 class="category__title">CPU</h3>
            </a>
          </div>
          <div class="swiper-button-next"><i class="fi fi-rs-angle-right"></i></div>
          <div class="swiper-button-prev"><i class="fi fi-rs-angle-left"></i></div>
        </div>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section container">
        <div class="tab__btns">
          <span class="tab__btn active-tab" data-target="#featured">Featured</span>
          <span class="tab__btn" data-target="#popular">Popular</span>
          <span class="tab__btn" data-target="#new-added">Newly added</span>
        </div>

        <div class="tab__items">
          <div class="tab__item active-tab" content id="featured">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-1-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-1-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Motherboard</span>
                  <a href="details.html">
                    <h3 class="product__title">Asus Prime B450M-A II     
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱4,700.00</span>
                    <span class="Old__price">₱5,200.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-2-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-2-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-green">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">CPU</span>
                  <a href="details.html">
                    <h3 class="product__title">AMD Ryzen 7 5700X 3.4-4.6GHZ 8-Core AM4 Processor Boxed</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱16,850.00</span>
                    <span class="Old__price">₱17,450.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-3-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-3-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-orange">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Monitor</span>
                  <a href="details.html">
                    <h3 class="product__title">AOC 2490VX 23.8" FHD 1MS 144Hz  FS    
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱9,000.00</span>
                    <span class="Old__price">₱10,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-4-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-4-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-blue">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Keyboard</span>
                  <a href="details.html">
                    <h3 class="product__title">Redragon S101-4-in-1
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱2,150.00</span>
                    <span class="Old__price">₱2,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-5-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-5-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">RAM</span>
                  <a href="details.html">
                    <h3 class="product__title">Delta Force RGB 2x8GB 3200mhz</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱5,050.00</span>
                    <span class="Old__price">₱5,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-6-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-6-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">-22%</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">HDD</span>
                  <a href="details.html">
                    <h3 class="product__title">Seagate 1TB Skyhawk CCTV 
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱2,184.00</span>
                    <span class="Old__price">₱2,800.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-7-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-7-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-green">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">GPU</span>
                  <a href="details.html">
                    <h3 class="product__title">MSI GTX1050Ti Ventus XS OC</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱12,000.00</span>
                    <span class="Old__price">₱12,900.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-8-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-8-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Mouse</span>
                  <a href="details.html">
                    <h3 class="product__title">Redragon M987 Reaping RGB Mouse
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱1,000.00</span>
                    <span class="Old__price">₱1,200.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>  
          </div>

          <div class="tab__item" content id="popular">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-9-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-9-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">GPU</span>
                  <a href="details.html">
                    <h3 class="product__title">Intel Core i5 10400
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱13,300.00</span>
                    <span class="Old__price">₱14,450.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-10-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-10-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-green">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Memory</span>
                  <a href="details.html">
                    <h3 class="product__title">Apacer 16GB DDR4 2666mhz Sodimm
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱4,150.00</span>
                    <span class="Old__price">₱5,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-11-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-11-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-orange">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">RAMs</span>
                  <a href="details.html">
                    <h3 class="product__title">Gskill TridentZ RGB 2x8GB DDR4 3200mhz
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱15,450.00</span>
                    <span class="Old__price">₱17,450.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-12-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-12-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-blue">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">SSD</span>
                  <a href="details.html">
                    <h3 class="product__title">Silicon Power 1TB 2.5"
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱4,900.00</span>
                    <span class="Old__price">₱5,000.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-13-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-13-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Mouse</span>
                  <a href="details.html">
                    <h3 class="product__title">Fantech WG10 Raigor II 2000 DPI Wireless 2.4GHz</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱1,120.00</span>
                    <span class="Old__price">₱1,600.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-5-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-5-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">RAM</span>
                  <a href="details.html">
                    <h3 class="product__title">Delta Force RGB 2x8GB 3200mhz</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱5,050.00</span>
                    <span class="Old__price">₱5,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-7-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-7-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-green">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">GPU</span>
                  <a href="details.html">
                    <h3 class="product__title">MSI GTX1050Ti Ventus XS OC</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱12,000.00</span>
                    <span class="Old__price">₱12,900.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-8-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-8-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Mouse</span>
                  <a href="details.html">
                    <h3 class="product__title">Redragon M987 Reaping RGB Mouse
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱1,000.00</span>
                    <span class="Old__price">₱1,200.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>  
          </div>

          <div class="tab__item" content id="new-added">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-3-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-3-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-orange">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Monitor</span>
                  <a href="details.html">
                    <h3 class="product__title">AOC 2490VX 23.8" FHD 1MS 144Hz  FS    
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱9,000.00</span>
                    <span class="Old__price">₱10,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-4-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-4-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-blue">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Keyboard</span>
                  <a href="details.html">
                    <h3 class="product__title">Redragon S101-4-in-1
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱2,150.00</span>
                    <span class="Old__price">₱2,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-5-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-5-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">RAM</span>
                  <a href="details.html">
                    <h3 class="product__title">Delta Force RGB 2x8GB 3200mhz</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱5,050.00</span>
                    <span class="Old__price">₱5,500.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-11-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-11-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-orange">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">RAMs</span>
                  <a href="details.html">
                    <h3 class="product__title">Gskill TridentZ RGB 2x8GB DDR4 3200mhz
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱15,450.00</span>
                    <span class="Old__price">₱17,450.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-12-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-12-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-blue">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">SSD</span>
                  <a href="details.html">
                    <h3 class="product__title">Silicon Power 1TB 2.5"
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱4,900.00</span>
                    <span class="Old__price">₱5,000.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-13-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-13-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Mouse</span>
                  <a href="details.html">
                    <h3 class="product__title">Fantech WG10 Raigor II 2000 DPI Wireless 2.4GHz</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱1,120.00</span>
                    <span class="Old__price">₱1,600.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-9-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-9-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__budge light-pink">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__categories">GPU</span>
                  <a href="details.html">
                    <h3 class="product__title">Intel Core i5 10400
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱13,300.00</span>
                    <span class="Old__price">₱14,450.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/img/product-8-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-8-2.jpg" alt="" class="product__img hover">
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Add to Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>
                <div class="product__content">
                  <span class="product__categories">Mouse</span>
                  <a href="details.html">
                    <h3 class="product__title">Redragon M987 Reaping RGB Mouse
                    </h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₱1,000.00</span>
                    <span class="Old__price">₱1,200.00</span>
                  </div>
                  <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== DEALS ===============-->
      <section class="deals section">
        <div class="deals__container container container-grid">
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Build Your Own PC</h3>
              <span class="deals__category">Limited quantities.</span>
            </div>
            <h4 class="deals__title">Lastest and Modern Technologies</h4>
            <div class="deals__price flex">
              <span class="new__price">For as low as ₱20,000.00 </span>
            </div>
            <div class="deals__group">
              <p class="deals__countdown-text">Hurry! Before promo ends in: </p>
              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown___period">02</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown___period">09</p>
                  <span class="unit">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown___period">33</p>
                  <span class="unit">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown___period">08</p>
                  <span class="unit">Sec</span>
                </div>
              </div>
            </div>
            <div class="deals__btn">
              <a href="details.html" class="btn btn--md">Forge Now</a>
            </div>
          </div>

          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Pre-buid PC</h3>
              <span class="deals__category">Computer</span>
            </div>
            <h4 class="deals__title">Try our state of the art Computers</h4>
            <div class="deals__price flex">
              <span class="new__price">₱24,520</span>
              <span class="Old__price">₱28,500</span>
            </div>
            <div class="deals__group">
              <p class="deals__countdown-text">Hurry! Before promo ends in: </p>
              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown___period">08</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown___period">18</p>
                  <span class="unit">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown___period">12</p>
                  <span class="unit">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown___period">54</p>
                  <span class="unit">Sec</span>
                </div>
              </div>
            </div>
            <div class="deals__btn">
              <a href="details.html" class="btn btn--md">Shop Now</a>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEW ARRIVALS ===============-->
      <section class="new__arrivals container section">
        <h3 class="section__title"><span>New </span>Arrivals</h3>
        <div class="new__container swiper">
          <div class="swiper-wrapper">
            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/product-3-1.jpg" alt="" class="product__img default">
                  <img src="assets/img/product-3-2.jpg" alt="" class="product__img hover">
                </a>
                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>
                <div class="product__budge light-orange">Hot</div>
              </div>
              <div class="product__content">
                <span class="product__categories">Monitor</span>
                <a href="details.html">
                  <h3 class="product__title">AOC 2490VX 23.8" FHD 1MS 144Hz  FS    
                  </h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">₱9,000.00</span>
                  <span class="Old__price">₱10,500.00</span>
                </div>
                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/product-4-1.jpg" alt="" class="product__img default">
                  <img src="assets/img/product-4-2.jpg" alt="" class="product__img hover">
                </a>
                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>
                <div class="product__budge light-blue">Hot</div>
              </div>
              <div class="product__content">
                <span class="product__categories">Keyboard</span>
                <a href="details.html">
                  <h3 class="product__title">Redragon S101-4-in-1 (K+M+H+Mousepad)
                  </h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">₱2,150.00</span>
                  <span class="Old__price">₱2,500.00</span>
                </div>
                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/product-5-1.jpg" alt="" class="product__img default">
                  <img src="assets/img/product-5-2.jpg" alt="" class="product__img hover">
                </a>
                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>
                <div class="product__budge light-pink">-30%</div>
              </div>
              <div class="product__content">
                <span class="product__categories">RAM</span>
                <a href="details.html">
                  <h3 class="product__title">Delta Force RGB 2x8GB 3200mhz</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">₱5,050.00</span>
                  <span class="Old__price">₱5,500.00</span>
                </div>
                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/product-11-1.jpg" alt="" class="product__img default">
                  <img src="assets/img/product-11-2.jpg" alt="" class="product__img hover">
                </a>
                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>
                <div class="product__budge light-orange">Hot</div>
              </div>
              <div class="product__content">
                <span class="product__categories">RAMs</span>
                <a href="details.html">
                  <h3 class="product__title">Gskill TridentZ RGB 2x8GB DDR4 3200mhz
                  </h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">₱15,450.00</span>
                  <span class="Old__price">₱17,450.00</span>
                </div>
                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/product-13-1.jpg" alt="" class="product__img default">
                  <img src="assets/img/product-13-2.jpg" alt="" class="product__img hover">
                </a>
                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>
                <div class="product__budge light-pink">-30%</div>
              </div>
              <div class="product__content">
                <span class="product__categories">Mouse</span>
                <a href="details.html">
                  <h3 class="product__title">Fantech WG10 Raigor II 2000 DPI Wireless 2.4GHz</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">₱1,120.00</span>
                  <span class="Old__price">₱1,600.00</span>
                </div>
                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/product-8-1.jpg" alt="" class="product__img default">
                  <img src="assets/img/product-8-2.jpg" alt="" class="product__img hover">
                </a>
                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>
              </div>
              <div class="product__content">
                <span class="product__categories">Mouse</span>
                <a href="details.html">
                  <h3 class="product__title">Redragon M987 Reaping RGB Mouse
                  </h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">₱1,000.00</span>
                  <span class="Old__price">₱1,200.00</span>
                </div>
                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/product-2-1.jpg" alt="" class="product__img default">
                  <img src="assets/img/product-2-2.jpg" alt="" class="product__img hover">
                </a>
                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>
                <div class="product__budge light-green">Hot</div>
              </div>
              <div class="product__content">
                <span class="product__categories">CPU</span>
                <a href="details.html">
                  <h3 class="product__title">AMD Ryzen 7 5700X 3.4-4.6GHZ 8-Core</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">₱16,850.00</span>
                  <span class="Old__price">₱17,450.00</span>
                </div>
                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"><i class="fi fi-rs-angle-right"></i></div>
          <div class="swiper-button-prev"><i class="fi fi-rs-angle-left"></i></div>
        </div>
      </section>

      <!--=============== ABOUT US ===============-->
      <section class="about">
        
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer" id="footer">
      <div class="footer__container container grid">
        <div class="footer__content">
          <a href="index.html" class="footer__logo">
            <img src="assets/img/logo.png" alt="" class="footer__logo-img">
          </a>

          <h4 class="footer__subtitle">Contact</h4>
          <p class="footer__description footer-text">
            <span>Address:</span> Phase 4 46 street Block 54 Lot 27 Wellington Residence Brgy Tres Cruses Tanza Cavite, Tanza, Philippines
          </p>
          <p class="footer__description footer-text">
            <span>Phone:</span> +468946564
          </p>
          <p class="footer__description footer-text">
            <span>Hours:</span> 9:00- 18:30, Mon-Sat
          </p>
        
          <div class="footer__social">
            <h4 class="footer__subtitle">Follow Us </h4>
            <div class="footer__social-links">
              <a href="">
                <img src="assets/img/icon-facebook.svg" alt="" class="footer__social-icon">
              </a>
              <a href="">
                <img src="assets/img/icon-twitter.svg" alt="" class="footer__social-icon">
              </a>
              <a href="">
                <img src="assets/img/icon-instagram.svg" alt="" class="footer__social-icon">
              </a>
              <a href="">
                <img src="assets/img/icon-youtube.svg" alt="" class="footer__social-icon">
              </a>
            </div>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__subtitle">Address</h3>
          <div class="footer__links">
            <li><a href="" class="footer__link footer-text">About Us</a></li>
            <li><a href="" class="footer__link footer-text">Deliver Information</a></li>
            <li><a href="" class="footer__link footer-text">Privacy Policy</a></li>
            <li><a href="" class="footer__link footer-text">Contact Us</a></li>
            <li><a href="" class="footer__link footer-text">Terms & Condition</a></li>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__subtitle">My Account</h3>
          <div class="footer__links">
            <li><a href="" class="footer__link footer-text">Sign In</a></li>
            <li><a href="" class="footer__link footer-text">View Cart</a></li>
            <li><a href="" class="footer__link footer-text">Tract My Order</a></li>
            <li><a href="" class="footer__link footer-text">Help</a></li>
            <li><a href="" class="footer__link footer-text">Order</a></li>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__subtitle">Secured Payment Gateways</h3>

          <img src="assets/img/payment-method.png" alt="" class="payment__img">
        </div>
      </div>

    </footer>
  </div>

  <!-- Wishlist Section -->
  <div class="wishlist" id="wishlist">
    <div class="wishlist-header">
      <h2>Wishlist</h2>
      <span id="closeWishlist">&times;</span>
    </div>
    <div class="wishlist-content">
      <!-- Empty Wishlist Icon -->
      <div id="emptyWishlistMessage" class="empty-wishlist">
        <img src="assets/img/empty-wishlist-icon.png">
        <p>Your wishlist is empty</p>
        <button id="returnToShopBtn">Return to Shop</button>
      </div>
      <!-- Items in the wishlist -->
      <div class="wishlist-item">
        <img src="assets/img/pc-case-razer.jpg">
        <div class="item-details">
          <p>Item Name: <span class="item-name">Razer Pc Case</span></p>
          <p>Price: <span class="item-price">₱190.00</span></p>
          <div class="item-actions">
            <button class="add-to-cart-btn">Add to Cart</button>
            <button class="remove-item">Remove</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Shopping Cart Section -->
  <div class="shopping-cart" id="shoppingCart">
    <div class="cart-header">
        <h2>Shopping Cart</h2>
        <span id="closeCart">&times;</span>
    </div>
    <div class="cart-content">
       <!-- Empty Cart Icon -->
      <div id="emptyCartMessage" class="empty-cart">
        <img src="assets/img/empty-cart-icon.png">
        <p>Your cart is empty</p>
        <button id="returnShopBtn">Return to Shop</button>
      </div>
        <!-- Items in the cart -->
      <div class="cart-item">
        <input type="checkbox" class="checkout-checkbox">
        <img src="assets/img/pc-case-razer.jpg">
        <div class="item-details">
            <p>Item Name: <span class="item-name">Razer Pc Case</span></p>
            <p>Price: <span class="item-price">₱190.00</span></p>
            <div class="item-quantity">
                <button class="qty-btn decrease-qty">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn increase-qty">+</button>
            </div>
        </div>
        <button class="remove-btn">Remove</button>
      </div>
    </div>
    <div class="cart-footer">
      <div class="select-all">
        <input type="checkbox" id="selectAllCheckbox">
        <label for="selectAllCheckbox">All</label>
      </div>
        <p class="subtotal">Subtotal: ₱190.00 PHP</p>
        <button id="viewCartBtn">View Cart</button>
        <button id="checkoutBtn">Check Out</button>
    </div>
</div>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/wishlist.js"></script>
    <script src="assets/js/cart.js"></script>
  </body>
</html>
