<?php
/**
 * Vasavi Plast Industries - Official Homepage Redesign Concept
 * Single-Page Corporate Industrial Website
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <title><?= htmlspecialchars(SITE_TITLE) ?></title>
    <meta name="description" content="<?= htmlspecialchars(SITE_DESCRIPTION) ?>">
    <meta name="keywords" content="Vasavi Plast Industries, PVC pipes, uPVC pipes, plumbing pipes, PVC conduits, threaded pipes, Guntakal, Andhra Pradesh, PVC pipe manufacturer">
    <meta name="author" content="Vasavi Plast Industries">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars(SITE_TITLE) ?>">
    <meta property="og:description" content="<?= htmlspecialchars(SITE_DESCRIPTION) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:locale" content="en_IN">

    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#252525">

    <!-- Google Fonts: Manrope (Headings) & Inter (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 Free Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body id="pageTop">

    <!-- Section 01: Header and Navigation -->
    <?php include __DIR__ . '/components/header.php'; ?>

    <main id="mainContent">
        <!-- Section 02: Hero Section -->
        <?php include __DIR__ . '/components/hero.php'; ?>

        <!-- Section 03: About Vasavi -->
        <?php include __DIR__ . '/components/about.php'; ?>

        <!-- Section 04: Product Portfolio -->
        <?php include __DIR__ . '/components/products.php'; ?>

        <!-- Section 05: Applications -->
        <?php include __DIR__ . '/components/applications.php'; ?>

        <!-- Section 06: Manufacturing -->
        <?php include __DIR__ . '/components/manufacturing.php'; ?>

        <!-- Section 07: Quality -->
        <?php include __DIR__ . '/components/quality.php'; ?>

        <!-- Section 08: Enquiry CTA -->
        <?php include __DIR__ . '/components/enquiry-cta.php'; ?>

        <!-- Section 09: Contact -->
        <?php include __DIR__ . '/components/contact.php'; ?>
    </main>

    <!-- Section 10: Footer -->
    <?php include __DIR__ . '/components/footer.php'; ?>

    <!-- Core JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
