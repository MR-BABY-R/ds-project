<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Property Listings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .property {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background: #fff;
            border-radius: 8px;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Available Properties</h2>
    <div class="property">
        <p>Luxury Villa - California - $500,000</p>
        <a href="book_property.php?property_id=1">Book Now</a>
    </div>
</body>
</html>
