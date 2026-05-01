<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Demo</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #0f172a;
            color: #fff;
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            color: #cbd5f5;
            margin-bottom: 20px;
        }

        .btn {
            background: #22c55e;
            color: #000;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #16a34a;
        }

        footer {
            position: absolute;
            bottom: 15px;
            font-size: 14px;
            color: #94a3b8;
        }
    </style>
</head>

<body>

    <h1>Payment Demo</h1>

    <p>This is an example of payment integration using REST API (PayMongo).</p>

    <button class="btn" onclick="startPayment()">
        Click here to proceed to payment
    </button>

    <footer>
        © 2026 Jerecho E. Latosa. All rights reserved.
    </footer>

    <script>
        function startPayment() {
            window.location.href = "/checkout";
        }
    </script>

</body>

</html>