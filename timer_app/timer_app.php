<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
<style>
    body {
        background-color: #333333;
    }
    
    p {
        color: #ffffff;
        font-size: 90px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        font-family: 'Arial', sans-serif;
        letter-spacing: 2px;
    }
    
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    body {
        background: linear-gradient(45deg, #FFD700, #FFA500, #FF4500, #FF1493, #800080, #00BFFF, #00FF00);
        background-size: 600% 600%;
        animation: gradient 10s ease infinite;
    }
</style>
<script>
    function updateTime() {
        var date = new Date();
        var options = {
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            hour12: true,
            timeZone: 'Asia/Kolkata' // IST timezone
        };
        var formattedTime = date.toLocaleString('en-US', options);
        document.getElementById('time').textContent = formattedTime;
    }
    setInterval(updateTime, 1000); // Update time every second
</script>
</head>
<body>
    <p id="time"></p>
</body>
</html>
