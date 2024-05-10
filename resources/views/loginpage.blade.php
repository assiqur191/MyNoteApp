

<x-layout>
    <!-- Custom styles for this template -->
    <!doctype html>
    <html>

    <head>
      <link rel="stylesheet" href="../login.css">
    </head>
   
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="/loginaction" method="POST" class="form-signin w-100 m-auto">
    @csrf
    <img class="mb-4" src="./public/dc477f2b-e2bb-429f-b841-ab12d3272a56.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="loginusername" type="username" class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input name="loginpassword" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 20-20</p>
  </form>
</main>
 
  </body>
    </html>

    </x-layout>