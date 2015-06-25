<!DOCTYPE html>
<html>
    <head>
        <title>SaaS as a service</title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

        <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,600" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #b0bec5;
                display: table;
                font-family: 'Roboto Condensed';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                color: #666;
                font-size: 2.25rem;
                margin-bottom: 2.5rem;
            }

                .title strong {
                    color: #606060;
                    font-weight: 600;
                }

            .attribution {
                font-size: 1rem;
            }

            @media only screen and (min-width: 500px) {
                .title {
                    font-size: 6rem;
                }

                .attribution {
                    font-size: 1.5rem;
                }
            }

            a {
                color: #b0bee5;
            }

            .url-for-screenshots {
                font-size: 75%;
            }

            .actions {
                color: #909ecf;
                display: block;
                margin-top: 2rem;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><strong>{{ $startup }}</strong> for <strong>{{ $word }}</strong></div>
                <div class="attribution">SaaSaaS from <a href="http://tighten.co/">Tighten</a> on <a href="http://github.com/tightenco/saasaas">Github</a><br>
                <span class="url-for-screenshots">(http://saasaas.tighten.co)</span></div>
                <div class="actions"><a href="{{ url() }}">Pivot (try again)</a> | <a href="http://twitter.com/home?status={{ urlencode("We're pivoting! We're now going to be $startup for $word. - Generate your own pivot at http://saasaas.tighten.co/") }}">Tweet this</a></div>
            </div>
        </div>
        
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53203205-3', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>
