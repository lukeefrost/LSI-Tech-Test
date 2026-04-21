<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Enquiry: {{ $product->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; color: #222; background: #f5f5f5; margin: 0; padding: 24px; }
        .email-wrapper { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 6px; overflow: hidden; border: 1px solid #e0e0e0; }
        .email-header { padding: 24px 32px; }
        .email-header img { height: 32px; }
        .email-body { padding: 32px; }
        .email-body h1 { font-size: 20px; color: #222; margin: 0 0 24px; }
        .email-body p { margin: 0 0 16px; line-height: 1.6; }
        .email-meta { background: #f9f9f9; border: 1px solid #e0e0e0; border-radius: 4px; padding: 16px; margin-bottom: 24px; }
        .email-meta p { margin: 0 0 8px; font-size: 14px; }
        .email-meta p:last-child { margin-bottom: 0; }
        .email-meta strong { color: #555; }
        .message-block { background: #f9f9f9; padding: 16px; border-radius: 0 4px 4px 0; }
    </style>
</head>
<body>
<div class="email-wrapper">
    <div class="email-header">
        <img src="{{ asset('images/lsi-logo.svg') }}" alt="LSi">
    </div>
    <div class="email-body">
        <h1>New Product Enquiry</h1>

        <div class="email-meta">
            <p><strong>Product:</strong> {{ $product->name }}</p>
            <p><strong>From:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
        </div>

        <p><strong>Message:</strong></p>
        <div class="message-block">
            <p>{{ $body }}</p>
        </div>
    </div>
</div>
</body>
</html>