<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <h1>Contact us</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" id=""><br><br>
        <input type="email" name="email" placeholder="Enter your email" id=""><br><br>
        <textarea name="message" cols="21" rows="10" placeholder="Enter your Query" id=""></textarea><br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
