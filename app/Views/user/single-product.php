<!doctype html>
<ht lang="zxx">

  <?= $this->include('user/includes/head') ?>

  <body>
    <?= $this->include('user/includes/nav') ?>
    <?= $this->include('user/includes/banner') ?>


    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area section_padding">
      <div class="container">
        <div class="row s_product_inner justify-content-between">
          <div class="col-lg-7 col-xl-7">
            <div class="product_slider_img">
              <div id="vertical">
                <div data-thumb="img/product/single-product/<?= $products['img']; ?>">
                  <img src="<?= base_url() . $products['img']; ?>" alt="<?= $products['productname']; ?>" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4">
            <div class="s_product_text">
              <h5>previous <span>|</span> next</h5>
              <h3>
                <?= $products['productname']; ?>
              </h3>
              <h2>₱
                <?= $products['price']; ?>
              </h2>
              <ul class="list">
                <li>
                  <span>Category</span> :
                  <?= $products['category']; ?>
                </li>
                <li>
                  <span>Availibility</span> :
                  <?= $products['availability']; ?>
                </li>
              </ul>
              <p>
                <?= $products['details']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================End Single Product Area =================-->






    <?= $this->include('user/includes/subscribe') ?>
    <?= $this->include('user/includes/footer') ?>
    <?= $this->include('user/includes/end') ?>
  </body>

</ht ml>