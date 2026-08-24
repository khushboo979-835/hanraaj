<style>
    .navbar {
        background: var(--tertiary-color);
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2),
            0px 6px 10px 0px rgba(0, 0, 0, 0.14),
            0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        padding: 15px;
        transition: all 0.3s ease-in-out;
    }

    .navbar .navbar-brand img {
        width: 150px;
    }

    .nav-item .nav-link {
        font-weight: 600;
        color: black;
        margin-right: 20px;
    }

    .navbar.fixed-top {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 12px 15px !important;
        z-index: 1050;
        animation: slideDown 0.3s ease;
        background: var(--tertiary-color);
    }

    @keyframes slideDown {
        from {
            transform: translateY(-100%);
        }

        to {
            transform: translateY(0);
        }
    }

    body.fixed-padding {
        padding-top: 80px;
    }

    .contact-buttons {
        display: flex;
        gap: 10px;
    }

    .contact-buttons a {
        font-weight: 600;
        white-space: nowrap;
    }



    @media (min-width: 768px) {
        .contact-buttons {
            display: flex !important;
        }
    }
</style>
<!-- Top Header -->
<style>
    .top-header {
        font-size: 13.5px;
        background: var(--primary-color, #0387cf);
        color: var(--tertiary-color, #fff);
    }

    .top-header i {
        color: #ffdd00;
    }

    /* Language Switcher Styling */
    .lang-switcher-wrap {
        display: inline-flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.2);
        padding: 3px 6px;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .lang-btn {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 12.5px;
        font-weight: 600;
        padding: 2px 10px;
        border-radius: 15px;
        cursor: pointer;
        transition: all 0.25s ease;
        text-decoration: none;
    }

    .lang-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        color: #fff;
    }

    .lang-btn.active {
        background: #fff;
        color: #0387cf !important;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .guideline-nav-badge {
        background: #ff5722;
        color: #fff;
        font-size: 10px;
        padding: 2px 6px;
        border-radius: 8px;
        margin-left: 4px;
        font-weight: bold;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        .top-header {
            font-size: 12px;
        }
        .lang-switcher-wrap {
            padding: 2px 4px;
        }
        .lang-btn {
            font-size: 11.5px;
            padding: 2px 6px;
        }
    }

    /* Dropdown Styling */
    .dropdown-menu {
        border-radius: 12px;
        padding: 10px 0;
        border: none;
        box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
        margin-top: 10px;
        min-width: 220px;
        animation: fadeIn 0.3s ease-in-out;
    }

    /* Dropdown items */
    .dropdown-item {
        padding: 10px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    /* Hover effect */
    .dropdown-item:hover {
        background: linear-gradient(45deg, #007bff, #00c6ff);
        color: #fff;
        border-radius: 6px;
    }

    /* Smooth animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="top-header py-1 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
            <!-- Left: Helpline & Email -->
            <div class="d-flex align-items-center flex-wrap gap-3">
                <a href="tel:+917752083960" class="text-white text-decoration-none fw-semibold">
                    <i class="bi bi-shield-fill-check me-1"></i> <span data-lang-key="official_helpline">Official Helpline</span>: <strong>7752083960</strong>
                </a>
                <span class="d-none d-md-inline text-white-50">|</span>
                <a href="mailto:hansrajenterprises@gmail.com" class="text-white text-decoration-none d-none d-md-inline">
                    <i class="bi bi-envelope-fill me-1"></i> hansrajenterprises@gmail.com
                </a>
            </div>

            <!-- Right: Language Switcher Mode -->
            <div class="d-flex align-items-center gap-2 ms-auto">
                <span class="text-white small fw-bold d-none d-sm-inline"><i class="bi bi-translate me-1"></i> Language:</span>
                <div class="lang-switcher-wrap" role="group" aria-label="Language Mode Switcher">
                    <button type="button" class="lang-btn active" data-lang="en" title="English">English</button>
                    <button type="button" class="lang-btn" data-lang="hi" title="हिन्दी">हिन्दी</button>
                    <button type="button" class="lang-btn" data-lang="or" title="ଓଡ଼ିଆ">ଓଡ଼ିଆ</button>
                </div>
            </div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="<?= $base_url ?>">
                <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="Hansraj Enterprises" class="img-fluid" style="width: 150px;">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list-nested fs-1 text-dark"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0 align-items-lg-center">
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="<?= $base_url ?>" data-lang-key="nav_home">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="<?= $base_url ?>#about" data-lang-key="nav_about">About Us</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-lang-key="nav_services">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $base_url ?>ac-repair.php" data-lang-key="nav_ac_repair">AC Repair</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>fridge-repair.php" data-lang-key="nav_fridge_repair">Fridge Repair</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>microwave-repair.php" data-lang-key="nav_micro_repair">Microwave Oven Repair</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>washing-machine.php" data-lang-key="nav_washing_repair">Washing Machine Repair</a></li>
                        </ul>
                    </li>

                    <!-- Customer Guidelines Section Link -->
                    <li class="nav-item me-3">
                        <a class="nav-link text-danger fw-bold" href="<?= $base_url ?>#guidelines" data-lang-key="nav_guidelines">
                            <i class="bi bi-shield-check text-primary me-1"></i>Guidelines & Disclaimer <span class="guideline-nav-badge">Important</span>
                        </a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link" href="<?= $base_url ?>blogs" data-lang-key="nav_blogs">Blogs</a>
                    </li>
                    
                    <li class="nav-item me-3">
                        <a class="nav-link" href="<?= $base_url ?>#contact" data-lang-key="nav_contact">Contact Us</a>
                    </li>
                    <li class="nav-item me-3">
                        <!-- Button trigger modal -->
                        <span type="button" class="book-now-btn nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" data-lang-key="nav_book_now">
                            Book Now
                        </span>
                    </li>

                    <!-- WhatsApp & Call (Visible only on lg and above) -->
                    <li class="nav-item d-none d-lg-flex align-items-center gap-2">
                        <a href="https://wa.me/917752083960" class="btn btn-success btn-sm" target="_blank" data-lang-key="nav_whatsapp">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="tel:+917752083960" class="btn btn-primary btn-sm" data-lang-key="nav_call_now">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- WhatsApp & Call (Visible only on md and below, below the navbar) -->
        <div class="d-lg-none d-flex align-items-center justify-content-center gap-2 px-3 mx-auto pt-2 w-100">
            <a href="https://wa.me/917752083960" class="btn btn-success btn-sm w-50" target="_blank" data-lang-key="nav_whatsapp">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <a href="tel:+917752083960" class="btn btn-primary btn-sm w-50" data-lang-key="nav_call_now">
                <i class="bi bi-telephone-fill"></i> Call Now
            </a>
        </div>
    </nav>
</header>
<?php include $base_path . 'common/enquiry.php'; ?>
<?php include $base_path . "common/chat-bot.php"; ?>

<script>
    window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");

        if (window.scrollY > 120) {
            navbar.classList.add("fixed-top");
            document.body.classList.add("fixed-padding");
        } else {
            navbar.classList.remove("fixed-top");
            document.body.classList.remove("fixed-padding");
        }
    });
</script>