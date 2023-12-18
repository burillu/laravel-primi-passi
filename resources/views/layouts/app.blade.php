<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - laravel-primi-passi</title>


</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        img {
            display: block;
            width: 100%;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            height: 80px;
            background-color: white;
        }

        body {
            background-image: linear-gradient(to right top, #051937, #00426b, #006e81, #009868, #5abc26);
        }

        .d-flex {
            display: flex;

        }

        .justify-content-between {
            justify-content: space-between;
        }

        .bg-white {
            background-color: rgba(255, 255, 255, 0.651);
        }

        .col-12 {
            width: 459px;
        }
    </style>
    <header>
        <div class="container">
            <nav class=''>
                <ul class="d-flex gap-3">
                    <li>
                        <a href="{{route('home')}}"> Home </a>
                    </li>
                    <li>
                        <a href="{{route('books')}}"> Books </a>
                    </li>
                </ul>

            </nav>
        </div>

    </header>
    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

</body>

</html>