<html>
    <head>
        <title>Send</title>
    </head>
    <body>
        <form action="{{ route('high-coupling.send') }}" method="post">
            @csrf
            <input type="text" name="message" placeholder="Message">
            <button type="submit">Send</button>
        </form>
    </body>
</html>
