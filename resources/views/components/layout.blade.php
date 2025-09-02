<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900" >
<header class="bg-slate-800 shadow-lg">
  <nav class="flex justify-between items-center px-6 py-4">
    <!-- Left side -->

    @guest
    <div class="flex items-center gap-6">
      <a href="{{route('login')}}" class="text-white hover:text-slate-300">Login</a>
      <a href="{{route('register')}}" class="text-white hover:text-slate-300">Register</a>
    </div>  
    @endguest
    @auth
    <a href="{{route('home')}}" class="text-white font-semibold hover:text-slate-300">Home</a>  
   <a href="{{route('logout')}}" class="text-white hover:text-slate-300">Logout</a>
    @endauth
    

    <!-- Right side -->
    
  </nav>
</header>

<main class="py-8 px-4 mx-auto ">
   {{$slot}}
</main>
</body>
</html>