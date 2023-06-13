<!DOCTYPE html>
<html>

<head>
    <title>Thêm bài viết</title>
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: url("./public/images/anhnen.jpg") no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <h1 class="text-center" style="margin-bottom: 8px;">Thêm bài viết</h1>

    <form method="POST" action="index.php?action=store">
        <div class="form-floating mb-3" style="width: 80%; margin: auto;">
            <input class="form-control" id="title" name="title">
            <label for="floatingTextareaDisabled">Tiêu đề</label>
        </div>
        <div class="form-floating mb-3" style="width: 80%; margin: auto;">
            <textarea class="form-control" id="description" name="description" style="height: 150px"></textarea>
            <label for="floatingTextarea2Disabled">Mô tả</label>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-left: 145px;">Thêm</button>
    </form>
</body>

</html>