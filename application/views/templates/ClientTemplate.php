<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $viewTitle ?></title>
    <link href="/public/css/base.css" rel="stylesheet" />

    <!-- Frontend Libraries -->
    <link href="/public/lib/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <script src="/public/lib/lib/jquery/jquery-3.5.1.min.js"></script>
    <script src="/public/lib/lib/bootstrap/js/popper.min.js"></script>
    <script src="/public/lib/lib/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="container">
        <h1><?= $galleryName ?></h1>
    </header>
    <main class="container">
        <?= $templateMain ?>
    </main>
    <footer>
    </footer>
</body>

</html>