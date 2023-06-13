<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hiển thị bài viết</title>
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: url("./public/images/anhnen.jpg") no-repeat;
            background-size: cover;
        }

        a {
            text-decoration: none;
        }

        b {
            border: 1px solid #dedede;
            padding: 6px 12px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Hiển thị bài viết</h1>

    <div class="card" style="width: 95%; margin: 16px auto;">
        <div class="card-body">
            <div style="margin-bottom: 12px;">
                <b><?= $post['id'] ?></b>   
            </div>
            <div>
                <h5 class="card-title"><?= $post['title'] ?></h5>
                <p class="card-text"><?= $post['description'] ?></p>
            </div>
        </div>
    </div>

    <a href="index.php" style="margin-left: 36px;">Quay lại danh sách bài viết</a>
</body>

</html>