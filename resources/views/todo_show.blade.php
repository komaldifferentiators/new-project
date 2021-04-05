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
            <a href="todo_create" >Add Record</a><br><br>
            {{session('msg')}}
            <br>
          <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Created At</td>
                <td>Action</td>

            </tr>
            @foreach($todoArr as $todo)
            <tr>
                <td>{{$todo->id}}</td>
                <td>{{$todo->name}}</td>
                <td>{{$todo->created_at}}</td>
                <td>
                    <a href="todo_edit/{{$todo->id}}">Edit</a>
                    <a href="todo_delete/{{$todo->id}}">Delete</a>
                </td>
            <tr>
            @endforeach
          </table>
        </div>
    </body>
</html>
