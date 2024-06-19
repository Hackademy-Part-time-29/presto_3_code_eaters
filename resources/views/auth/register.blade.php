<x-layout>
    <form method="POST" action="/register">
        @csrf

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" >
        </div>
        @error('name')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          </div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cognome</label>
            <input name="surname" type="text" class="form-control" >
        </div>

        @error('surname')
        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Età</label>
            <input name="age" type="number" class="form-control" >
        </div>

        @error('age')
        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input name='email' type="email" class="form-control" >
        </div>

        @error('email')
        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name='password' type="password" class="form-control" >
        </div>

        @error('password')
        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
            <input name="password_confirmation" type="password" class="form-control" >
        </div>

    
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layout>