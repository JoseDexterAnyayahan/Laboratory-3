<!doctype html>
<html lang="zxx">

<?= $this->include('user/includes/head') ?>

<body>

    <?= $this->include('user/includes/nav') ?>
    <?= $this->include('user/includes/banner') ?>

    <!--================End Home Banner Area =================-->
    <!-- product_list start -->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>All <span>products</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <?php foreach ($products as $product): ?>
                            <div class="single_product_list_slider">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="<?= base_url() ?><?= $product['img']; ?>" alt="">
                                            <div class="single_product_text">
                                                <h4>
                                                    <?= $product['productname']; ?>
                                                </h4>
                                                <h3>
                                                    <?= $product['price']; ?>
                                                </h3>
                                                <a href=" <?= base_url() ?>singleprod/<?= $product['id']; ?>""
                                                    class=" add_cart">+ add to cart and view<i
                                                        class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start -->






    <?= $this->include('user/includes/end') ?>
</body>

</html>