<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Vad har Stockholm (stad) för öppettider?</title>
        <meta name="description" content="stockholm-oppettider.se ger Stockholms öpetider, utan några konstigheter!">
        <style>
            html, body { height: 100%; background-color: #90c0de; overflow: hidden; }
            h1 {
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                margin: -110px 0 0 0;
                height: 220px;
                text-align: center;
                color: #1c7bb7;
                font-family: Arial;
                font-size: 160px;
                line-height: 227px;
                font-weight: bold;
            }

            /* Thanks to https://unindented.org/articles/github-ribbon-using-css-transforms/ */
            .ribbon {
                background-color: #000;
                overflow: hidden;
                white-space: nowrap;
                position: fixed;
                right: -50px;
                top: 40px;
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-box-shadow: 0 0 10px #888;
                -moz-box-shadow: 0 0 10px #888;
                box-shadow: 0 0 10px #888;
            }
            .ribbon a {
                border: 1px solid #fff;
                color: #fff;
                display: block;
                font: bold 81.25% 'Helvetica Neue', Helvetica, Arial, sans-serif;
                margin: 1px 0;
                padding: 10px 50px;
                text-align: center;
                text-decoration: none;
                text-shadow: 0 0 5px #444;
            }
        </style>
    </head>
    <body>
        <?php
            $day = date('D');
            $opening_hours = '10.00 - 20.00';
            
            if($day == 'Sat' || $day == 'Sun') {
                $opening_hours = '10.00 - 18.00';
            }
        ?>
        <h1><?php echo $opening_hours; ?></h1>

        <div class="ribbon">
            <a href="https://github.com/jontek2/stockholm-oppettider">Get me on GitHub</a>
        </div>
    </body>
</html>
