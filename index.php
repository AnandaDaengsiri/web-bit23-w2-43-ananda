
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมแปลงลิตรเป็นลูกบาศก์เมตร</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #111, #2b2b2b);
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            width: 400px;
            text-align: center;
            box-shadow: 0 0 20px rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.1);
        }

        h1{
            font-size: 24px;
            margin-bottom: 10px;
            color: #fff;
        }

        h2{
            font-size: 18px;
            margin-bottom: 30px;
            color: #cfcfcf;
        }

        label{
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        input[type="text"]{
            width: 100%;
            padding: 12px;
            border: none;
            outline: none;
            border-radius: 10px;
            background: #222;
            color: white;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #444;
        }

        input[type="text"]:focus{
            border-color: white;
        }

        input[type="submit"]{
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: white;
            color: black;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover{
            background: #d9d9d9;
            transform: translateY(-2px);
        }

        .footer{
            margin-top: 20px;
            color: #999;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>งานที่ 2</h1>
        <h2>อนันดา BIT.2/3 เลขที่ 43</h2>

        <form action="result.php" method="post">
            <label>จำนวนลิตร (L)</label>
            <input type="text" name="p_name" placeholder="กรอกจำนวนลิตร">

            <input type="submit" value="คำนวณ">
        </form>

        <div class="footer">
            โปรแกรมแปลงลิตรเป็นลูกบาศก์เมตร
        </div>
    </div>

</body>
</html>

