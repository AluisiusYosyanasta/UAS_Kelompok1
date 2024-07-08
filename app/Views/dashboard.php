<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #dc3545;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        .nav-link {
            color: #fff;
        }
        .nav-link.active {
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .article-card {
            margin-bottom: 20px;
        }
        .article-card img {
            max-width: 100%;
            height: auto;
        }
        .article-card .card-body {
            padding: 10px;
        }
        .article-card .card-title {
            font-size: 18px;
            font-weight: bold;
        }
        .article-card .card-text {
            font-size: 14px;
            color: #666;
        }
        .search-bar {
            width: 300px;
            margin-right: 10px;
        }
        .btn-upload {
            background-color: #28a745;
            color: #fff;
        }
        .btn-login, .btn-register {
            color: #fff;
            margin-left: 10px;
        }
        .btn-login:hover, .btn-register:hover {
            color: #ddd;
        }
        .my-article-list {
            margin-top: 40px;
        }
        .my-article-card {
            margin-bottom: 10px;
        }
        .my-article-card .card-body {
            padding: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">BLOGSITES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">For You</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="upload">Upload Article</a>
                </li>
            </ul>
            <form class="form-inline">
                <a class="btn btn-light" type="submit" href="/">Log out</a>
            </form>
        </div>
    </nav>
    <div class="container content">
        <div class="row">
            <div class="col-md-9">
                <h2>Artikel Terpopuler</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card article-card">
                            <div class="card-body">
                                <h5 class="card-title">Lingkup Materi Program Pemberdayaan</h5>
                                <p class="card-text">15 Mei 2023 | Kelas 12</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card article-card">
                            <div class="card-body">
                                <h5 class="card-title">Bentuk Transaksi pada Perusahaan Dagang</h5>
                                <p class="card-text">23 Mei 2023 | Kelas 12</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card article-card">
                            <div class="card-body">
                                <h5 class="card-title">Teori Pertumbuhan Ekonomi Menurut W.W.</h5>
                                <p class="card-text">17 Mei 2023 | Kelas 11</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card article-card">
                            <div class="card-body">
                                <h5 class="card-title">Peradaban Tiongkok Kuno: Bentuk</h5>
                                <p class="card-text">29 Mei 2023 | Kelas 10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-article-list">
                <h4>My Article List</h4>
                <?php foreach ($dataArtikel as $row) : ?>
                    <div class="card my-article-card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['title']; ?></h5>
                            <p class="card-text"><?= $row['content']; ?></p>
                            <a class="card-text" href="<?= base_url('article/update/'.$row['title'])?>">Update</a>
                            <a class="card-text" href="<?= base_url('article/delete/'.$row['title'])?>">Delete</a>
                        </div>
                    </div>
                <?php endforeach?>
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
