<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <div class="container">
                <div class="row menu">
                    <div class="col-md-4 logo">
                        <h2 class="">Laravel</h2>
                    </div>
                    <div class="col-md-8 my-nav">
                        <ul class="">
                            @foreach ($menu as $key => $value)
                                <li> <a href="{{route($value)}}">{{$key}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </header>
        <main>
            <div class="container">
                <h3>Prodotti</h3>
                <hr>
                <div class="products-box">
                    <h4>Compra un poster realizzato dai nostri migliori fotografi</h4>
                    <div class="my-products">
                        @foreach ($products_list as $value)
                            <div class="card-photo text-center">
                                <img src="{{$value['image']}}" alt="">
                                <p>{{$value['artist']}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </main>
        <footer>

        </footer>

    </body>
</html>
