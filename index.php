<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U SITE</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            overflow: hidden; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            transition: background 1s, color 1s;
        }
        body.light-mode {
            background: linear-gradient(to bottom right, #ffffff, #e0e0e0);
            color: #000;
        }
        body.dark-mode {
            background: linear-gradient(to bottom right, #1e1e1e, #2a2a2a);
            color: #fff;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        body.dark-mode {
            animation: gradient 15s ease infinite;
            background-size: 200% 200%;
        }
        h1 {
            font-size: 3em;
            margin-top: 0;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .user-list {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .user-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 10px 20px;
            margin: 10px;
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        .user-item a {
            color: inherit;
            text-decoration: none;
            font-size: 1.5em;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        .user-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }
        footer {
            margin-top: auto;
            padding: 10px;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            transition: background 0.5s;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        footer.light-mode {
            background: rgba(255, 255, 255, 0.1);
            color: #000;
        }
        .toggle-wrapper {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
        }
        .toggle-label {
            margin-right: 10px;
            font-size: 1em;
        }
        .toggle-slider {
            width: 60px;
            height: 34px;
            position: relative;
        }
        .toggle-slider input {
            display: none;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #2196F3;
        }
        input:checked + .slider:before {
            transform: translateX(26px);
        }
    </style>
</head>
<body class="dark-mode">
    <div class="toggle-wrapper">
        <span class="toggle-label">Switch mode</span>
        <label class="toggle-slider">
            <input type="checkbox" onclick="toggleMode()">
            <span class="slider"></span>
        </label>
    </div>
    <h1>Beer for everyone 🍻</h1>
    <div class="user-list">
        <div class="user-item"><a href="https://discord.com/users/userid">Username</a></div>
        <div class="user-item"><a href="https://discord.com/users/userid">Username</a></div>
    </div>
    <footer class="dark-mode">
        &copy; 20XX U SITE
    </footer>
    <audio id="background-music" loop>
        <source src="SmellsLikeTeenSpirit.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <script>
        function toggleMode() {
            document.body.classList.toggle('light-mode');
            document.body.classList.toggle('dark-mode');
            document.querySelector('footer').classList.toggle('light-mode');
            document.querySelector('footer').classList.toggle('dark-mode');
        }

        document.addEventListener('DOMContentLoaded', function() {
            var audio = document.getElementById('background-music');
            var playPromise = audio.play();
            if (playPromise !== undefined) {
                playPromise.catch(function(error) {
                    console.log('Autoplay was prevented: ', error);
                    document.body.addEventListener('click', function() {
                        audio.play();
                    }, { once: true });
                });
            }
        });
    </script>
</body>
</html>
