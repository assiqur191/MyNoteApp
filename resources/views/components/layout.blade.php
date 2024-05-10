

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Note App</title> <!-- Add your title here -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <!-- Custom styles for this template -->
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>
<body>
    @auth

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">NoteApp</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="/logout">Sign out</a>
          </div>
        </div>
      </header>

    @else

    <main>
        <div class="container">
          <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              <h1>NotApp</h1>
            </a>
      
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
            </ul>
      
            <div class="col-md-3 text-end">
                <a href="/login" class="btn btn-outline-primary me-2">Login</a>
              <!--<button  type="button" class="btn btn-outline-primary me-2">Login</button>-->
              
            </div>
             
          </header>
        </div>
      </main>

@endauth
    
      
    



      <!--header ends-->
      @if(session()->has('success'))
      <div class="container container--narrow"></div>
      <div class="alert alert-success text-center">
        {{session('success')}}
      </div>
      @endif()
      @if (session()->has('failure'))
      <div class="container container--narrow"></div>
      <div class="alert alert-danger text-center">
        {{session('failure')}}
  
      @endif

      {{$slot}}
      

<!--footer starts here --->
<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
    </footer>
</div>
<div class="b-example-divider"></div>
<!-- footer end here-->
<script src="/resources/js/app.js"></script>
</body>
</html>
