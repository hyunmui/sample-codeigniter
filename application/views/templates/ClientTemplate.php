<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $viewTitle ?></title>
    <link href="/public/css/base.css" rel="stylesheet" />

    <!-- Frontend Libraries -->
    <link href="/public/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <script src="/public/lib/jquery/dist/jquery.min.js"></script>
    <script src="/public/lib/popper.js/dist/umd/popper.min.js"></script>
    <script src="/public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="container">
        
    </header>
    <main class="container">
        <?= $templateMain ?>
    </main>
    <footer>
    </footer>
</body>

</html>