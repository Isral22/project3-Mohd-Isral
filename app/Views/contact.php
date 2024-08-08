<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Villa Pendawa</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
    .map-container {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
                <!-- Logo Image -->
                <img src="<?= base_url('../img/pendawa.png ') ?>" alt="Logo" width="30" height="30" class="navbar-logo">
                <!-- Text -->
                <span class="ms-3">Villa Pendawa</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="w-100 d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('contact') ?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container px-4 py-5 my-5 text-start">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Please fill out the form below to get in touch with us.</p>
                <form action="<?= base_url('contact/submit') ?>" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Our Location</h2>
                <div class="map-container">
                    <!-- Ganti URL di bawah ini dengan link embed peta Google Maps yang sesuai -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253711.25197576726!2d106.56552877812494!3d-6.49147989999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c2c94c0fe9f3%3A0x6de55c236f31cc96!2sPondok%20Pendawa!5e0!3m2!1sen!2sid!4v1723058829167!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>