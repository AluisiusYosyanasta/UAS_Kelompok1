<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Article</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            background: linear-gradient(to bottom, #ff4e50 50%, #ffffff 50%);
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .title {
            font-family: 'Permanent Marker', cursive;
            font-size: 6rem;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            margin-bottom: 2rem;
            letter-spacing: 5px;
        }
        .card {
            border: none;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.6), 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #ff4e50;
            color: #fff;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 15px;
            text-align: center;
        }
        .card-header img {
            width: 50px;
            border-radius: 50%;
            margin-top: -25px;
        }
        .card-body {
            padding: 2rem;
        }
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-group label {
            color: #ff4e50;
            font-weight: bold;
            position: absolute;
            top: -20px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 0 5px;
        }
        .form-control {
            border: 1px solid #ff4e50;
            border-radius: 5px;
            padding-left: 2.375rem;
        }
        .form-group i {
            position: absolute;
            top: 12px;
            left: 10px;
            color: #ff4e50;
        }
        .btn-upload {
            background-color: #ff4e50;
            color: #fff;
            border-radius: 5px;
            font-weight: bold;
            padding: 10px;
        }
        .btn-upload:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
     <div class="title">
        BLOGSITES
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Upload Article</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('article/ubah/'.$row['title']) ?>" method="POST">
                <div class="form-group">
                    <i class="fas fa-heading"></i>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?= $row['title']; ?>" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-align-left"></i>
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter content" required> <?= $row['content']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-upload btn-block">Upload</button>
            </form>
        </div>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- For FontAwesome Icons -->
</body>
</html>
