<!DOCTYPE html>
<html>
<head>
    <title>Todos</title>
</head>
<body>
    <h1>Todo List</h1>
    <ul>
        @foreach($todos as $todo)
            <li>
                <a href="{{ url('/todos/' . $todo['id']) }}"> {{$todo['id']}} </a>
                <strong>{{ $todo['title'] }}</strong>
                - {{ $todo['completed'] ? '✅ done' : '❌ not done' }}
            </li>
        @endforeach
    </ul>
</body>
</html>
