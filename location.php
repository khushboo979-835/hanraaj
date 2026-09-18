<?php
include_once __DIR__ . "/common/config.php";
include_once __DIR__ . "/common/locations-data.php";

$loc_slug = isset($_GET['loc']) ? trim($_GET['loc']) : 'kiit-road-patia';
if (!isset($service_locations[$loc_slug])) {
    $loc_slug = 'kiit-road-patia';
}

$loc = $service_locations[$loc_slug];
$loc_name = htmlspecialchars($loc['name']);
$loc_title = htmlspecialchars($loc['title']);
$loc_area = htmlspecialchars($loc['area']);
$loc_desc = htmlspecialchars($loc['desc']);
$loc_pincode = htmlspecialchars($loc['pincode']);
$loc_map_url = htmlspecialchars($loc['map_url']);
$loc_embed = urlencode($loc['embed_q']);
$loc_tech = htmlspecialchars($loc['tech_count']);
$loc_timing = htmlspecialchars($loc['timing']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title><?= $loc_title ?> | Hansraj Enterprises</title>
    <meta name="description" content="<?= $loc_desc ?> Call 78579023438 for same-day home service.">
    <meta name="keywords" content="appliance repair <?= $loc_name ?>, washing machine repair <?= $loc_name ?>, ac repair <?= $loc_name ?>, fridge repair <?= $loc_name ?>, microwave repair <?= $loc_name ?>, Hansraj Enterprises">
    <meta name="author" content="Hansraj Enterprises">
    <link rel="canonical" href="https://hanraaj.vercel.app/location/<?= $loc_slug ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?= $base_url ?>assets/images/logo/logo.png" type="image/x-icon">

    <!-- Preload for faster fetch -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="<?= $base_url ?>assets/css/style.css" as="style">

    <!-- Actual CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Open Graph Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $loc_title ?> | Hansraj Enterprises">
    <meta property="og:url" content="https://hanraaj.vercel.app/location/<?= $loc_slug ?>">
    <meta property="og:description" content="<?= $loc_desc ?>">
    <meta property="og:image" content="<?= $base_url ?>assets/images/about/washing-machine.jpg">

    <!-- Schema.org JSON-LD LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "HomeAndConstructionBusiness",
      "name": "Hansraj Enterprises - <?= $loc_name ?>",
      "image": "https://hanraaj.vercel.app/assets/images/logo/logo.png",
      "telephone": "+9178579023438",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= $loc_area ?>",
        "addressLocality": "Bhubaneswar",
        "addressRegion": "Odisha",
        "postalCode": "<?= $loc_pincode ?>",
        "addressCountry": "IN"
      },
      "url": "https://hanraaj.vercel.app/location/<?= $loc_slug ?>",
      "openingHours": "Mo-Su 08:00-21:00",
      "priceRange": "??",
      "areaServed": "<?= $loc_name ?>"
    }
    </script>
</head>

<body>
    <?php include $base_path . "common/header.php"; ?>

    <!-- LOCATION HERO SECTION -->
    <section class="location-hero py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0b1f3a 0%, #0387cf 100%); color: #fff; min-height: 480px; display: flex; align-items: center;">
        <div class="container py-4 position-relative" style="z-index: 2;">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 mb-3 rounded-pill bg-white text-dark fw-bold shadow-sm" style="font-size: 0.88rem;">
                        <span class="text-primary"><i class="bi bi-geo-alt-fill text-danger"></i> Verified Doorstep Hub:</span> <?= $loc_name ?> (PIN: <?= $loc_pincode ?>)
                    </div>
                    <h1 class="display-5 fw-bold text-white mb-3">
                        Expert Home Appliance Repair in <span class="text-warning"><?= $loc_name ?></span>
                    </h1>
                    <p class="lead text-light mb-4" style="max-width: 700px; font-size: 1.15rem; opacity: 0.95;">
                        <?= $loc_desc ?>
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="tel:+9178579023438" class="btn btn-warning btn-lg px-4 py-3 fw-bold text-dark rounded-pill shadow">
                            <i class="bi bi-telephone-fill me-2"></i> Call Now: 78579023438
                        </a>
                        <a href="https://wa.me/9178579023438?text=Hello%20Hansraj%20Enterprises,%20I%20need%20appliance%20repair%20service%20in%20<?= urlencode($loc_name) ?>." target="_blank" class="btn btn-success btn-lg px-4 py-3 fw-bold text-white rounded-pill shadow">
                            <i class="bi bi-whatsapp me-2"></i> WhatsApp Booking
                        </a>
                        <a href="<?= $loc_map_url ?>" target="_blank" class="btn btn-outline-light btn-lg px-4 py-3 fw-bold rounded-pill">
                            <i class="bi bi-geo-alt me-2"></i> Open in Maps
                        </a>
                    </div>

                    <div class="row g-3 text-white-50 small mt-2">
                        <div class="col-auto d-flex align-items-center gap-2">
                            <i class="bi bi-clock-history text-warning fs-5"></i> <span>Timing: <?= $loc_timing ?></span>
                        </div>
                        <div class="col-auto d-flex align-items-center gap-2">
                            <i class="bi bi-people-fill text-warning fs-5"></i> <span>Team: <?= $loc_tech ?></span>
                        </div>
                        <div class="col-auto d-flex align-items-center gap-2">
                            <i class="bi bi-shield-check text-warning fs-5"></i> <span>90-Day Service Warranty</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-left">
                    <div class="card border-0 rounded-4 shadow-lg p-4 bg-white text-dark">
                        <div class="text-center mb-3">
                            <span class="badge bg-primary px-3 py-2 text-uppercase fw-bold">Instant Service Request</span>
                            <h4 class="fw-bold mt-2 mb-1">Book a Technician</h4>
                            <p class="text-muted small mb-0">Doorstep arrival within 30-45 mins in <?= $loc_name ?></p>
                        </div>
                        <form id="locQuickForm" onsubmit="submitLocForm(event)">
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Your Name</label>
                                <input type="text" id="loc_cust_name" class="form-control" placeholder="Enter full name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Contact Number</label>
                                <input type="tel" id="loc_cust_phone" class="form-control" placeholder="10-digit mobile number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Required Service</label>
                                <select id="loc_cust_service" class="form-select" required>
                                    <option value="Washing Machine Repair">Washing Machine Repair</option>
                                    <option value="Refrigerator / Fridge Repair">Refrigerator / Fridge Repair</option>
                                    <option value="AC Repair & Servicing">AC Repair & Servicing</option>
                                    <option value="Microwave Oven Repair">Microwave Oven Repair</option>
                                </select>
                            </div>
                            <input type="hidden" id="loc_selected_area" value="<?= $loc_name ?>">
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold rounded-pill shadow-sm">
                                <i class="bi bi-send-fill me-1"></i> Book Immediate Visit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST BADGES BAR -->
    <section class="py-3 bg-light border-bottom">
        <div class="container">
            <div class="row text-center gy-2">
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-stopwatch text-primary fs-4"></i>
                        <div class="text-start">
                            <strong class="d-block text-dark small">30 Min Response</strong>
                            <span class="text-muted" style="font-size: 0.75rem;">Fastest in <?= $loc_name ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-award text-primary fs-4"></i>
                        <div class="text-start">
                            <strong class="d-block text-dark small">Genuine Spare Parts</strong>
                            <span class="text-muted" style="font-size: 0.75rem;">100% Original Brand Parts</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-person-check text-primary fs-4"></i>
                        <div class="text-start">
                            <strong class="d-block text-dark small">Background-Verified</strong>
                            <span class="text-muted" style="font-size: 0.75rem;">Certified Local Engineers</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-shield-check text-primary fs-4"></i>
                        <div class="text-start">
                            <strong class="d-block text-dark small">Transparent Pricing</strong>
                            <span class="text-muted" style="font-size: 0.75rem;">No Hidden Charges</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES OFFERED IN THIS LOCATION -->
    <section class="py-5">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase">Our Specialties</span>
                <h2 class="fw-bold mt-2">Appliance Repair Services in <span class="text-primary"><?= $loc_name ?></span></h2>
                <p class="text-muted">Hansraj Enterprises delivers expert diagnostic and repair services for all major brands including LG, Samsung, Whirlpool, Godrej, IFB, Bosch, Daikin, Voltas, and Panasonic.</p>
            </div>

            <div class="row g-4">
                <!-- Washing Machine Card -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="card h-100 border-0 rounded-4 shadow-sm hover-elevate transition-all overflow-hidden">
                        <img src="<?= $base_url ?>assets/images/services/3.jpg" class="card-img-top" alt="Washing Machine Repair <?= $loc_name ?>" style="height: 190px; object-fit: cover;">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="fw-bold mb-2">Washing Machine Repair</h5>
                            <p class="text-muted small mb-3 flex-grow-1">
                                Complete fixes for front load, top load & semi-automatic machines: spin failure, drum noise, drainage block, motor issues & PCB board repairs in <?= $loc_name ?>.
                            </p>
                            <ul class="list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Drum & Spin Issues</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Water Drainage Faults</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Motherboard / PCB Repair</li>
                            </ul>
                            <a href="<?= $base_url ?>washing-machine.html" class="btn btn-outline-primary w-100 rounded-pill fw-semibold">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Refrigerator Card -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 rounded-4 shadow-sm hover-elevate transition-all overflow-hidden">
                        <img src="<?= $base_url ?>assets/images/services/2.jpg" class="card-img-top" alt="Refrigerator Repair <?= $loc_name ?>" style="height: 190px; object-fit: cover;">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="fw-bold mb-2">Refrigerator Repair</h5>
                            <p class="text-muted small mb-3 flex-grow-1">
                                Expert cooling fixes, compressor repair, thermostat replacement, gas charging and defrost troubleshooting for single, double door & inverter refrigerators.
                            </p>
                            <ul class="list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Not Cooling / Over Cooling</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Gas Refill & Leakage Check</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Compressor & Relay Fixes</li>
                            </ul>
                            <a href="<?= $base_url ?>fridge-repair.html" class="btn btn-outline-primary w-100 rounded-pill fw-semibold">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- AC Repair Card -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 rounded-4 shadow-sm hover-elevate transition-all overflow-hidden">
                        <img src="<?= $base_url ?>assets/images/services/1.jpg" class="card-img-top" alt="AC Repair <?= $loc_name ?>" style="height: 190px; object-fit: cover;">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="fw-bold mb-2">AC Repair & Servicing</h5>
                            <p class="text-muted small mb-3 flex-grow-1">
                                Split, window and inverter AC installation, jet-pump deep cleaning, gas topping, PCB repairs and cooling maintenance with emergency response.
                            </p>
                            <ul class="list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Jet Pump Deep Servicing</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> R32 / R410A Gas Refilling</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Water Dripping & Noise Fix</li>
                            </ul>
                            <a href="<?= $base_url ?>ac-repair.html" class="btn btn-outline-primary w-100 rounded-pill fw-semibold">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Microwave Repair Card -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 rounded-4 shadow-sm hover-elevate transition-all overflow-hidden">
                        <img src="<?= $base_url ?>assets/images/services/5.avif" class="card-img-top" alt="Microwave Oven Repair <?= $loc_name ?>" style="height: 190px; object-fit: cover;">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="fw-bold mb-2">Microwave Oven Repair</h5>
                            <p class="text-muted small mb-3 flex-grow-1">
                                Convection, grill and solo microwave repair: magnetron replacement, turntable motor, spark issues, touch keypad, and heating failure repairs.
                            </p>
                            <ul class="list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Heating & Sparking Issues</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Magnetron & Capacitor Fix</li>
                                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Touch Panel / Keypad Repair</li>
                            </ul>
                            <a href="<?= $base_url ?>microwave-repair.html" class="btn btn-outline-primary w-100 rounded-pill fw-semibold">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCATION MAP & LANDMARKS SECTION -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase">Area Coverage</span>
                    <h2 class="fw-bold mt-2">Serving Across <span class="text-primary"><?= $loc_name ?></span> & Nearby Areas</h2>
                    <p class="text-muted">
                        Our dedicated technicians are strategically deployed near <?= $loc_name ?> to guarantee the quickest doorstep arrival for urgent repairs.
                    </p>

                    <div class="card border-0 rounded-4 p-4 shadow-sm bg-white mb-4">
                        <h6 class="fw-bold mb-3"><i class="bi bi-pin-map-fill text-danger me-2"></i> Key Landmarks & Coverage Points:</h6>
                        <div class="row g-2">
                            <?php foreach ($loc['landmarks'] as $landmark): ?>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2 p-2 rounded bg-light">
                                    <i class="bi bi-check2-circle text-primary"></i>
                                    <span class="small fw-semibold"><?= htmlspecialchars($landmark) ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?= $loc_map_url ?>" target="_blank" class="btn btn-primary px-4 py-3 rounded-pill fw-bold shadow-sm">
                            <i class="bi bi-geo-alt-fill me-2"></i> Get GPS Directions on Google Maps
                        </a>
                        <a href="tel:+9178579023438" class="btn btn-outline-dark px-4 py-3 rounded-pill fw-bold">
                            <i class="bi bi-telephone-outbound me-2"></i> Call Hub: 78579023438
                        </a>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card border-0 rounded-4 shadow-lg overflow-hidden" style="height: 420px;">
                        <iframe 
                            src="https://maps.google.com/maps?q=<?= $loc_embed ?>&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US IN THIS LOCATION -->
    <section class="py-5">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase">Why Choose Us</span>
                <h2 class="fw-bold mt-2">Why Residents of <?= $loc_name ?> Trust Hansraj Enterprises</h2>
                <p class="text-muted">We combine certified expertise with lightning-fast local doorstep support.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card h-100 border-0 p-4 rounded-4 shadow-sm bg-light">
                        <div class="feature-icon mb-3 text-primary fs-1"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 class="fw-bold">Same-Day Local Visit</h5>
                        <p class="text-muted small mb-0">Our local technicians stationed in <?= $loc_name ?> ensure you don't wait all day for appliance diagnostics.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 p-4 rounded-4 shadow-sm bg-light">
                        <div class="feature-icon mb-3 text-primary fs-1"><i class="bi bi-cash-coin"></i></div>
                        <h5 class="fw-bold">Upfront Price Estimate</h5>
                        <p class="text-muted small mb-0">No surprise bills. You get full inspection breakdown and estimated cost before any repair work commences.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 p-4 rounded-4 shadow-sm bg-light">
                        <div class="feature-icon mb-3 text-primary fs-1"><i class="bi bi-patch-check-fill"></i></div>
                        <h5 class="fw-bold">Post-Service Warranty</h5>
                        <p class="text-muted small mb-0">Every replacement part and repair job is backed by our authentic 30 to 90 days service guarantee.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQS FOR THIS LOCATION -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase">FAQs</span>
                <h2 class="fw-bold mt-2">Frequently Asked Questions in <?= $loc_name ?></h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion shadow-sm rounded-4 overflow-hidden" id="locFaqAccordion">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How quickly can a technician visit my address in <?= $loc_name ?>?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#locFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Our local technicians in <?= $loc_name ?> typically reach your doorstep within <strong>30 to 45 minutes</strong> of your booking confirmation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do you service all appliance brands in <?= $loc_name ?>?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#locFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, we repair and maintain all major brands including LG, Samsung, Whirlpool, IFB, Bosch, Daikin, Voltas, Godrej, Haier, Panasonic, and Lloyd.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What is the inspection or visiting charge?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#locFaqAccordion">
                                <div class="accordion-body text-muted">
                                    We charge a very nominal visiting fee for diagnosis. If you proceed with the suggested repair service, visiting charges are adjusted in the final billing!
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    How can I book an urgent appointment?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#locFaqAccordion">
                                <div class="accordion-body text-muted">
                                    You can instantly call our official helpline at <strong><a href="tel:+9178579023438">78579023438</a></strong> or tap the WhatsApp button to book with your address in <?= $loc_name ?>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ALL OTHER LOCATIONS DIRECTORY GRID -->
    <section class="py-5">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-4">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase">Other Hubs</span>
                <h3 class="fw-bold mt-2">Explore Other Service Locations in Bhubaneswar</h3>
                <p class="text-muted small">We provide doorstep appliance repairs across all prime sectors of Bhubaneswar.</p>
            </div>

            <div class="row g-3">
                <?php foreach ($service_locations as $other_slug => $other_loc): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="<?= $base_url ?>location/<?= $other_slug ?>.html" class="card p-3 rounded-4 border-0 shadow-sm text-decoration-none h-100 d-flex flex-row align-items-center gap-2 <?= ($other_slug === $loc_slug) ? 'bg-primary text-white' : 'bg-light text-dark hover-elevate' ?>">
                        <i class="bi bi-geo-alt-fill <?= ($other_slug === $loc_slug) ? 'text-warning' : 'text-primary' ?> fs-5"></i>
                        <span class="fw-semibold small"><?= htmlspecialchars($other_loc['name']) ?></span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAST CTA BOTTOM BAR -->
    <section class="py-5 text-center text-white" style="background: linear-gradient(135deg, #0387cf 0%, #0b1f3a 100%);">
        <div class="container">
            <h2 class="fw-bold mb-2">Need Immediate Appliance Service in <?= $loc_name ?>?</h2>
            <p class="lead mb-4" style="opacity: 0.9;">Call our certified local technician right now for instant home visit.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="tel:+9178579023438" class="btn btn-warning btn-lg px-5 py-3 fw-bold text-dark rounded-pill shadow">
                    <i class="bi bi-telephone-fill me-2"></i> Call: 78579023438
                </a>
                <a href="https://wa.me/9178579023438?text=Hello%20Hansraj%20Enterprises,%20I%20need%20appliance%20repair%20service%20in%20<?= urlencode($loc_name) ?>." target="_blank" class="btn btn-success btn-lg px-5 py-3 fw-bold rounded-pill shadow">
                    <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
                </a>
            </div>
        </div>
    </section>

    <?php include $base_path . "common/footer.php"; ?>

    <script>
    function submitLocForm(e) {
        e.preventDefault();
        const name = document.getElementById("loc_cust_name").value.trim();
        const phone = document.getElementById("loc_cust_phone").value.trim();
        const service = document.getElementById("loc_cust_service").value;
        const area = document.getElementById("loc_selected_area").value;

        if (!name || !phone) {
            alert("Please fill in all required details.");
            return;
        }

        const msg = `*New Service Booking - ${area}*\n\n` +
                    `*Name:* ${name}\n` +
                    `*Phone:* ${phone}\n` +
                    `*Service:* ${service}\n` +
                    `*Location:* ${area}\n\n` +
                    `Please dispatch a technician.`;

        const waUrl = `https://wa.me/9178579023438?text=${encodeURIComponent(msg)}`;
        window.open(waUrl, '_blank');
    }
    </script>
</body>
</html>
