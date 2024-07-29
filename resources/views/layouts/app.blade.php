<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Material Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Material Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('materials.index') }}">All Materials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('materials.manage') }}">Manage Materials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('inward-outward.create') }}">Inward Outward</a>
          </li>
          <!-- Add more navigation links as needed -->
        </ul>
      </div>
    </nav>

    <div class="container mt-4">
      @yield('content')
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>