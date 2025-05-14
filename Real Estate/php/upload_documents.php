<!DOCTYPE html>
<html>
<head>
    <title>Upload Documents</title>
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
    <form action="confirm_booking.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="document" required><br>
        <input type="hidden" name="property_id" value="<?php echo $_POST['property_id']; ?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
