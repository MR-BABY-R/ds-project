<!DOCTYPE html>
<html>
<head>
    <title>Add Property</title>
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
        input, select, button {
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
    <form action="add_property_action.php" method="POST">
        <input type="text" name="name" placeholder="Property Name" required><br>
        <input type="text" name="location" placeholder="Location" required><br>
        <input type="number" name="price" placeholder="Price" required><br>
        <select name="status">
            <option value="Available">Available</option>
            <option value="Booked">Booked</option>
        </select><br>
        <button type="submit">Add Property</button>
    </form>
</body>
</html>
