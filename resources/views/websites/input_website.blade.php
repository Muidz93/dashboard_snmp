@include('header')

<div class="tengah">
    <div class="col-lg-7">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/website/add" method="post" autocomplete="off" enctype="multipart/form-data">  
                    @csrf   
                  <h1 class="h3 mb-3 fw-normal text-center">Input Website</h1>
                  <div class="form-floating">
                    <input type="text" 
                        name="nama"
                        class="form-control rounded-top @error('nama') is-invalid @enderror" 
                        id="nama" 
                        placeholder="Nomor Channel" required value="{{ old('nama') }}">
                    <label for="name">Nama Website</label>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror  
                  </div>
                  <div class="form-floating">
                    <input type="text" name="link" 
                        class="form-control @error('link') is-invalid @enderror" 
                        id="link" 
                        placeholder="link" required value="{{ old('link') }}">
                    <label for="link">link</label>
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>
                    <hr width="50">
                  <label for="logo">logo</label>
                  <div class="form-group">
                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"
                                id="logo">
                    @error('logo')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                     </div>
                  <button class="btn btn-lg btn-primary mt-3 mx-auto" type="submit">Simpan</button>
                </form>
                
              </main>
            </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>

@include('footer')