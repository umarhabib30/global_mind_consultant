<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #eee;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .header {
            background-color: #092962;
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px;
        }

        .content {
            padding: 30px;
            background-color: #ffffff;
        }

        .status-badge {
            background-color: #74BF1A;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            display: inline-block;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table td {
            padding: 12px;
            border-bottom: 1px solid #f2f2f2;
        }

        .label {
            font-weight: bold;
            color: #666;
            width: 40%;
        }

        .value {
            color: #333;
        }

        .message-box {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #74BF1A;
            margin-top: 20px;
        }

        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Global Mind Consultant</h2>
        </div>
        <div class="content">
            <div class="status-badge">New Request</div>
            <p>Hello Admin,</p>
            <p>You have received a new career counseling request from your website. Here are the details:</p>

            <table class="data-table">
                <tr>
                    <td class="label">Full Name</td>
                    <td class="value">{{ $details['first_name'] }} {{ $details['last_name'] }}</td>
                </tr>
                <tr>
                    <td class="label">Email Address</td>
                    <td class="value"><a href="mailto:{{ $details['email'] }}"
                            style="color: #74BF1A; text-decoration: none;">{{ $details['email'] }}</a></td>
                </tr>
                <tr>
                    <td class="label">Phone Number</td>
                    <td class="value">{{ $details['phone'] }}</td>
                </tr>
                <tr>
                    <td class="label">Target Destination</td>
                    <td class="value" style="text-transform: uppercase;">{{ $details['destination'] }}</td>
                </tr>
                <tr>
                    <td class="label">Study Level</td>
                    <td class="value">{{ ucfirst($details['study_level']) }}</td>
                </tr>
                <tr>
                    <td class="label">Counseling Mode</td>
                    <td class="value">{{ ucfirst($details['counseling_mode']) }}</td>
                </tr>
            </table>

            <p style="margin-top: 25px; font-weight: bold; color: #092962;">Inquiry Message:</p>
            <div class="message-box">
                {{ $details['message'] }}
            </div>

            <p style="margin-top: 30px;">
                <a href="{{ route('login') }}"
                    style="background-color: #092962; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block;">View
                    in Dashboard</a>
            </p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Global Mind Consultant. All rights reserved.<br>
            This is an automated notification from your website's consultation form.
        </div>
    </div>
</body>

</html>
