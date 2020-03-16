<?php include 'functions.php'; ?>

<html>
    <head>
        <title><?php getName(); ?></title>
        <link rel="stylesheet" type="text/css" href="/style.css" />
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="app">
            <div class="flex flex-wrap items-center h-25">
                <?php render(); ?>
            </div>
        </div>
    </body>
</html>
