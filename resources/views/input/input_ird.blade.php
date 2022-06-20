@include('input.header')

<div class="row justify-content-left">
    <div class="col-lg-7">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/input" method="post">  
                    @csrf   
                  <h1 class="h3 mb-3 fw-normal text-center">Input IRD</h1>
                  <div class="form-floating">
                    <input type="text" 
                        name="sn" 
                        class="form-control rounded-top @error('sn') is-invalid @enderror" 
                        id="sn" 
                        placeholder="Serial Number" required value="{{ old('sn') }}">
                    <label for="name">Serial Number</label>
                    @error('sn')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror  
                  </div>
                  
                  <div class="form-floating">
                    <input type="text" name="merk" 
                        class="form-control @error('merk') is-invalid @enderror" 
                        id="merk" 
                        placeholder="Merk" required value="{{ old('merk') }}">
                    <label for="merk">Merk</label>
                    @error('merk')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="type" 
                        class="form-control @error('type') is-invalid @enderror" 
                        id="type" 
                        placeholder="name@example.com" required value="{{ old('type') }}">
                    <label for="type">Type</label>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="owner" 
                        class="form-control rounded-bottom @error('owner') is-invalid @enderror" 
                        id="owner" placeholder="owner" required value="{{ old('owner') }}">
                    <label for="owner">Owner</label>
                    @error('owner')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="control" 
                        class="form-control rounded-bottom @error('control') is-invalid @enderror" 
                        id="control" placeholder="control" required>
                    <label for="control">IP Control</label>
                    @error('control')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="channel" 
                        class="form-control rounded-bottom @error('channel') is-invalid @enderror" 
                        id="channel" placeholder="channel" required value="{{ old('channel') }}">
                    <label for="channel">Used Channel</label>
                    @error('channel')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <button class="btn btn-lg btn-primary mt-3" type="submit">Submit</button>
                </form>
                
              </main>
            </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')