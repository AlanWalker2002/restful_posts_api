<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa bài viết</title>
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
    </style>
</head>
<body>
    <h1 class="text-center">Chỉnh sửa bài viết</h1>

    <form method="POST" action="index.php?action=update&id=<?php echo $post['id']; ?>">
        <div class="form-floating mb-3" style="width: 80%; margin: auto;">
            <input class="form-control" id="title" name="title" value="<?php echo $post['title']; ?>">
            <label for="floatingTextareaDisabled">Tiêu đề</label>
        </div>
        <div class="form-floating mb-3" style="width: 80%; margin: auto;">
            <textarea class="form-control" id="description" name="description" style="height: 150px;"><?php echo $post['description']; ?></textarea>
            <label for="floatingTextarea2Disabled">Mô tả</label>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-left: 145px; margin-bottom: 16px;">Cập nhật</button>
    </form>

    <a href="index.php" style="margin-left: 145px;">Quay lại danh sách</a>

    <script src="main.js"></script>
</body>
</html>
