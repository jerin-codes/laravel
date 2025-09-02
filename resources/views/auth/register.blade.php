<x-layout>

    <h1 class="title">Register a new account</h1>
        <div class="mx-auto max-w-screen-sm card">

            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username">User name</label>
                  <input type="text" name="username" class="input @error('username') ring-red-500 @enderror"   value="{{old('username')}}">  
                  @error('username')
                     <p class="error">{{$message}}</p>
                  @enderror

                </div>
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
                   @error('password')
                     <p class="error">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-8">
                    <label for="username">Confiem Password</label>
                  <input type="password" name="password_confirmation" class="input">  

                </div>

                <button class="primary-btn" >Register</button>

            </form>


        </div>
 
    </x-layout>
