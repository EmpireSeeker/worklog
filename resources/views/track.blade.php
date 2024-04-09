<!-- resources/views/shipment/track.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/assets/img/p1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Tracking</title>
</head>
<body>
    <h1>Shipment Tracking</h1>
    <p><strong>name:</strong> {{ $shipment->name }}</p>
    <p><strong>tracking_number:</strong> {{ $shipment->tracking_number }}</p>
    <p><strong>Destination:</strong> {{ $shipment->destination }}</p>
    <p><strong>Contents:</strong> {{ $shipment->content }}</p>
    <p><strong>Shipment Status:</strong> {{ $shipment->status }}</p>

</body>
</html>
