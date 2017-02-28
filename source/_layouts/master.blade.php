<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jigsaw – Static Sites for Laravel Developers</title>

        <link rel="apple-touch-icon" sizes="57x57" href="{{ $asset_prefix }}/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ $asset_prefix }}/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ $asset_prefix }}/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ $asset_prefix }}/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ $asset_prefix }}/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ $asset_prefix }}/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ $asset_prefix }}/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ $asset_prefix }}/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ $asset_prefix }}/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="{{ $asset_prefix }}/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ $asset_prefix }}/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="{{ $asset_prefix }}/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ $asset_prefix }}/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="{{ $asset_prefix }}/manifest.json">
        <link rel="mask-icon" href="{{ $asset_prefix }}/safari-pinned-tab.svg" color="#309e74">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{ $asset_prefix }}/css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    </head>
    <body class="border-t-3 border-primary full-height flex-col">
        <div class="flex-fit">
            @yield('body')
        </div>
        <footer class="bg-dark text-center p-xs-y-6 p-xs-x-4 text-light-muted text-sm">
            <p>&copy; 2017 <a href="http://tighten.co" class="link-light-muted">Tighten Co.</a></p>
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
