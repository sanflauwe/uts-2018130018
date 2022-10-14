<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/app.css/">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><strong>Swastika Travel</strong></a>
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
        <h1>Home</h1>
        <div class="card-columns">
            @for ($i = 0; $i <10; $i++)
                <div class="card">
                    <img src="http://source.unsplash.com/random?sig={{$i}}/350x250"
                        class="img-thumbnail img-fluid">
                </div>
            @endfor
        </div>
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
