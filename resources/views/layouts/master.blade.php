<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">

    @section('seo')
        <title>Great Divide Elevation Map</title>
        <meta name="description" content="Draw elevation profiles for the Great Divide Mountain Bike Route and Tour Divide route." />
        <meta name="keywords" content="great divide elevation profile gdmbr adventure cycling aca bikepacking eat sleep ride" />
    @show

    <title></title>
    <link href="{{ mix('assets/build/css/style.css') }}" rel="stylesheet">
    @yield('header-includes')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-8215888-11', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body class="{{ \App\Helpers\BodyClassHelper::bodyClass() }}">
    @include('partials.nav')
    @yield('content')
    @yield('footer-includes')
</body>
</html>
