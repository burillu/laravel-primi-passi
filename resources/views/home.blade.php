<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - laravel-primi-passi</title>
</head>

<body>
    <div class="container">
        <h1> Il film di oggi: </h1>

        <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
                <img src=" {{$image}}" class="card-img-top my-ratio" alt=" {{$title}} ">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$title}}
                    </h5>

                    <p class="card-text">
                        {{$content}}
                    </p>


                    <div>
                        {{$custom}}
                    </div>


                </div>
            </div>
        </div>
    </div>

</body>

</html>