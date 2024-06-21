<x-layout>
  <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card shadow-sm">
                  <div class="card-header bg-primary text-white">
                      <h4 class="mb-0">Registrati ora:</h4>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="/register" novalidate>
                          @csrf
                          
                          <div class="mb-3">
                              <label for="name" class="form-label">Nome</label>
                              <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}" required>
                          </div>
                          
                          @error('name')
                          <div class="alert alert-danger" role="alert">
                              {{$message}}
                          </div>
                          @enderror

                          <div class="mb-3">
                              <label for="surname" class="form-label">Cognome</label>
                              <input name="surname" type="text" class="form-control" id="surname" value="{{ old('surname') }}" required>
                          </div>

                          @error('surname')
                          <div class="alert alert-danger" role="alert">
                              {{$message}}
                          </div>
                          @enderror

                          <div class="mb-3">
                              <label for="age" class="form-label">Età</label>
                              <input name="age" type="number" class="form-control" id="age" value="{{ old('age') }}" required>
                          </div>

                          @error('age')
                          <div class="alert alert-danger" role="alert">
                              {{$message}}
                          </div>
                          @enderror

                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}" required>
                          </div>

                          @error('email')
                          <div class="alert alert-danger" role="alert">
                              {{$message}}
                          </div>
                          @enderror

                          <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input name="password" type="password" class="form-control" id="password" required>
                          </div>

                          @error('password')
                          <div class="alert alert-danger" role="alert">
                              {{$message}}
                          </div>
                          @enderror

                          <div class="mb-3">
                              <label for="password_confirmation" class="form-label">Conferma Password</label>
                              <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" required>
                          </div>

                          <button type="submit" class="btn btn-primary w-100">Registrati</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</x-layout>
