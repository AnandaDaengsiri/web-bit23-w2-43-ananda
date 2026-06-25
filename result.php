
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณ</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background: linear-gradient(135deg,#111,#2b2b2b);
            color:white;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .container{
            width:400px;
            padding:40px;
            text-align:center;
            background:rgba(255,255,255,0.05);
            border-radius:20px;
            backdrop-filter:blur(10px);
            box-shadow:0 0 20px rgba(255,255,255,0.1);
        }

        h1{
            margin-bottom:20px;
        }

        .result{
            font-size:20px;
            margin:15px 0;
            color:#ddd;
        }

        .answer{
            font-size:28px;
            font-weight:bold;
            color:#fff;
            margin:20px 0;
        }

        a{
            display:inline-block;
            margin-top:20px;
            padding:10px 20px;
            background:white;
            color:black;
            text-decoration:none;
            border-radius:10px;
            font-weight:bold;
            transition:0.3s;
        }

        a:hover{
            background:#d9d9d9;
        }
    </style>
</head>
<body>

<div class="container">

    <?php
        $liter = $_POST["l_name"];

        $cubic_meter = $liter / 1000;
    ?>

    <h1>ผลการคำนวณ</h1>

    <div class="result">
        จำนวนลิตร : <?php echo $liter; ?> ลิตร
    </div>

    <div class="answer">
        <?php echo $cubic_meter; ?> ลูกบาศก์เมตร
    </div>

    <a href="index.php">กลับหน้าแรก</a>

</div>

</body>
</html>