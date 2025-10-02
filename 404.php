<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #000;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            overflow: hidden;
        }

        .container {
            text-align: center;
            max-width: 600px;
            z-index: 10;
        }

        .error-code {
            font-size: 10rem;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 1rem;
            animation: glitch 1s infinite;
        }

        @keyframes glitch {
            0%, 100% {
                text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            }
            50% {
                text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            }
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        p {
            font-size: 1.1rem;
            color: #999;
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        .buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.9rem 2rem;
            border: 2px solid #fff;
            background: transparent;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn:hover {
            background: #fff;
            color: #000;
            transform: translateY(-2px);
        }

        .btn-primary {
            background: #fff;
            color: #000;
        }

        .btn-primary:hover {
            background: transparent;
            color: #fff;
        }

        .search-box {
            margin-top: 2rem;
            display: flex;
            gap: 0.5rem;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .search-input {
            flex: 1;
            padding: 0.8rem 1rem;
            border: 1px solid #333;
            background: #111;
            color: #fff;
            border-radius: 5px;
            font-size: 0.95rem;
        }

        .search-input:focus {
            outline: none;
            border-color: #fff;
        }

        .search-btn {
            padding: 0.8rem 1.5rem;
            background: #fff;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }

        .search-btn:hover {
            background: #ddd;
        }

        .background-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .floating-number {
            position: absolute;
            font-size: 8rem;
            font-weight: 900;
            opacity: 0.03;
            animation: float 20s infinite;
        }

        .floating-number:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-number:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 5s;
        }

        .floating-number:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 10s;
        }

        .floating-number:nth-child(4) {
            top: 30%;
            right: 30%;
            animation-delay: 15s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-30px) rotate(5deg);
            }
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }

            h1 {
                font-size: 1.8rem;
            }

            p {
                font-size: 1rem;
            }

            .buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .btn {
                width: 100%;
            }

            .floating-number {
                font-size: 4rem;
            }
        }

        @media (max-width: 480px) {
            .error-code {
                font-size: 4rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            .search-box {
                flex-direction: column;
            }

            .search-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="background-animation">
        <div class="floating-number">404</div>
        <div class="floating-number">404</div>
        <div class="floating-number">404</div>
        <div class="floating-number">404</div>
    </div>

    <div class="container">
        <div class="error-code">404</div>
        <h1>Page Not Found</h1>
        <p>Oops! The page you're looking for doesn't exist. It might have been moved or deleted.</p>
        
        <div class="buttons">
            <a href="index.php" class="btn btn-primary">Go Home</a>
            <button class="btn" onclick="history.back()">Go Back</button>
        </div>

        <div class="search-box">
            <input type="text" class="search-input" placeholder="Search for a page..." id="searchInput">
            <button class="search-btn" onclick="handleSearch()">Search</button>
        </div>
    </div>

    <script>
        function handleSearch() {
            const query = document.getElementById('searchInput').value;
            if (query.trim()) {
                alert(`Searching for: ${query}`);
                // Add your search logic here
                // window.location.href = `/search?q=${encodeURIComponent(query)}`;
            }
        }

        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleSearch();
            }
        });
    </script>
</body>
</html>