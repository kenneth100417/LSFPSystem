


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    body{
        background: url(/img/user-background.png);
        background-size: cover;
        max-width: 100vw;
        max-height: 100vh;
    }
</style>
<body>
    <x-message />
    <h1>ADMIN DASHBOARD</h1>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">logout</button>
    </form>
</body>
</html>