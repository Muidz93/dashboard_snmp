@include('header')

<div class="tengah">
    <div class="col-lg-7">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/data/edit/{{$gdrive->id}}" method="post" autocomplete="off">  
                    @csrf   
                  <h1 class="h3 mb-3 fw-normal text-center">Input Gdrive</h1>
                  <div class="form-floating">
                    <input type="text" 
                        name="nama"
                        class="form-control rounded-top @error('nama') is-invalid @enderror" 
                        id="nama" 
                        placeholder="Nomor Channel" required value="{{ $gdrive->nama_file }}">
                    <label for="name">Nama File</label>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror  
                  </div>
                  
                  <div class="form-floating">
                    <input type="text" name="owner" 
                        class="form-control @error('owner') is-invalid @enderror" 
                        id="owner" 
                        placeholder="Nama Channel" required value="{{ $gdrive->owner }}">
                    <label for="owner">Owner</label>
                    @error('owner')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="link" 
                        class="form-control @error('link') is-invalid @enderror" 
                        id="link" 
                        placeholder="link" required value="{{ $gdrive->link }}">
                    <label for="link">link</label>
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>
                  <button class="btn btn-lg btn-primary mt-3 mx-auto" type="submit">Submit</button>
                </form>
                
              </main>
            </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')