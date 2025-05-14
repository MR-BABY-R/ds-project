<!DOCTYPE html>
<html>
<head>
    <title>Book Property</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <form action="upload_documents.php" method="POST">
        <input type="text" name="name" placeholder="Your Full Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <input type="hidden" name="property_id" value="<?php echo $_GET['property_id']; ?>">
        <button type="submit">Next</button>
    </form>
</body>
</html>
