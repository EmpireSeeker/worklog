<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/assets/img/p1.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quote Registration</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    input[type="text"], input[type="tel"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        background-color:yellow;
        color: black;
        padding: 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font: bolder;
    }
    input[type="submit"]:hover {
        background-color:yellow;
    }
    @media (max-width: 768px) {
        .container {
            margin: 20px;
        }
    }
</style>
</head>
<body>

    <div class="container">
        <h1>Quote Registration</h1>
        <form action="{{ route('quote.store') }}" method="post">
            @csrf
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="destination">Destination</label>
            <input type="text" id="destination" name="destination" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" required>

            <label for="goods_name">Goods Name</label>
            <input type="text" id="goods_name" name="goods_name" required>
            <label for="color">color</label>
            <input type="text" id="color" name="color" required>
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity" required>

            <input type="submit" value="Get quote">
        </form>
    </div>

</body>
</html>
