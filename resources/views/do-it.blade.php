<!DOCTYPE html>
<html>
    <head>
        <title>SaaS as a service</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
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
                color: #777;
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }

            a {
                color: #B0BeE5;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{ $startup }} for {{ $word }}</div>
                <div class="quote">SaaSaaS from <a href="http://tighten.co/">Tighten</a> on <a href="http://github.com/tightenco/saasaas">Github</a></div>
            </div>
        </div>
    </body>
</html>
