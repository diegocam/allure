<div>
    <img id="main_logo" src="<?= base_url() ?>assets/img/allure-logo.png" alt="Allure Boutique Logo">

    <div class="navigation">
        <?php
        if (isset($navigation_data)) {
            $this->load->view("navigation", $navigation_data);
        } else {
            $this->load->view("navigation");
        }
        ?>
    </div>
    <div class="clear_float"></div>
</div>