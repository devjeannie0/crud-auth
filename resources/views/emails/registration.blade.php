<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
</head>
<body>
    <h1>Registration Successful!</h1>
    <p>Hello, {{ $data['name'] }}</p>
    <br>
    <p>You have successfully registered with the following credentials : </p>
    <p>■ Name: {{ $data['name'] }}</p>
    <p>■ Email: {{ $data['email'] }}.</p>
</body>
</html>
