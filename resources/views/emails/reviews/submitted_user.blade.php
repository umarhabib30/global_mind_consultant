<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="font-family: Arial, sans-serif; background: #f5f7fb; padding: 24px; color: #1f2937;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 620px; margin: 0 auto; background: #ffffff; border-radius: 12px;">
        <tr>
            <td style="background: #0A245D; color: #fff; padding: 20px 24px; border-radius: 12px 12px 0 0;">
                <h2 style="margin: 0; font-size: 20px;">We Received Your Review</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 24px;">
                <p>Hi {{ $review->name }},</p>
                <p>Thanks for sharing your feedback with us.</p>
                <p>Your review is now pending approval and will appear publicly once approved by our team.</p>
                <p style="margin-top: 24px;">We appreciate your time and trust.</p>
            </td>
        </tr>
    </table>
</body>

</html>
