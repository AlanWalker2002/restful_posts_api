<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            position: relative;
        }

        a:first-child::after {
            display: none;
        }

        a::after {
            content: "";
            display: block;
            height: 70%;
            background-color: white;
            width: 1px;
            position: absolute;
            top: 0;
            left: -11px;
            transform: translateY(30%);
        }

        i {
            font-size: 14px;
        }

        .link {
            margin: 8px;
        }
    </style>
    <title>Danh sách bài viết</title>
</head>

<body>
    <h1 class="text-center">Danh sách bài viết</h1>

    <a href="index.php?action=create" style="margin-left: 36px; text-align: right;">
        Thêm bài viết
    </a>

    <table class="table table-dark table-striped table-active" style="width: 95%; margin: 16px auto;">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td scope="row"><?php echo $post['id']; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['description']; ?></td>
                    <td>
                        <a href="index.php?action=show&id=<?php echo $post['id']; ?>" class="link">
                            Hiển thị
                        </a>

                        <a href="index.php?action=edit&id=<?php echo $post['id']; ?>" class="link">
                            Sửa
                        </a>

                        <a href="index.php?action=delete&id=<?php echo $post['id']; ?>" class="link">
                            Xóa
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>