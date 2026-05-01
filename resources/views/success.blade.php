<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .card {
            background: #1e293b;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            max-width: 400px;
        }

        .checkmark {
            font-size: 60px;
            color: #22c55e;
            margin-bottom: 20px;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            color: #cbd5f5;
            margin-bottom: 25px;
        }

        .btn {
            background: #22c55e;
            color: #000;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #16a34a;
        }

        footer {
            position: absolute;
            bottom: 15px;
            font-size: 13px;
            color: #94a3b8;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="checkmark">✔</div>

        <h1>Payment Successful</h1>

        <p>Your payment has been processed successfully. Thank you for your purchase!</p>

        <a href="/" class="btn">Go Back to Home</a>
    </div>

    <footer>
        © 2026 Jerecho E. Latosa. All rights reserved.
    </footer>

</body>

</html>