<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jigsaw – Static Sites for Laravel Developers</title>

        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{ $page->asset_prefix }}/css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    </head>
    <body class="border-t-3 border-primary full-height flex-col">
        <div class="flex-fit">
            @yield('body')
        </div>
        <footer class="bg-dark text-center p-xs-y-6 p-xs-x-4 text-light-muted text-sm">
            <p>&copy; {{ date('Y') }} <a href="https://tighten.co" class="link-light-muted">Tighten</a></p>
        </footer>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.js"></script>
        <script type="text/javascript">
            docsearch({
                apiKey: '57a7f5b1e4e0a44c7e2f8e96abcbf674',
                indexName: 'jigsaw',
                inputSelector: '#docsearch'
            });
        </script>

    </body>
</html>
