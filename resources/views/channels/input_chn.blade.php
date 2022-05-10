@include('channels.header')

<div class="tengah">
    <div class="col-lg-7">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/channels" method="post">  
                    @csrf   
                  <h1 class="h3 mb-3 fw-normal text-center">Input Channel</h1>
                  <div class="form-floating">
                    <input type="text" 
                        name="nmr"
                        class="form-control rounded-top @error('nmr') is-invalid @enderror" 
                        id="nmr" 
                        placeholder="Nomor Channel" required value="{{ old('nmr') }}">
                    <label for="name">Nomor Channel STB</label>
                    @error('nmr')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror  
                  </div>
                  
                  <div class="form-floating">
                    <input type="text" name="nama_chn" 
                        class="form-control @error('nama_chn') is-invalid @enderror" 
                        id="nama_chn" 
                        placeholder="Nama Channel" required value="{{ old('nama_chn') }}">
                    <label for="nama_chn">Nama Channel</label>
                    @error('nama_chn')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="kualitas" 
                        class="form-control @error('kualitas') is-invalid @enderror" 
                        id="kualitas" 
                        placeholder="kualitas" required value="{{ old('kualitas') }}">
                    <label for="kualitas">Kualitas</label>
                    @error('kualitas')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="downlink" 
                        class="form-control rounded-bottom @error('downlink') is-invalid @enderror" 
                        id="downlink" placeholder="downlink" required value="{{ old('downlink') }}">
                    <label for="downlink">Downlink</label>
                    @error('downlink')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="source" 
                        class="form-control rounded-bottom @error('source') is-invalid @enderror" 
                        id="source" placeholder="source" required>
                    <label for="source">Source</label>
                    @error('source')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="freq" 
                        class="form-control rounded-bottom @error('freq') is-invalid @enderror" 
                        id="freq" placeholder="freq" required value="{{ old('freq') }}">
                    <label for="freq">Frequensi</label>
                    @error('freq')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="pol" 
                        class="form-control rounded-bottom @error('pol') is-invalid @enderror" 
                        id="pol" placeholder="pol" required value="{{ old('pol') }}">
                    <label for="pol">Polaris</label>
                    @error('pol')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="sr" 
                        class="form-control rounded-bottom @error('sr') is-invalid @enderror" 
                        id="sr" placeholder="sr" required value="{{ old('sr') }}">
                    <label for="sr">Symbol Rate</label>
                    @error('sr')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="metro" 
                        class="form-control rounded-bottom @error('metro') is-invalid @enderror" 
                        id="metro" placeholder="metro" required value="{{ old('metro') }}">
                    <label for="metro">Metro-E</label>
                    @error('metro')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="multicast" 
                        class="form-control rounded-bottom @error('multicast') is-invalid @enderror" 
                        id="multicast" placeholder="multicast" required value="{{ old('multicast') }}">
                    <label for="multicast">Multicast</label>
                    @error('multicast')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>    
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" name="port" 
                        class="form-control rounded-bottom @error('port') is-invalid @enderror" 
                        id="port" placeholder="port" required value="{{ old('port') }}">
                    <label for="port">Port</label>
                    @error('port')
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

@include('footer')