<x-layout>

    <h1 class="title">Welcome Back</h1>
        <div class="mx-auto max-w-screen-sm card">

            <form action="{{route('login')}}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="email">email</label>
                  <input type="text" name="email" class="input" value="{{old('email')}}">
                   @error('email')
                     <p class="error">{{$message}}</p>
                  @enderror  

                </div>
                <div class="mb-4">
                    <label for="username">Password</label>
                  <input type="password" name="password" class="input" >  
                   @error('failed')
                     <p class="error">{{$message}}</p>
                  @enderror

                </div>

              
                    <div class="mb-4 flex items-center space-x-2">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                        

                </div>
                

                <button class="primary-btn" >Login</button>

            </form>


        </div>
 
    </x-layout>
