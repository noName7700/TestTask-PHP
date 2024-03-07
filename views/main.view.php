<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Генератор cсылок</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 main-div">
                <h1 class="text-center mt-3">Сокращение ссылок</h1>
                <div class="text-center">
                    Сократите вашу ссылку. Благодаря короткой ссылке вам не придётся видеть длинные url-адреса, занимающие много места.
                </div>
                <div class="d-flex justify-content-center m-3">
                    <input type="text" class="input" id="input-url">
                    <button type="button" class="btn btn-primary" onclick="submit()">Сократить</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="resources/js/main.js"></script>
</html>