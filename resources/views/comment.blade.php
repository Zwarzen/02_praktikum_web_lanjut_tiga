<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <h2>Komentar</h2>
            <h4>Nama: {{$comment->name}}</h4>
            <p>Email: {{$comment->email}}</p>
            <p>Subject: {{$comment->subject}}</p>
            <p>Message: {{$comment->message}}</p>
    </body>
</html>