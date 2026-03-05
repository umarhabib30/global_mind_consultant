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
                <h2 style="margin: 0; font-size: 20px;">New Review Pending Approval</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 24px;">
                <p style="margin-top: 0;">A new review has been submitted and is waiting for approval.</p>
                <p><strong>Name:</strong> {{ $review->name }}</p>
                <p><strong>Email:</strong> {{ $review->email }}</p>
                <p><strong>Rating:</strong> {{ $review->rating }}/5</p>
                <p><strong>Message:</strong> {{ \Illuminate\Support\Str::limit($review->message, 180) }}</p>
                <p style="margin-top: 24px;">
                    <a href="{{ url('/admin/reviews') }}"
                        style="display:inline-block;background:#74BF1A;color:#fff;padding:10px 18px;border-radius:8px;text-decoration:none;font-weight:700;">
                        Open Admin Reviews
                    </a>
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
