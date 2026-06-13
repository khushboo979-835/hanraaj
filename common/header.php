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
        font-size: 14px;
        background: var(--primary-color);
        color: var(--tertiary-color);
    }

    .top-header i {
        color: var(--tertiary-color, #0d6efd);
    }

    @media (max-width: 576px) {
        .top-header {
            font-size: 12px;
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
        <div class="d-flex justify-content-between align-items-center small">
            <!-- Left: Email -->
            <div class="text-white">
                <a href="mailto:hansrajenterprises@gmail.com;" class="text-white text-decoration-none"><i class="bi bi-envelope me-2"></i> hansrajenterprises@gmail.com</a>
            </div>

            <!-- Right: Phone -->
            <div class="text-white">
                <a href="tel:+917894606334" class="text-white text-decoration-none"><i class="bi bi-telephone me-2"></i> +91 78946 06334</a>
            </div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="<?= $base_url ?>">
                <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="logo" class="img-fluid" style="width: 150px;">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list-nested fs-1 text-dark"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?= $base_url ?>#about">About Us</a>
                    </li>
                    <li class="nav-item dropdown me-4">

    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

        Services

    </a>



    <ul class="dropdown-menu">

        <li><a class="dropdown-item" href="<?= $base_url ?>ac-repair.php">AC Repair</a></li>

        <li><a class="dropdown-item" href="<?= $base_url ?>fridge-repair.php">Fridge Repair</a></li>
        
        <li><a class="dropdown-item" href="<?= $base_url ?>microwave-repair.php">Microwave Oven Repair</a></li>

        <li><a class="dropdown-item" href="<?= $base_url ?>washing-machine.php">Washing Machine Repair</a></li>
        
        
        

    </ul>

</li>

                    
                    
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?= $base_url ?>blogs">Blogs</a>
                    </li>
                    
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?= $base_url ?>#contact">Contact Us</a>
                    </li>
                    <li class="nav-item me-4">
                        <!-- Button trigger modal -->
                        <span type="button" class="book-now-btn nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Book Now
                        </span>
                    </li>

                    <!-- WhatsApp & Call (Visible only on lg and above) -->
                    <li class="nav-item d-none d-lg-flex align-items-center gap-2">
                        <a href="https://wa.me/917894606334" class="btn btn-success btn-sm" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="tel:+917894606334" class="btn btn-primary btn-sm">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- WhatsApp & Call (Visible only on md and below, below the navbar) -->
        <div class="d-lg-none d-flex align-items-center justify-content-center gap-2 px-3 mx-auto pt-2">
            <a href="https://wa.me/917894606334" class="btn btn-success btn-sm " target="_blank">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <a href="tel:+917894606334" class="btn btn-primary btn-sm w-100">
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