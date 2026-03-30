<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <style>
        *{
            background-color: black;
            text-align:center;
            justify-content:center;
        }
        h1{
            color:white;
        }
    </style>
    {{ $slot }}
</body>
</html>