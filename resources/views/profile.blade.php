<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
        }

        .profile-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 280px;
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 2px solid #cfcfcf;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .avatar-icon {
            font-size: 60px;
            color: #c9c9c9;
        }
        .avatar-icon::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 26px;
            height: 26px;
            background-color: #c9c9c9;
            border-radius: 50%;
        }
        .avatar-icon::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 46px;
            height: 26px;
            background-color: #c9c9c9;
            border-radius: 23px 23px 0 0;
        }

        .info-box {
            width: 100%;
            background-color: #e0e0e0;
            padding: 12px 16px;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            color: #333;
            margin-bottom: 12px;
        }

        .info-box:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar">
            <span class="material-symbols-outlined avatar-icon">person</span>
        </div>

        <div class="info-box">Nama : {{ $nama }}</div>
        <div class="info-box">Kelas : {{ $kelas }}</div>
        <div class="info-box">NPM : {{ $npm }}</div>
    </div>

</body>
</html>