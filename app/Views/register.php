<!doctype html>
<html lang="zxx">
<?= $this->include('user/includes/head') ?>

<body>

    <!--================login_part Area =================-->
    <section class="login_part " style="margin-top: 5%;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Already Know to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="<?= base_url() ?>login" class="btn_3">Sign in</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome! <br>
                                Please register to sign in</h3>
                            <form class="row contact_form" action="<?= base_url() ?>registerauth" method="post"
                                novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" value=""
                                        placeholder="email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">

                                    <button type="submit" value="submit" class="btn_3">
                                        register
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->



    <?= $this->include('user/includes/end') ?>
</body>

</html>