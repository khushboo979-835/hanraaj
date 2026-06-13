<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= $base_url ?>assets/js/main.js"></script>
<!-- ========================================================================================= -->
<!-- Footer CSS -->
<!-- Footer CSS -->
<style>
    footer {
        background: var(--primary-color);
        color: var(--tertiary-color);
        padding: 50px 0 30px;
        font-family: "Segoe UI", sans-serif;
    }

    .footer-logo {
        max-width: 150px;
        margin-bottom: 20px;
    }

    footer h4 {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 600;
        color: var(--tertiary-color);
        position: relative;
        display: inline-block;
    }

    footer h4::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background: var(--tertiary-color);
        margin-top: 5px;
        border-radius: 2px;
    }

    footer p,
    footer a {
        font-size: 14.5px;
        line-height: 1.7;
        color: var(--tertiary-color);
        text-decoration: none;
    }

    footer a:hover {
        color: var(--primary-color);
        text-decoration: underline;
    }

    .social-icons a {
        display: inline-block;
        margin-right: 10px;
        font-size: 18px;
        color: var(--tertiary-color);
        background: rgba(255, 255, 255, 0.1);
        padding: 8px 10px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        color: #fff;
        background: var(--primary-color);
    }

    .bottom-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        text-align: center;
        font-size: 13px;
        padding-top: 15px;
        margin-top: 30px;
        color: #ccc;
    }

    @media (max-width: 767px) {
        footer .col-md-4 {
            text-align: center;
            margin-bottom: 30px;
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
                <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="Hansraj Enterprises Logo" class="footer-logo">
                <div class="py-2">
                    <h3>About Hansraj Enterprises</h3>
                    <p>
                        Hansraj Enterprises is your trusted service provider in Bhubaneswar, offering reliable and
                        efficient
                        repair services for Washing Machines, Refrigerators & Air Conditioners. We’re committed to
                        top-notch service with a customer-first approach.
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?= $base_url ?>" class="text-white">Home</a></li>
                    <li class="mb-2"><a href="<?= $base_url ?>#about" class="text-white">About Us</a></li>
                    <li class="mb-2"><a href="<?= $base_url ?>#services" class="text-white">Our Services</a></li>
                    <!-- <li class="mb-2"><a href="#areas">Service Areas</a></li> -->
                    <li class="mb-2"><a href="<?= $base_url ?>#contact" class="text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info + Social -->
            <div class="col-md-4">
                <h3>Contact Us</h3>
                <p>
                    <strong>Address:</strong>
                    Near, Sum Hospital Rd, Kalinganagar, Bhubaneswar, Odisha 751029
                </p>
                <p><strong>Phone:</strong> <a href="tel:+917752083960" class="text-white">+91 77520 83960</a></p>
                <p>
                    <strong>Address:</strong>
                    Near, sector 6 park Cuttack , 753014
                </p>
                <p><strong>Phone:</strong> <a href="tel:+917894606334" class="text-white">+91 78946 06334</a></p>
                
                <p><strong>Email:</strong> <a href="mailto:hansrajenterprises@gmail.com"
                        class="text-white">hansrajenterprises@gmail.com</a></p>

                <div class="social-icons d-flex mt-3">
                    <a href="<?= $base_url ?>"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $base_url ?>"><i class="bi bi-instagram"></i></a>
                    <a href="<?= $base_url ?>"><i class="bi bi-youtube"></i></a>
                    <a href="<?= $base_url ?>"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bottom-footer mt-4">
            <p class="mb-0">
                &copy;
                <script>document.write(new Date().getFullYear());</script> Hansraj Enterprises | All Rights Reserved |
                Website Design & Maintain By: <a href="https://coralwebtechnology.com"
                    class="text-white text-decoration-none" target="_blank">coralwebtechnology.com</a>
            </p>
        </div>
    </div>
</footer>