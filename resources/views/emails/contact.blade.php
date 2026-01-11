<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body
    style="margin: 0; padding: 0; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f3f4f6; color: #1f2937;">
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
        style="background-color: #f3f4f6; width: 100%; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                    style="max-width: 600px; width: 100%; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);">

                    <tr>
                        <td style="background-color: #092962; padding: 30px; text-align: center;">
                            <h1
                                style="margin: 0; color: #ffffff; font-size: 20px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;">
                                Global Mind Consultant
                            </h1>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 40px;">
                            <div
                                style="display: inline-block; background-color: #74BF1A; color: #ffffff; padding: 4px 12px; border-radius: 9999px; font-size: 12px; font-weight: 700; text-transform: uppercase; margin-bottom: 20px;">
                                New Contact Message
                            </div>

                            <h2 style="margin: 0 0 16px 0; color: #111827; font-size: 22px; font-weight: 700;">
                                Inquiry from {{ $formData['name'] }}
                            </h2>

                            <p style="margin: 0 0 32px 0; color: #4b5563; font-size: 16px; line-height: 1.5;">
                                You have a new general inquiry from the website contact form. Here are the sender's
                                details:
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                                style="margin-bottom: 32px; border: 1px solid #e5e7eb; border-radius: 8px;">
                                <tr>
                                    <td
                                        style="padding: 16px; border-bottom: 1px solid #e5e7eb; background-color: #f9fafb; width: 30%; font-size: 14px; font-weight: 600; color: #6b7280;">
                                        Full Name</td>
                                    <td
                                        style="padding: 16px; border-bottom: 1px solid #e5e7eb; font-size: 15px; color: #111827;">
                                        {{ $formData['name'] }}</td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding: 16px; border-bottom: 1px solid #e5e7eb; background-color: #f9fafb; font-size: 14px; font-weight: 600; color: #6b7280;">
                                        Email</td>
                                    <td
                                        style="padding: 16px; border-bottom: 1px solid #e5e7eb; font-size: 15px; color: #092962; font-weight: 500;">
                                        <a href="mailto:{{ $formData['email'] }}"
                                            style="color: #092962; text-decoration: underline;">{{ $formData['email'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding: 16px; background-color: #f9fafb; font-size: 14px; font-weight: 600; color: #6b7280;">
                                        Country</td>
                                    <td style="padding: 16px; font-size: 15px; color: #111827;">
                                        {{ $formData['country'] ?? 'Not Specified' }}</td>
                                </tr>
                            </table>

                            <h3
                                style="margin: 0 0 12px 0; color: #111827; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                Message Content</h3>
                            <div
                                style="padding: 24px; background-color: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0; color: #334155; font-size: 15px; line-height: 1.6; font-style: italic;">
                                "{{ $formData['message'] }}"
                            </div>

                            <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                                style="margin-top: 32px;">
                                <tr>
                                    <td align="center">
                                        <a href="mailto:{{ $formData['email'] }}"
                                            style="display: inline-block; background-color: #74BF1A; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-size: 16px; font-weight: 600; text-decoration: none; box-shadow: 0 4px 6px rgba(116, 191, 26, 0.2);">
                                            Reply to Sender
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="padding: 24px; background-color: #f9fafb; text-align: center; border-top: 1px solid #e5e7eb;">
                            <p style="margin: 0; color: #9ca3af; font-size: 12px;">
                                Sent via Global Mind Consultant Web Portal<br>
                                &copy; {{ date('Y') }} Global Mind Consultant
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
