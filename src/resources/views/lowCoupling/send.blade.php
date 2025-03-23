<html>
    <head> <title>Send Email</title>
    </head>
    <body>
        <form action="{{ route('low-coupling.send') }}" method="post">
            @csrf
            <input type="text" name="message" placeholder="Message">
            <button type="submit">Send Email</button>
        </form>
    </body>
</html>
