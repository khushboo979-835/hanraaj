<!-- 1. Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />

<!-- 2. Image‑only Slider -->
<section class="service-slider py-5">
    <div class="swiper serviceSwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="assets/images/services/1.jpg" alt="AC Repair" />
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="assets/images/services/2.jpg" alt="Refrigerator Repair" />
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="assets/images/services/3.jpg" alt="Washing‑Machine Repair" />
            </div>

            <!--<div class="swiper-slide">-->
            <!--    <img src="assets/images/services/4.jpg" alt="Washing‑Machine Repair" />-->
            <!--</div>-->

            <div class="swiper-slide">
                <img src="assets/images/services/5.avif" alt="Washing‑Machine Repair" />
            </div>

            <div class="swiper-slide">
                <img src="assets/images/services/6.avif" alt="Washing‑Machine Repair" />
            </div>

            <div class="swiper-slide">
                <img src="assets/images/services/7.jpg" alt="Washing‑Machine Repair" />
            </div>

            <div class="swiper-slide">
                <img src="assets/images/services/8.avif" alt="Washing‑Machine Repair" />
            </div>
            <!-- ⬆️ Add / duplicate slides as needed -->
        </div>
        <!-- Optional bullets -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- 3. Slider styling -->
<style>
    .service-slider {
        /* keeps height sensible on all devices */
        --h-small: 220px;
        --h-medium: 320px;
        --h-large: 420px;
    }

    .service-slider .swiper,
    .service-slider .swiper-slide {
        width: 100%;
        height: var(--h-small);
    }

    .service-slider .swiper-slide img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border: 5px solid var(--secondary-color);
        border-radius: 20px;
    }

    /* ⬇︎ height breakpoints */
    @media (min-width: 576px) {

        .service-slider .swiper,
        .service-slider .swiper-slide {
            height: var(--h-medium);
        }
    }

    @media (min-width: 992px) {

        .service-slider .swiper,
        .service-slider .swiper-slide {
            height: var(--h-large);
        }
    }
</style>

<!-- 4. Swiper JS -->
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script>
    /** Initialise Swiper with JS breakpoints **/
    const slider = new Swiper(".serviceSwiper", {
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        speed: 600,

        /* Breakpoints: show more slides on wider screens */
        breakpoints: {
            // ≥ 0 px – phones
            0: { slidesPerView: 1 },
            // ≥ 768 px – tablets
            768: { slidesPerView: 2, spaceBetween: 16 },
            // ≥ 1200 px – desktops
            1200: { slidesPerView: 3, spaceBetween: 20 },
        },

        /* Optional controls */
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>