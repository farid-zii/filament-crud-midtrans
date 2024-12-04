<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <button id="pay-button">Bayar Sekarang</button>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-91QoM020Y5KSHCXb"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    console.log(result);
                    alert('Payment Success');
                },
                onPending: function (result) {
                    alert('Payment Pending');
                    console.log(result);
                },
                onError: function (result) {
                    alert('Payment Failed');
                    console.log(result);
                },
            });
        });
    </script>
</body>
</html>
