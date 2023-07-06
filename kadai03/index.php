<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>書籍登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">書籍一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ブックマークアプリ</legend>
                <label>書籍名：<input type="text" name="name"></label><br>
                <label>URL：<input type="text" name="url"></label><br>
                <label><textarea name="content" rows="4" cols="40"></textarea></label><br>
                <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>
</body>

</html>
