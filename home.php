<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
        <style type="text/css">
            .container {
                width: 800px;
                margin: 0 auto;
            }
            .header {
                background-color:white;
                min-height: 50x;
                text-align: center;
            }
            .menu ul {
                padding: 0;
            }
            .menu ul li {
                display: inline-block;
                position: relative;
            }
            .menu ul li a {
                padding: 10px 20px;
                text-decoration: none;
            }
            .footer {
                background-color: lightseagreen;
                min-height: 50px;
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
<body>
    <div class="container">
        <div class="header">
            <h2>Pengolahan Citra Digital</h2>
        <div class="Logo">
            <img src="billiard.jpg" width="400" height="450">
        </div>
        <div class="menu">
            <ul>
                <li><a href="mirror.php">Mirror</a></li>
                <li><a href="cerah.php">Brightness</a></li>
                <li><a href="negasi.php">Negasi</a></li>
                <li><a href="grey.php">Greyscale</a></li>
                <li><a href="hitamputih.php">BlackAndWhite</a></li>
            </ul>
        </div>
        </div>
        <div class="footer">
            <p>Copyright 2019 My Present</p>
        </div>
    </div>
</body>
</html>