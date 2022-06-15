@include('header')

<div class="tengah">
    <div class="col-md-4">
        <div class="container mt-5 pt-5 pb-5 bg-light">
          
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
             {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

            <main class="form-signin">
                <form action="/login" method="post">
                  @csrf     
                  <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                  <div class="form-floating">
                    <input type="name" name = "name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name@example.com" autofocus required>
                    <label for="name">username</label>
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label><br>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not registered? 
                    <a href="/register">Register Now!</a>
                </small>
              </main>
            </div>
    </div>
</div>
@include('footer')