<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/checkout/process" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="amount">Jumlah Pembayaran:</label>
        <input type="number" name="amount" id="amount" required>

        <button type="submit">Bayar Sekarang</button>
    </form>
</body>
</html>
