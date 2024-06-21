<x-layout>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
      <div class="row w-100">
          <div class="col-md-6 mx-auto">
              <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Effettua il Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror

                            <div class="mb-3 form-check">
                                <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Accedi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
