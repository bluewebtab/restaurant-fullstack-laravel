<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
    <section id="app-layout">
    @include('includes.side-menu')
    <div class="welcome-jumbo">
      <img src="/img/mainpic.jpg"/>
      
    </div>
  </section>
  @yield('content')
  
    </body>
</html>
