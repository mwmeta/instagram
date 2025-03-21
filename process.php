<?php
// process.php

// استلام البيانات المرسلة من النموذج مع حماية من هجمات XSS
$username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : 'غير مُدخل';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : 'غير مُدخل';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عرض البيانات المستلمة</title>
  <style>
    body {
      font-family: sans-serif;
      background: #fafafa;
      padding: 20px;
      direction: rtl;
    }
    .container {
      background: white;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      max-width: 500px;
      margin: auto;
      text-align: center;
    }
    h1 {
      color: #0095f6;
      margin-bottom: 20px;
    }
    p {
      font-size: 16px;
      color: #262626;
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>البيانات المستلمة</h1>
    <p><strong>البريد الإلكتروني أو اسم المستخدم:</strong> <?php echo $username; ?></p>
    <p><strong>كلمة المرور:</strong> <?php echo $password; ?></p>
  </div>
</body>
</html>