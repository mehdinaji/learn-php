<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>search</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 50px;
            background: #f7f7f7;
        }
        input, button {
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }
        .results {
            margin-top: 20px;
        }
        .result-item {
            background: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <h1>🕵️‍♂️</h1>

    <input type="text" id="searchInput" placeholder="search...">
    <button onclick="search()">search</button>

    <div class="results" id="results"></div>

    <script>
        function search() {
            const query = document.getElementById('searchInput').value;
            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = 'search...';

            fetch(`/search?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        resultsDiv.innerHTML = `<p>${data.message}</p>`;
                    } else if (data.length === 0) {
                        resultsDiv.innerHTML = `<p>نتیجه‌ای پیدا نشد.</p>`;
                    } else {
                        resultsDiv.innerHTML = '';
                        data.forEach(item => {
                            resultsDiv.innerHTML += `<div class="result-item">${item.title}</div>`;
                        });
                    }
                })
                .catch(error => {
                    resultsDiv.innerHTML = `<p>خطایی رخ داده است.</p>`;
                    console.error(error);
                });
        }
    </script>

</body>
</html>
