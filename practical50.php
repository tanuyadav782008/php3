<?php
$theme = isset($_COOKIE['user_theme']) ? $_COOKIE['user_theme'] : 'light';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference (Light/Dark Mode)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            transition: background-color 0.3s, color 0.3s;
        }
        body.light {
            background-color: #ffffff;
            color: #000000;
        }
        body.dark {
            background-color: #121212;
            color: #ffffff;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .light-btn {
            background-color: #f0f0f0;
            color: #000;
        }

        .dark-btn {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body class="<?php echo $theme; ?>">
    <h1>Theme Preference Demo</h1>
    <p>Current Mode: <b id="mode-text"><?php echo ucfirst($theme); ?> Mode</b></p>

    <button class="light-btn" onclick="setTheme('light')">Light Mode</button>
    <button class="dark-btn" onclick="setTheme('dark')">Dark Mode</button>

    <script>
        function setTheme(theme) {
            document.body.className = theme;
            document.getElementById("mode-text").textContent = theme.charAt(0).toUpperCase() + theme.slice(1) + " Mode";
            document.cookie = "user_theme=" + theme + "; path=/; max-age=" + (30 * 24 * 60 * 60);
        }
        window.onload = function() {
            let cookies = document.cookie.split(';');
            cookies.forEach(function(cookie) {
                let [name, value] = cookie.trim().split('=');
                if (name === 'user_theme') {
                    document.body.className = value;
                    document.getElementById("mode-text").textContent = value.charAt(0).toUpperCase() + value.slice(1) + " Mode";
                }
            });
        };
    </script>
</body>
</html>