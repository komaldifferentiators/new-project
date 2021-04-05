<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <form action ="todo_submit" method="POST">
                @csrf
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type = "textname" name = "name"></td>  
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type = "submit" name = "submit"></td>  
                        
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
