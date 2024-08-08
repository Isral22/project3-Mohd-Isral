<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Pendawa</title>
    <!-- Bootstrap CSS -->
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
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/post/new') ?>" class="btn btn-primary mr-3">New Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container px-4 py-5 my-5 text-start">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group mb-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Post title" required>
            </div>
            <div class="form-group mb-2">
                <textarea name="content" class="form-control" cols="30" rows="10"
                    placeholder="Write a great post!"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
                <button type="submit" name="status" value="draft" class="btn btn-warning">Save</button>
            </div>
        </form>
    </div>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>