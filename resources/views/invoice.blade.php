<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodcosta Bill Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
.p{
 text-align: center;
            font-size: 14px;
}

        .receipt {
            width: 300px;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .order-details {
            margin-bottom: 10px;
        }
        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .total {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="receipt">
<div class="p">TAX INVOICE</div>
    <div class="header">FOODCOSTA
</div>
<div class="p">ANMOL PLAZA-2 ,OPP. G.I.D.C.<br>
BUS DEPO,OLD HIGHWAY NO-8,<br>
ANKLESHWAR-393002. (GUJ)<br> Phone : 9484982650</div>
<p>--------------------------------------------------------</p>
Bill No. P/25318<br>
Date: 27-01-2024
<p>--------------------------------------------------------</p>
<div class="order-details">
        <div class="item">Description<span>Qty</span><span>Rate</span><span>Amount</span></div>
        <div class="item">paneer <span>2</span><span>200</span><span>200</span></div>
        <!-- Add more items as needed -->
    </div>
<p>--------------------------------------------------------</p>
 


    <div class="total">
        <span>Total:</span>
        <span>$200.00</span>
    </div>

    <div class="footer">
        <p>Thank you for dining with us!</p>
    </div>
</div>
<script src="../assets/js/invoice.js" ></script>
</body>
</html>
