<!DOCTYPE html>
<html>
<head>
    <title>İletişim Formu</title>
</head>
<body>
    <h1>İletişim Formu Mesajı</h1>
    <p><strong>Ad Soyad:</strong> {{ $data['name'] }}</p>
    <p><strong>E-posta:</strong> {{ $data['email'] }}</p>

    <p><strong>Telefon:</strong> {{ $data['phone'] }}</p>
    <p><strong>Konu:</strong> {{ $data['subject'] }}</p>
    <p><strong>Şirket:</strong> {{ $data['company'] }}</p>
    <p><strong>Mesaj:</strong></p>

    <p>{{ $data['message'] }}</p>
</body>
</html>
