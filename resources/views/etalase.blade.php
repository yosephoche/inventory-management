<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @media (max-width: 767.98px) {
            .navbar-nav {
                text-align: center;
                width: 100%;
            }
            .dropdown-menu {
                width: 100%;
            }
            .form-inline {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home.index') }}">PT. SSP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
            <div class="row mb-3">
                <div class="col">
                    <form method="GET" action="{{ route('home.etalase') }}" class="form-inline">
                        <label for="per_page" class="mr-2">Items per page:</label>
                        <select id="per_page" name="per_page" class="form-control" onchange="this.form.submit()">
                            <option value="5"{{ $perPage == 5 ? ' selected' : '' }}>5</option>
                            <option value="10"{{ $perPage == 10 ? ' selected' : '' }}>10</option>
                            <option value="20"{{ $perPage == 20 ? ' selected' : '' }}>20</option>
                            <option value="50"{{ $perPage == 50 ? ' selected' : '' }}>50</option>
                            <option value="100"{{ $perPage == 100 ? ' selected' : '' }}>100</option>
                        </select>
                    </form>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <!-- Add more table headers here -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->id_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->jenis_barang }}</td>
                                <td>{{ $item->stock }}</td>
                                <td>{{ $item->satuan }}</td>
                                <td>{{ $item->harga }}</td>
                                <!-- Add more table data here -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $data->appends(['per_page' => $perPage])->links() }}
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
