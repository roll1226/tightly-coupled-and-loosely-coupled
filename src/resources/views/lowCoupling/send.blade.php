<html>
    <head>
        <title>Send Email</title>
    </head>
    <body>
        <form action="{{ route('send.low-coupling.notification') }}" method="post">
            @csrf
            <input type="text" name="message" placeholder="Message">
            <button type="submit">Send Email</button>
        </form>
    </body>
</html>
