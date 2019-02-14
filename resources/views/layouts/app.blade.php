<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> <!--用來獲取app.php的locale選項，來切換語言-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - Laravel進階教程</title>
  <meta name="description" content="@yield('description', 'LaraBBS 愛好者社區')" />

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @yield('styles')

</head>

<body>
  <div id="app" class="{{ route_class() }}-page"><!--route_class()是我們自定義的輔助方法，我們還需要在helpers.php文件中添加此方法-->

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>

  @yield('scripts')

</body>

</html>