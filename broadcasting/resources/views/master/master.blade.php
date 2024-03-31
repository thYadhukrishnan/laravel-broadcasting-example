<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-2" style="justify-content: end;">
        <a href="{{route('logOut')}}" class="btn btn-sm btn-outline-secondary" type="button">Log Out</a>
    </nav>

    <div class="row">
        <div class="alert alert-primary msgDiv" style="display: none;"><p id="userCreatedMsg"></p></div>
    </div>
    @yield('content')


    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
            // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('4e61f8bcc7f900bb6017', {
        cluster: 'ap2'
        });

        var channel = pusher.subscribe('user-created');
        channel.bind('user-created-event', function(data) {
        alert(JSON.stringify(data));
            // $('.msgDiv').show();
            // $('#userCreatedMsg').text(data);
        });

    </script>
</body>
</html>