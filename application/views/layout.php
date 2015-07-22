<html>
    <head>
        <title>Allure</title>
        <script src="<?= base_url() ?>assets/js/jquery-1.11.2.js"></script>
        <script src="<?= base_url() ?>assets/js/lazyload.js"></script>
        <?= link_tag("assets/css/reset.css") ?>
        <?= link_tag("assets/css/main.css") ?>
        <?php if (isset($head_data)) { ?>

        <?php } ?>
    </head>
    <body>
        <!--<img class="lazy" data-original="<?= base_url() ?>assets/img/videos/alaska.jpg" width="640" height="480">-->

        <script>
            $(function () {
                $("img.lazy").lazyload();
            });
        </script>
        <div class="header">
            <div class="wrapper">
                <?php
                if (isset($header_data)) {
                    $this->load->view("header", $header_data);
                } else {
                    $this->load->view("header");
                }
                ?>
            </div>
        </div>
        <div class="main_container">
            <div class="wrapper">
                <?php
                if (isset($main_data)) {
                    $this->load->view("main_body", $main_data);
                } else {
                    $this->load->view("main_body");
                }
                ?>
            </div>
        </div>
        <div class="footer">
            <?php
            if (isset($footer_data)) {
                $this->load->view("footer", $footer_data);
            } else {
                $this->load->view("footer");
            }
            ?>
        </div>
    </body>
</html>