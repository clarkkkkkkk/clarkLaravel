<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
</head>

<body>
    <header>
        <nav>
            <h1>Clark</h1>
            <a href="/blog">Home</a>
            <a href="/blog/create">Create new Clark</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>

</html>