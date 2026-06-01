<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
        .card { background: #ffffff; max-width: 600px; margin: auto; border-radius: 8px; padding: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h2 { color: #2d2d2d; border-bottom: 2px solid #4f46e5; padding-bottom: 10px; }
        .field { margin: 16px 0; }
        .label { font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 1px; }
        .value { font-size: 15px; color: #333; margin-top: 4px; }
        .message-box { background: #f9f9f9; border-left: 4px solid #4f46e5; padding: 12px 16px; border-radius: 4px; margin-top: 4px; }
        .footer { margin-top: 30px; font-size: 12px; color: #aaa; text-align: center; }
    </style>
</head>
<body>
    <div class="card">
        <h2>📬 New Contact Message</h2>

        <div class="field">
            <div class="label">Name</div>
            <div class="value">{{ $name }}</div>
        </div>

        <div class="field">
            <div class="label">Email</div>
            <div class="value"><a href="mailto:{{ $email }}">{{ $email }}</a></div>
        </div>

        <div class="field">
            <div class="label">Subject</div>
            <div class="value">{{ $subject }}</div>
        </div>

        <div class="field">
            <div class="label">Message</div>
            <div class="message-box">{{ $userMessage }}</div>
        </div>

        <div class="footer">Sent from your portfolio contact form</div>
    </div>
</body>
</html>