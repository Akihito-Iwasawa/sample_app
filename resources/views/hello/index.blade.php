<html>
  <head>
    <title>Hello/Index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <h1>Blade/Index</h1>
    <p>controller msg: {{$msg}}</p>
    <p>Request:</p>
    <pre>{{$req}}</pre>
    <p>Request.id: {{$id}}</p>
    <p>Request.url: {{$url}}</p>
    <p>Request.fullUrl: {{$full_url}}</p>
    <p>Request.path: {{$path}}</p>
    <p>Response:</p>
    <pre>{{$res}}</pre>
    <p>Response.status: {{$res->status()}}</p>
    <p>Response.content: {{$res->content()}}</p>
    <p>Response.setcenter: {{$res->setContent('set content params')}}</p>
    <p>{{$post_msg}}</p>
    <form method="post" action="/hello">
      {{csrf_field()}}
      <input type="text" name="post_msg">
      <input type="submit">
    </form>
  </body>
</html>