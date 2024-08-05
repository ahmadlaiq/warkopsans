<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Warkopsans</title>
    <style>
        * {
            font-size: 8px;
            font-family: 'Times New Roman';
        }

        /* td,
        th,
        tr,
        table {
            border-top: 1px solid black;
            border-collapse: collapse;
        } */

        td.description,
        th.description {
            width: 65px;
            padding: 2px 0;
            max-width: 65px;
        }

        td.price,
        th.price {
            width: 85px;
            max-width: 95px;
            text-align: right;
            word-break: break-all;
        }

        .centered {
            text-align: center;
            align-content: center;
        }

        .ticket {
            width: 155px;
            max-width: 155px;
        }

        hr {
            border: none;
            border-top: 2px dashed black;
            /* Atur lebar dan gaya garis sesuai kebutuhan */
            height: 0;
        }
    </style>
</head>

<body>
    <div class="ticket">
        <p class="centered"><b><strong>WARKOPSANS</strong></b>
            <br>
            <b><strong>Invoice</strong></b>
        </p>
        <p style="font-size: 1.2em; ">
            <strong>
                <br>Tanggal: {{ $order->created_at }}
                <br>No : {{ $order->invoice_number }}
                <br>Atas Nama : {{ $order->customer_name }}
            </strong>
            <hr>
        </p>
        <table>
            <tbody>
                @foreach ($orderItems as $orderItem)
                    <tr>
                        <td class="description" style="font-size: 1.2em; ">{{ $orderItem->menuItem->name }}</td>
                        <td class="description" style="text-align: right; font-size: 1.2em; ">{{ $orderItem->price }}
                        </td>
                        <td class="description" style="font-size: 1.2em; ">x{{ $orderItem->quantity }}</td>
                        <td class="description" style="font-size: 1.2em; ">{{ $orderItem->subtotal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <table>
            <tbody>
                <tr>
                    <td class="description" style="font-weight: bold; font-size: 1.8em;">Total : </td>
                    <td class="description" style="text-align: right; font-weight: bold; font-size: 1.8em;">
                        {{ $order->total_amount }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <p class="centered"><b>** TERIMAKASIH **</b>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
