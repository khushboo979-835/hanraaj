<?php
include_once __DIR__ . "/common/config.php";
include_once __DIR__ . "/common/locations-data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Our Service Locations in Bhubaneswar | Hansraj Enterprises</title>
    <meta name="description" content="Explore Hansraj Enterprises doorstep appliance repair service hubs across Bhubaneswar including KIIT Patia, Nexus Esplanade, ITER SOA, Pokhariput, Unit 1, Capital Hospital & Hi-Tech.">
    <meta name="keywords" content="appliance repair locations bhubaneswar, hansraj enterprises locations, patia, rasulgarh, pokhariput, unit 1, khandagiri">
    <meta name="author" content="Hansraj Enterprises">
    <link rel="canonical" href="https://hanraaj.vercel.app/locations">

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
</head>

<body>
    <?php include $base_path . "common/header.php"; ?>

    <!-- HERO SECTION -->
    <section class="py-5 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #0b1f3a 0%, #0387cf 100%); min-height: 380px; display: flex; align-items: center;">
        <div class="container py-4 text-center">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-3">?? Complete Coverage</span>
            <h1 class="display-4 fw-bold mb-3">Our Service Locations in Bhubaneswar</h1>
            <p class="lead max-w-700 mx-auto text-light" style="opacity: 0.95;">
                Find doorstep repair services for Washing Machines, Refrigerators, ACs & Microwave Ovens in your neighborhood with 30-minute arrival.
            </p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="tel:+9178579023438" class="btn btn-warning btn-lg px-4 py-3 fw-bold rounded-pill text-dark shadow">
                    ?? Helpline: 78579023438
                </a>
                <a href="https://wa.me/9178579023438" target="_blank" class="btn btn-success btn-lg px-4 py-3 fw-bold rounded-pill shadow">
                    ?? WhatsApp Booking
                </a>
            </div>
        </div>
    </section>

    <!-- LOCATIONS DIRECTORY -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <h2 class="fw-bold">Select Your Nearest Location</h2>
                <p class="text-muted">Click on your location to view nearby landmarks, dedicated technician availability, and book instant local doorstep service.</p>
            </div>

            <div class="row g-4">
                <?php foreach ($service_locations as $slug => $loc_item): ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white hover-elevate transition-all d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold">
                                <i class="bi bi-geo-alt-fill me-1 text-danger"></i> PIN: <?= htmlspecialchars($loc_item['pincode']) ?>
                            </div>
                            <span class="badge bg-success-subtle text-success small fw-semibold">
                                <i class="bi bi-lightning-fill"></i> 30 Min Arrival
                            </span>
                        </div>

                        <h4 class="fw-bold mb-2">
                            <a href="<?= $base_url ?>location/<?= $slug ?>.html" class="text-dark text-decoration-none">
                                <?= htmlspecialchars($loc_item['name']) ?>
                            </a>
                        </h4>

                        <p class="text-muted small mb-3 flex-grow-1">
                            <?= htmlspecialchars($loc_item['desc']) ?>
                        </p>

                        <div class="mb-3">
                            <strong class="d-block small text-dark mb-1">Key Landmarks Covered:</strong>
                            <div class="d-flex flex-wrap gap-1">
                                <?php foreach (array_slice($loc_item['landmarks'], 0, 3) as $lm): ?>
                                <span class="badge bg-light text-secondary border small"><?= htmlspecialchars($lm) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="pt-3 border-top d-flex gap-2">
                            <a href="<?= $base_url ?>location/<?= $slug ?>.html" class="btn btn-primary flex-grow-1 rounded-pill fw-semibold">
                                View Location Details <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="<?= htmlspecialchars($loc_item['map_url']) ?>" target="_blank" class="btn btn-outline-secondary rounded-circle" title="Open in Google Maps">
                                <i class="bi bi-map"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include $base_path . "common/footer.php"; ?>
</body>
</html>
