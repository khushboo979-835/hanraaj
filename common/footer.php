<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= $base_url ?>assets/js/language-manager.js"></script>

<!-- ========================================================================================= -->
<!-- Footer CSS -->
<style>
    footer {
        background: var(--primary-color, #0387cf);
        color: var(--tertiary-color, #fff);
        padding: 50px 0 30px;
        font-family: "Segoe UI", sans-serif;
    }

    .footer-logo {
        max-width: 150px;
        margin-bottom: 20px;
    }

    footer h3, footer h4 {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 600;
        color: var(--tertiary-color, #fff);
        position: relative;
        display: inline-block;
    }

    footer h3::after, footer h4::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background: #ffdd00;
        margin-top: 5px;
        border-radius: 2px;
    }

    footer p,
    footer a {
        font-size: 14.5px;
        line-height: 1.7;
        color: var(--tertiary-color, #fff);
        text-decoration: none;
    }

    footer a:hover {
        color: #ffdd00;
        text-decoration: underline;
    }

    .social-icons a {
        display: inline-block;
        margin-right: 10px;
        font-size: 18px;
        color: var(--tertiary-color, #fff);
        background: rgba(255, 255, 255, 0.1);
        padding: 8px 10px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        color: #fff;
        background: #ff5722;
    }

    .bottom-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        text-align: center;
        font-size: 13px;
        padding-top: 15px;
        margin-top: 30px;
        color: #ccc;
    }

    .goog-te-banner-frame.skiptranslate, .goog-te-banner-frame {
        display: none !important;
    }
    body {
        top: 0px !important;
    }
    .goog-tooltip, .goog-tooltip:hover {
        display: none !important;
    }
    .goog-text-highlight {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }

    @media (max-width: 767px) {
        footer .col-md-4, footer .col-md-5, footer .col-md-3 {
            text-align: center;
            margin-bottom: 25px;
        }

        .social-icons {
            justify-content: center !important;
        }
    }
</style>

<!-- Footer HTML -->
<footer>
    <div class="container">
        <div class="row gy-5">
            <!-- About -->
            <div class="col-md-5">
                <img src="<?= $base_url ?>assets/images/logo/logo.png" alt="Hansraj Enterprises Logo" class="footer-logo rounded">
                <div class="py-2">
                    <h3 data-lang-key="footer_about_title">About Hansraj Enterprises</h3>
                    <p data-lang-key="footer_about_desc">
                        Hansraj Enterprises is your trusted service provider in Uttar Pradesh, offering reliable and
                        efficient
                        repair services for Washing Machines, Refrigerators & Air Conditioners. We’re committed to
                        top-notch service with a customer-first approach.
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3">
                <h3 data-lang-key="footer_quick_links">Quick Links</h3>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?= $base_url ?>" class="text-white" data-lang-key="nav_home">Home</a></li>
                    <li class="mb-2"><a href="<?= $base_url ?>#about" class="text-white" data-lang-key="nav_about">About Us</a></li>
                    <li class="mb-2"><a href="<?= $base_url ?>#services" class="text-white" data-lang-key="nav_services">Our Services</a></li>
                    <li class="mb-2"><a href="<?= $base_url ?>#guidelines" class="text-warning fw-semibold" data-lang-key="nav_guidelines"><i class="bi bi-shield-check me-1"></i>Guidelines & Disclaimer</a></li>
                    <li class="mb-2"><a href="<?= $base_url ?>#contact" class="text-white" data-lang-key="nav_contact">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info + Social -->
            <div class="col-md-4">
                <h3 data-lang-key="footer_contact_title">Contact Us</h3>
                <p>
                    <strong>Address:</strong>
                    Uttar Pradesh, India
                </p>
                <p><strong>Official Helpline:</strong> <a href="tel:+9178579023438" class="text-warning fw-bold">+91 78579 023438</a></p>
                <p><strong>Phone:</strong> <a href="tel:+9178579023438" class="text-white">+91 78579 023438</a></p>
                
                <p><strong>Email:</strong> <a href="mailto:hansrajenterprises@gmail.com"
                        class="text-white">hansrajenterprises@gmail.com</a></p>

                <div class="social-icons d-flex mt-3">
                    <a href="<?= $base_url ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $base_url ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="<?= $base_url ?>" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="<?= $base_url ?>" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bottom-footer mt-4">
            <p class="mb-0">
                &copy;
                <script>document.write(new Date().getFullYear());</script> <span data-lang-key="footer_rights">Hansraj Enterprises | All Rights Reserved</span> |
                Website Design & Maintain By: <a href="https://www.digitalinfinityddis.com/"
                    class="text-white text-decoration-none" target="_blank">DDIS</a>
            </p>
        </div>
    </div>
</footer>