<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Blog List</h1>

            <form method="GET" action="{{ route('blogs.index') }}" class="form-inline mb-4">
                <label for="itemsPerPage" class="mr-2">Items per page:</label>
                <select name="itemsPerPage" id="itemsPerPage" class="form-control mr-2" onchange="this.form.submit()">
                    <option value="5" {{ request('itemsPerPage') == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ request('itemsPerPage') == 10 ? 'selected' : '' }}>10</option>
                    <option value="15" {{ request('itemsPerPage') == 15 ? 'selected' : '' }}>15</option>
                </select>
            </form>

            <ul class="list-group">
                @foreach ($blogs as $blog)
                    <li class="list-group-item">
                        <h5>{{ $blog->title }}</h5>
                        <p>{{ $blog->description }}</p>
                    </li>
                @endforeach
            </ul>

            <div class="mt-4">
                {{ $blogs->appends(['itemsPerPage' => request('itemsPerPage')])->links() }}
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
