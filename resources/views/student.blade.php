<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัตินักศึกษา</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6dd5fa, #8e44ad);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            width: 420px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
            text-align: center;
        }

        .header {
            background: linear-gradient(45deg, #2575fc, #6a11cb);
            color: white;
            padding: 30px;
        }

        .header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .header h1 {
            font-size: 28px;
        }

        .content {
            padding: 30px;
        }

        .info {
            background: #f7f7f7;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            text-align: left;
            font-size: 18px;
        }

        .info strong {
            color: #6a11cb;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            background: #2575fc;
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 30px;
            transition: .3s;
        }

        .btn:hover {
            background: #6a11cb;
        }

        footer {
            margin-top: 20px;
            color: #888;
            font-size: 14px;
            padding-bottom: 20px;
        }
    </style>

</head>

<body>

    <div class="card">

        <div class="header">
            <!-- เปลี่ยนเป็นรูปของคุณได้ -->
            <img src="https://via.placeholder.com/120" alt="Student">

            <h1>🎓 ประวัตินักศึกษา</h1>
        </div>

        <div class="content">

            <div class="info">
                <strong>รหัสนักศึกษา :</strong>
                {{ $id }}
            </div>

            <div class="info">
                <strong>ชื่อ - นามสกุล :</strong>
                นิรุทธ์ ซื่อตรง
            </div>

            <div class="info">
                <strong>สาขา :</strong>
                เทคโนโลยีสารสนเทศ
            </div>

            <div class="info">
                <strong>ชั้นปี :</strong>
                ปี 4
            </div>

            <a href="/" class="btn">🏠 กลับหน้าแรก</a>

        </div>

        <footer>
            © 2026 Student Profile
        </footer>

    </div>

</body>

</html>