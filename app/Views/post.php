<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Villa Pendawa</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
                <!-- Logo Image -->
                <img src="<?= base_url('../img/pendawa.png ') ?>" alt="Logo" alt="" width="30" height="30"
                    class="navbar-logo">
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
                            <a class="nav-link active" aria-current="page" href="<?= base_url('post') ?>">Blog</a>
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
    <div class="container my-5 px-4 py-5 my-5 text-start">
        <div class="row">
            <?php foreach ($posts as $post) : ?>
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <h5 class="h5"><a href="/post/<?=$post['slug'] ?>"><?= $post['title'] ?></a></h5>
                    <p><?= substr($post['content'], 0,120) ?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    </footer>
    </div>
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>