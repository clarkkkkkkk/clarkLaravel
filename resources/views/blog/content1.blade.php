<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content1 | Blog</title>
</head>

<body>
    <h1>We're here in blog1</h1>

    <p> {{ $notSunday }}</p>

    <ul>
        <li>
            <a href="blog/{{ $blog[0]["id"] }}">
                {{ $blog[0]["name"]}}
            </a>
        </li>
        <li>
            <a href="blog/{{ $blog[1]["id"] }}">
                {{ $blog[1]["name"]}}
            </a>
        </li>
    </ul>
</body>

</html>