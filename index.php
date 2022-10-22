<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Download Center</title>
    <style>
        .container {
            width: 60%;
            margin: 5% auto 0;
            background-color: #f0f0f0;
            padding: 2% 5%;
            border-radius: 10px
        }

        ul {
            padding-left: 20px;
        }

            ul li {
                line-height: 2.3
            }

        a {
            color: #20a53a
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>XXY's Download Center</h1>
        <div>
            <?php  
                $file = scandir('files/');
                // echo " <pre>";
                $file = array_slice($file,2);

                for ($i = 0; $i < count($file); $i++) {
                    echo "<a href='./files/" . strval($file[$i]) . "'>" . strval($file[$i]) . "</a>";
                    echo "<br>";
                }
?>
        </div>
    </div>
</body>
</html>