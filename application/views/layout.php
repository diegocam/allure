<html>
    <head>
        <title>Allure</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <script src="<?= base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lazyload.js"></script>
        <?= link_tag("assets/css/reset.css") ?>
        <?php if (isset($head_data)) { ?>
            <?php
            if (isset($head_data['links'])) {
                foreach ($head_data['links'] as $link) {
                    echo $link;
                }
            }
            ?>
        <?php } ?>
        <?= link_tag("assets/css/main.css") ?>
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
                    $this->load->view($body_view, $main_data);
                } else {
                    $this->load->view($body_view);
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