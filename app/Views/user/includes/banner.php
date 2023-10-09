<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>
                            <?= $where; ?>
                        </h2>
                        <?php if ($where === 'Home'): ?>
                            <p>Home</p>
                        <?php else: ?>
                            <p>Home
                                <span>-</span>
                                <?= $where; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->