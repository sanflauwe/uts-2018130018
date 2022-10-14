<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimony</title>
    <link rel="stylesheet" href="/css/app.css/">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><strong>SWASTIKA TRAVEL</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-control="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/testi">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container text-center mt-3 p-4 bg-white">
       <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title">TESTIMONY SWASTIKA TRAVEL</h4>
                <h6 class="card-subtitle mb-2 text-muted">
                    What they say about US
                </h6>
            </div>
       </div>
    </div>

    <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Customer</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $item)
                        <tr>
                            <td>{{$item['namaCust']}}</td>
                            <td>{{$item['teks']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container text-center">
            <small class="text-center">
                Copyright @ {{date("Y")}} Swastika Travel
            </small>
        </div>
    </footer>

    <script src="/js/app.js"></script>
</body>
</html>
