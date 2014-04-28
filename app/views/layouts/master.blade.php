<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

     <title>
     @section('title')
     &#58;&#58;   LVS
     @show
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::style('css/bootstrap-theme.min.css')}}
    {{ HTML::style('css/main.css')}}
    {{ HTML::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


@yield('content')



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ URL::asset("js/vendor/jquery-1.10.1.min.js") }}"><\/script>')</script>
{{ HTML::script('js/vendor/bootstrap.min.js')}}
{{ HTML::script('js/main.js')}}

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
