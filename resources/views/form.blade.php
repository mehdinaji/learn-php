<!DOCTYPE html>
<html>
<head>
    <title>Form Your Name</title>
</head>
<body>
    <form method="POST" action="/form">
        @csrf
        <label for="name">name:</label>
        <input type="text" name="name" required>
        <button type="submit">send</button>
    </form>
</body>
</html>
