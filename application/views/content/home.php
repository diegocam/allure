<div id="top_section">
    <div class="sidebar">
        <h1 class="">Collections</h1>
        <ul>
            <li><a href="/jovani-new-arrivals" title="New Arrivals">New<span> Arrivals</span></a></li>
            <li><a href="/prom-dresses" title="Prom Dresses">Prom <span>Dresses</span></a></li>
            <li><a href="/evening-dresses" title="Evening Dresses">Evening <span> Dresses</span></a></li>
            <li><a href="/short-cocktail-dresses" title="Short Dresses">Short <span> Dresses</span></a></li>
            <li><a href="/homecoming-dresses" title="Homecoming Dresses">Homecoming <span> Dresses</span></a></li>
            <li><a href="/pageant-dresses" title="Pageant Dresses">Cocktail <span> Dresses</span></a></li>
            <li><a href="/couture-dresses" title="Couture Dresses">Party <span> Dresses</span></a></li>
            <li><a href="/wedding-dresses" title="Wedding Dresses">Wedding <span> Dresses</span></a></li>
        </ul>
        <img id="sale_image" src="<?= base_url() ?>assets/img/sale.jpg" alt="">
    </div>
    <div class="center_images">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?= base_url() ?>assets/img/prom-dresses-2016.jpg" alt=""></div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
                <div class="swiper-slide">Slide 10</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 30
            });
        </script>
    </div>
    <div class="clear_float"></div>
</div>
<div id="offers_section">
    <div class="offer_image">
        <img src="<?= base_url() ?>assets/img/white_back1.jpg">
    </div>
    <div class="offer_image">
        <img src="<?= base_url() ?>assets/img/white_back2.jpg">
    </div>
</div>
<div id="dresses_section">
    <div class="dress_image">
        <img src="<?= base_url() ?>assets/img/dress.jpg">
    </div>
    <div class="dress_image">
        <img src="<?= base_url() ?>assets/img/dress.jpg">
    </div>
    <div class="dress_image">
        <img src="<?= base_url() ?>assets/img/dress.jpg">
    </div>
    <div class="clear_float"></div>
</div>