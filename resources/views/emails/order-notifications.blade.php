<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Notification</title>
</head>
<body>
    <h1>Hi {{ $order->customer_name }},</h1>
    <p>{{ $message }}</p>

    <h3>Order Details:</h3>
    <ul>
        <li>Order ID: {{ $order->id }}</li>
        <li>Total: {{ $order->total_price }}</li>
        <li>Status: {{ $order->status }}</li>
    </ul>

    <p>Thank you for shopping with us!</p>
</body>
</html>
