<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Twelve Laravel</a>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('laravel')}}">Laravel</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 