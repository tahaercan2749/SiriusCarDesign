<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu Maili</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .header {
            background: #ffffff;
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .header img {
            max-width: 180px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }
        .header-title {
            font-size: 18px;
            color: #555555;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .info {
            background: #f9f9f9;
            border: 1px solid #e0e0e0;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .info p {
            margin: 6px 0;
            font-size: 14px;
        }
        .message-label {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 15px;
        }
        .message {
            padding: 15px;
            background: #f4f8ff;
            border-left: 4px solid #4a90e2;
            font-size: 15px;
            line-height: 1.5;
            white-space: pre-line;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777777;
            padding: 15px;
            background: #f1f1f1;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="{{$siteLogo}}" alt="Firma Logosu">
        <div class="header-title">İletişim Formu Maili</div>
    </div>
    <div class="content">
        <div class="info">
            <p><strong>Ad Soyad:</strong> {{ $data['name'] }}</p>
            <p><strong>E-posta:</strong> {{ $data['email'] }}</p>
            <p><strong>Telefon:</strong> {{ $data['phone'] }}</p>
            <p><strong>Konu:</strong> {{ $data['subject'] }}</p>
            <p><strong>IP Adresi:</strong> {{ $data['ip'] }}</p>
            <p><strong>Zaman:</strong> {{ $data['timestamp'] }}</p>
        </div>
        <div class="message-label"><b>Mesaj:</b></div>
        <div class="message">
            {!! nl2br(e($data['message'])) !!}
        </div>
    </div>
    <div class="footer">
        Bu mesaj {{ env('APP_NAME') }} İletişim Formundan Gönderilmiştir.
    </div>
</div>
</body>
</html>
