<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">haha</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link {{( $title === "Home") ? 'active': '' }}" href="/">Home</a>
      <a class="nav-item nav-link {{( $title === "About") ? 'active': '' }}" href="/about"> about</a>
      <a class="nav-item nav-link {{( $title === "Project") ? 'active': '' }}" href="/projects">project</a>
      <a class="nav-item nav-link {{( $title === "Education") ? 'active': '' }}" href="/education">education</a>
      <a class="nav-item nav-link {{( $title === "Posts") ? 'active': '' }}" href="/posts">post</a>
      
    </div>
  </div>
</nav>
<div class="container">
    @yield('content')

</div>
</body>
</html>