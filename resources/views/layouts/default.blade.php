<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="header" style="margin-bottom: 12vh">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <div class="left-block d-flex">
                <a class="navbar-brand" href="#">BookSite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('add-author') }}">Добавить автора</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('add-book') }}">Добавить книгу</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('add-book-author') }}">Добавить автора книге</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="rigth-block">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('authors') }}">Авторы</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('books') }}">Книги</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
    </header>
    <div class="conetnt">
        <div class="container">
          @yield('content')
        </div>
    </div>
</body>
</html>