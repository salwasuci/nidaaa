<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: linear-gradient(to right, #ffdde1, #ee9ca7);
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        h1 {
            font-size: 3rem;
            animation: bounce 2s infinite alternate;
        }
        @keyframes bounce {
            0% { transform: translateY(0); }
            100% { transform: translateY(-10px); }
        }
        .button {
            background: #ff5e78;
            border: none;
            padding: 15px 30px;
            font-size: 1rem;
            color: white;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: 0.3s;
        }
        .button:hover {
            background: #ff1e42;
        }
    </style>
</head>
<body>
    <h1>🎉 Happy Birthday,Teh Nida! 🎂</h1>
    <button class="button" onclick="nextPage()">Lihat Ucapan 🎊</button>
    <script>
        function nextPage() {
            window.location.href = "ucapan.php";
        }
    </script>
</body>
</html>
