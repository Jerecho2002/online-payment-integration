Laravel Payment Processing System (PayMongo Integration)

A simple checkout and payment processing system built using Laravel, integrated with PayMongo API for handling online payments (GCash, Card).
This project demonstrates how payment flows, webhooks, and order status updates work in a real-world backend system.

Features:

- Create checkout session using PayMongo API
- Redirect users to secure payment page
- Handle successful payments via webhook
- Update order status automatically (pending → paid)
- Cancel and success redirect handling
- Basic order tracking system

How It Works:

- User creates an order (status: pending)
- System sends request to PayMongo to create a checkout session
- User is redirected to PayMongo payment page

After payment:

- PayMongo sends a webhook event
- Laravel listens to the webhook
- Order status is updated to paid

Tech Stack:

- Laravel (PHP Framework)
- MySQL / MariaDB
- PayMongo API
- Ngrok (for local webhook testing)
- HTTP Client (Laravel Http Facade)

Environment Variables:

- Add your PayMongo secret key: PAYMONGO_SECRET_KEY=your_secret_key_here

Running the Project:

- php artisan serve
- ngrok http 8000
