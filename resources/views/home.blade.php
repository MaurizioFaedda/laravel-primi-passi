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
                        <h2>Laravel</h2>

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
                <h1>Home</h1>
                
            </div>
        </main>
        <footer>

        </footer>

    </body>
</html>
