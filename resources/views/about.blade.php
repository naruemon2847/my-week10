<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #6dd5fa, #8e44ad);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .icon {
            font-size: 70px;
            margin-bottom: 15px;
        }

        h2 {
            color: #6a11cb;
            margin-bottom: 20px;
            font-size: 2.3rem;
        }

        p {
            color: #555;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .info {
            background: #f7f7f7;
            border-left: 6px solid #6a11cb;
            border-radius: 10px;
            padding: 20px;
            margin: 25px 0;
            text-align: left;
        }

        .info h3 {
            color: #6a11cb;
            margin-bottom: 10px;
        }

        .info ul {
            padding-left: 20px;
            color: #555;
        }

        .info li {
            margin: 8px 0;
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 35px;
            background: #6a11cb;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            transition: .3s;
        }

        .btn:hover {
            background: #2575fc;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,.2);
        }

        footer {
            margin-top: 30px;
            color: #777;
            font-size: 14px;
        }

        @media(max-width:600px){
            .container{
                padding:25px;
            }

            h2{
                font-size:30px;
            }

            p{
                font-size:16px;
            }
        }

    </style>
</head>

<body>

    <div class="container">

        <div class="icon">🏢</div>

        <h2>เกี่ยวกับเรา</h2>

        <p>
            ยินดีต้อนรับสู่เว็บไซต์ของเรา เว็บไซต์นี้ถูกสร้างขึ้นเพื่อแบ่งปันความรู้
            ข่าวสาร และบทความที่เป็นประโยชน์ พร้อมทั้งนำเสนอข้อมูลที่ทันสมัยและใช้งานง่าย
        </p>

        <div class="info">
            <h3>✨ จุดเด่นของเว็บไซต์</h3>
            <ul>
                <li>📚 รวบรวมบทความและความรู้ที่น่าสนใจ</li>
                <li>⚡ ใช้งานง่าย รองรับทุกอุปกรณ์</li>
                <li>🎨 ดีไซน์ทันสมัย สีสันสดใส</li>
                <li>🔒 ปลอดภัยและเชื่อถือได้</li>
            </ul>
        </div>

        <a href="/" class="btn">🏠 กลับสู่หน้าแรก</a>

        <footer>
            © 2026 My Website | Thank you for visiting ❤️
        </footer>

    </div>

</body>

</html>