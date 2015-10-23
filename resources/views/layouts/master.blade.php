<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Best Friend')
    </title>

    <meta charset='utf-8'>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Arial';
            background: #AFD4CE;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: top;
            background: #999966;
            width: 32em;
            min-width: 32em;
        }
        .output{
          margin-top: 40px;
          margin-left: 20px;
          font-family: 'Courier';
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 46px;
            font-family: 'times';
        }
    </style>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>

    </header>

    <section class = 'container'>
        {{-- Main page content will be yielded here --}}
        <div class='content'>
          @yield('content')
          <footer>
              <a href='/'>Home</a><br>
              &copy; {{ date('Y') }}
          </footer>
        </div>
    </section>

    <section class='output'>
      @yield('output')
    </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
