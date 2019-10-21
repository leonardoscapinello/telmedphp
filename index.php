<?php require_once("./internal/functions/initialize.php"); ?>
<html lang="en">
<head>
    <base href="http://localhost/telmedphp/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telmed Interface</title>
    <link href="static/stylesheet/skin.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="wrapper">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col col-3">
                    <div class="branding">
                        <img src="static/images/telmed.jpg" alt="Telmed"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="container">
            <ul class="nav">
                <li><a href="#"><i class="far fa-home"></i> Home</a></li>
                <li><a href="./appointments/my-list"><i class="far fa-calendar-check"></i> agendamentos</a></li>
                <li><a href="./doctors/my-favorites"><i class="far fa-user-md"></i> Médicos</a></li>
                <li><a href="./appointments/my-last"><i class="far fa-user-md"></i> Últimas consultas</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <?php load_module(); ?>
        </div>
    </div>
</div>
</body>
</html>