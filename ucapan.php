<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday, Nida!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: linear-gradient(to right, #ffdde1, #ee9ca7);
            color: #fff;
            overflow: hidden;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        h1 {
            font-size: 2.5rem;
            animation: bounce 2s infinite alternate;
        }
        @keyframes bounce {
            0% { transform: translateY(0); }
            100% { transform: translateY(-10px); }
        }
        .container {
            max-width: 700px;
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        p {
            font-size: 1.2rem;
            margin: 10px 0;
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
        .confetti {
            position: absolute;
            top: -10px;
            width: 10px;
            height: 10px;
            background: #fff;
            opacity: 0.7;
            border-radius: 50%;
            animation: fall 4s linear infinite;
        }
        @keyframes fall {
            0% { transform: translateY(0); }
            100% { transform: translateY(100vh); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 Happy Birthday, Teh Nida! 🎂</h1>
        <p>Teh nidaaa, selamat ulang tahuuun!✨ Dunia jadi lebih cerah sejak kamu hadir, dan aku bersyukur banget bisa kenal kamu!</p>
        <p>Semoga semua impianmu tercapai, kebahagiaan selalu nyangkut di hidupmu, dan rezekimu ngalir kayak diskon Shopee pas tanggal kembar!✨</p>
        <p>Jangan lupa nikmatin harimu, ketawa yang banyak, dan inget kamu tetep imut kok (di mata mama mu, kalau di mataku sih… ya lumayan lah 🤣).</p>
        <p>Love you, Teteh!💕 Semoga harimu secerah senyum kamu! 🥰</p>
        <button class="button" onclick="playMusic()">Play Music 🎶</button>
</div>
<audio id="birthdaySong" src="https://www.myinstants.com/media/sounds/happy-birthday-song.mp3"></audio>

<script>
    function playMusic() {
        document.getElementById("birthdaySong").play();
        generateConfetti();
    }

    function generateConfetti() {
        for (let i = 0; i < 1000; i++) { // Confetti jadi 1000!
            let confetti = document.createElement("div");
            confetti.classList.add("confetti");
            document.body.appendChild(confetti);
            confetti.style.left = Math.random() * 100 + "vw";
            confetti.style.animationDuration = (Math.random() * 5 + 2) + "s"; // Variasi durasi jatuh
            confetti.style.width = confetti.style.height = Math.random() * 10 + 5 + "px";
            setTimeout(() => confetti.remove(), 7000); // Confetti bertahan lebih lama sebelum hilang
        }
    }
</script>
<style>
    .confetti {
        position: absolute;
        top: -10px;
        width: 10px;
        height: 10px;
        background: #ffffff; /* Warna putih */
        opacity: 0.8;
        border-radius: 50%;
        animation: fall linear infinite;
    }
    @keyframes fall {
        0% { transform: translateY(0); }
        100% { transform: translateY(100vh); }
    }
</style>

</body>
</html>
