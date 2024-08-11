<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting Room</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .waiting-room {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .spinner-border {
            width: 3rem;
            height: 3rem;
        }
        .message {
            margin-top: 20px;
            text-align: center;
        }
        .order-info {
            margin-top: 30px;
            text-align: left;
        }
        .qris-logo {
            max-width: 100px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container waiting-room">
    <div class="text-center">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="message">
            <h3>
                Mohon Tunggu, Pesanan Anda Sedang Diproses
            </h3>
            <p>Waiter akan menuju ke meja anda</p>
        </div>
        <div class="order-info">
            <h4>Informasi Pesanan:</h4>
            <p><strong>Nomor Meja:</strong> <span id="tableNumber">{{ $order->meja->nomor }}</span></p>
            <p><strong>Nomor Invoice:</strong> <span id="invoiceNumber">{{ $order->invoice_number }}</span></p>
            <p><strong>Nama Pelanggan:</strong> <span id="customerName">{{ $order->customer_name }}</span></p>
            <p><strong>Total Pembayaran:</strong> <span id="totalPayment">{{ $order->total_amount }}</span></p>
        </div>
        <img src="https://assets.kompasiana.com/items/album/2020/06/05/qris-baznas-5eda34a3d541df43ac060963.png?t=o&v=770" alt="QRIS Logo" class="qris-logo">
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>