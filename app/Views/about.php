<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Pendawa</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
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
                            <a class="nav-link active" aria-current="page" href="<?= base_url('about') ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section class="container px-4 py-5 my-5 text-start">
        <h2>Tentang Villa Pendawa</h2>
        <p>Villa Pendawa adalah destinasi liburan premium yang menawarkan pengalaman tak terlupakan dengan sentuhan
            kemewahan dan kenyamanan. Terletak di lokasi yang menakjubkan, villa kami dirancang untuk memberikan Anda
            pengalaman berlibur yang sempurna. Dengan berbagai fasilitas unggulan, kami berkomitmen untuk menyediakan
            akomodasi yang nyaman dan layanan yang profesional, memastikan setiap tamu merasa seperti di rumah.</p>

        <p>Visi kami adalah menjadi pilihan utama untuk liburan mewah dengan menyediakan fasilitas dan layanan terbaik
            yang memenuhi ekspektasi para tamu kami. Misi kami meliputi menyediakan akomodasi yang nyaman dan elegan,
            menawarkan layanan pelanggan yang ramah dan profesional, serta menjaga lingkungan yang indah dan bersih
            untuk memastikan Anda dapat menikmati liburan dengan ketenangan pikiran.</p>
    </section>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>