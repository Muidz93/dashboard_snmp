@include('header')

<div class="tengah">
    <div class="col-lg-7">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/irdlive/add" method="post">  
                    @csrf   
                  <h1 class="h3 mb-3 fw-normal text-center">Input IRD Live</h1>
                  <div class="form-floating">
                    <input type="text" 
                        name="ipcontrol"
                        class="form-control rounded-top @error('ipcontrol') is-invalid @enderror" 
                        id="ipcontrol" 
                        placeholder="Nomor Channel" required value="{{ old('ipcontrol') }}">
                    <label for="ipcontrol">IP control Ird live</label>
                    @error('ipcontrol')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror  
                  </div>
                  <button class="btn btn-primary mt-3 col-md-12" type="submit">Tambahkan</button>
                  
                </form>
                
              </main>
            </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')