<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PT. SSP</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="etalaseDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Etalase
                    </a>
                    <div class="dropdown-menu" aria-labelledby="etalaseDropdown">
                        <a class="dropdown-item" href="{{ route('home.etalase') }}" id="item-ready">Item Ready</a>
                    </div>
                </li>
                <!-- Add more nav items here -->
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div id="data-table">
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
