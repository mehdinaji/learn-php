<h1>Todo Detail</h1>

<ul>
    <li><strong>ID:</strong> {{ $todo['id'] }}</li>
    <li><strong>Title:</strong> {{ $todo['title'] }}</li>
    <li><strong>Completed:</strong> {{ $todo['completed'] ? 'Yes' : 'No' }}</li>
</ul>

<a href="{{ url('/todos') }}">← Back to List</a>

<!-- @dump($todo) -->