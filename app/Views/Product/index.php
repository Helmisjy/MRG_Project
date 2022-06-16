<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h3>Featured Product</h3>
                    <h2>Popular Products</h2>
                    <a href="/create" class="btn btn-primary">Tambah Product</a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Product -->
            <?php foreach ($product as $p) : ?>
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
                            <h3 class="product-title">iphone 13</h3>
                            <h4 class="product-old-price">Rp1.500.000</h4>
                            <h4 class="product-price">Rp900.000</h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-2" class="single-product">
                    <div class="part-1">
                        <span class="discount">15% off</span>
                        <ul>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Iphone 13 Pro Max 64GB</h3>
                        <h4 class="product-price">Rp13.299.999</h4>
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
                        <h3 class="product-title">I Phone 13 128GB</h3>
                        <h4 class="product-old-price">Rp15.899.000</h4>
                        <h4 class="product-price">Rp12.499.999</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-4" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Iphone 13 Pro 64GB</h3>
                        <h4 class="product-price">Rp13.899.000</h4>
                    </div>
                </div>
            </div>
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
                        <h3 class="product-title">Iphone 13 Pro 128GB</h3>
                        <h4 class="product-old-price">Rp14.890.000</h4>
                        <h4 class="product-price">Rp12.490.000</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-2" class="single-product">
                    <div class="part-1">
                        <span class="discount">15% off</span>
                        <ul>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Iphone 13 64GB</h3>
                        <h4 class="product-price">Rp11.099.000</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-3" class="single-product">
                    <div class="part-1">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Iphone 13 128</h3>
                        <h4 class="product-old-price">Rp11.999.000</h4>
                        <h4 class="product-price">Rp9.699.000</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-4" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Iphone 13 Pro Max</h3>
                        <h4 class="product-price">Rp14.659.000</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>