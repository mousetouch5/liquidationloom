<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidation Report</title>
    <style>
        /* General body styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 30px;
            color: #333;
            background-color: #f9f9f9;
        }

        /* Title Styles */
        h2 {
            font-size: 28px;
            color: #444;
            border-bottom: 2px solid #444;
            padding-bottom: 10px;
            margin-top: 0;
            text-align: left;
        }

        /* Address section */
        p {
            font-size: 16px;
            color: #666;
            text-align: left;
            margin-bottom: 20px;
        }

        /* Particulars section with border-left */
        .particulars-section {
            margin-top: 30px;
            padding-left: 20px;
            border-left: 4px solid #444;
        }

        .particulars-section p {
            font-size: 16px;
            font-weight: bold;
            color: #444;
            margin-bottom: 10px;
        }

        .particulars-section .amount-row {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-weight: bold;
        }

        /* Table styles */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #444;
            color: white;
            font-weight: bold;
            font-size: 16px;
        }

        .table td {
            background-color: #fff;
            color: #333;
        }

        .table tr:nth-child(even) td {
            background-color: #f4f4f4;
        }

        .table tr:hover {
            background-color: #e1e1e1;
        }

        .table .bold {
            font-weight: bold;
        }

        /* Footer Section */
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .footer .date {
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Report Title -->
    <h2>Liquidation Report</h2>
    <p>Address of Bossing Shanlee</p>

    <!-- Particulars Section with border-left -->
    <div class="particulars-section">
        <p><strong>Particulars:</strong></p>
        <table class="table">
            <tr>
                <td class="bold">To Liquidate Barangay Events</td>
                <td>{{ number_format($total_event_budget, 2) }}</td>
            </tr>
            <tr>
                <td class="bold">Amount Refunded</td>
                <td>{{ number_format($total_refunded, 2) }}</td>
            </tr>
            <tr>
                <td class="bold">Amount to be Reimbursed</td>
                <td>{{ number_format($total_to_be_reimbursed, 2) }}</td>
            </tr>
            <tr>
                <td class="bold">Prepared By</td>
                <td>Admin</td>
            </tr>
            <tr>
                <td class="bold">Received By</td>
                <td>Admin</td>
            </tr>
            <tr>
                <td class="bold">Date</td>
                <td>{{ $date_today }}</td>
            </tr>
        </table>

        <!-- Description and Amounts at the Bottom -->
        <div class="amount-row">
            <p><strong>Total to be Reimbursed:</strong> {{ number_format($total_to_be_reimbursed, 2) }}</p>
            <p><strong>Total Refunded:</strong> {{ number_format($total_refunded, 2) }}</p>
        </div>
    </div>

    <!-- Events Table Section -->
    <h3>Events</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Category</th>
                <th>Month</th>
                <th>Event Budget</th>
                <th>Total Expenses</th>
                <th>Amount Refunded</th>
                <th>Amount to be Reimbursed</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                @php
                    $event_expenses = $event->expenses->sum('expense_amount');
                    $amount_refunded = max(0, $event_expenses - $event->budget);
                    $amount_to_be_reimbursed = max(0, $event->budget - $event_expenses);
                @endphp
                <tr>
                    <td>{{ $event->eventType }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->eventDate)->format('F Y') }}</td>
                    <td>{{ number_format($event->budget, 2) }}</td>
                    <td>{{ number_format($event_expenses, 2) }}</td>
                    <td>{{ number_format($amount_refunded, 2) }}</td>
                    <td>{{ number_format($amount_to_be_reimbursed, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Footer Section -->
    <div class="footer">
        <p>Generated by the Admin</p>
        <p class="date">Date of Report: {{ $date_today }}</p>
    </div>

</body>

</html>
