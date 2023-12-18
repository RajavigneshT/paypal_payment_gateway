<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel| PayPal Example </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">



</head>
<body>
    <div class="container mt-5 text-center">
        <h2>Laravel Paypal Example</h2>
        <a class="btn btn-primary"href="{{route('make.payment')}}">Pay $100 via Paypal</a>


    </div>
</body>
</html>