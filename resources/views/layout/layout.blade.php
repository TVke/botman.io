
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BotMan - The PHP messaging and chatbot library</title>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="icon" href="/favicon.png">
</head>
<body>
  @yield('content')
  <script>
      var algolia_app_id = '{{ Config::get("algolia.connections.main.id", false) }}';
      var algolia_search_key = '{{ Config::get("algolia.connections.main.search_key", false) }}';
      @if(isset($currentVersion))
        var version = '{{ $currentVersion }}';
      @endif
  </script>
  @include('partials.algolia_template')
  <script async type="text/javascript" src="/js/app.js"></script>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-75386803-2', 'auto');
      ga('send', 'pageview');
  </script>
</body>
</html>
