<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <nav>
        <ul>
            <li><x-nav-link href="/">Home</x-nav-link> </li>
            <li><x-nav-link href="/about">About</x-nav-link></li>
            <li><x-nav-link href="/contact">Contact</x-nav-link></li>
        </ul>
    </nav>
    
    {{$slot}}
</body>
</html>