@include('header')

<div class=" justify-content-center"> {{-- row membuat keluar viewport --}}
    <div class="col-md-3">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/channel/edit/{{$channel->id}}" method="post">  
                    @csrf   
                  <h1 class="h3 mb-3 fw-normal text-center">Input Channel</h1>
                  <div class="form-floating">
                    <input type="text" 
                        name="nmr" 
                        class="form-control rounded-top " 
                        id="nmr" 
                        placeholder="Nomor Channel" required
                        value="{{$channel->nmr}}"
                         >
                    <label for="name">Nomor Channel STB</label>
                  
                  </div>
                  
                  <div class="form-floating">
                    <input type="text" name="nama_chn" 
                        class="form-control" 
                        id="nama_chn" 
                        placeholder="Nama Channel" required value="{{$channel->nama_chn}}" >
                    <label for="nama_chn">Nama Channel</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="kualitas" 
                        class="form-control" 
                        id="kualitas" 
                        placeholder="kualitas" required value="{{$channel->kualitas}}">
                    <label for="kualitas">Kualitas</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="downlink" 
                        class="form-control rounded-bottom" 
                        id="downlink" placeholder="downlink" required value="{{$channel->downlink}}">
                    <label for="downlink">Downlink</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="source" 
                        class="form-control rounded-bottom" 
                        id="source" placeholder="source" required value="{{$channel->source}}">
                    <label for="source">Source</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="freq" 
                        class="form-control rounded-bottom" 
                        id="freq" placeholder="freq" required value="{{$channel->freq}}">
                    <label for="freq">Frequensi</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="pol" 
                        class="form-control rounded-bottom" 
                        id="pol" placeholder="pol" required value="{{$channel->pol}}">
                    <label for="pol">Polaris</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="sr" 
                        class="form-control rounded-bottom" 
                        id="sr" placeholder="sr" required value="{{$channel->sr}}">
                    <label for="sr">Symbol Rate</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="metro" 
                        class="form-control rounded-bottom" 
                        id="metro" placeholder="metro" required value="{{$channel->metro}}">
                    <label for="metro">Metro-E</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="multicast" 
                        class="form-control rounded-bottom" 
                        id="multicast" placeholder="multicast" required value="{{$channel->multicast}}">
                    <label for="multicast">Multicast</label>
                
                  </div>

                  <div class="form-floating">
                    <input type="text" name="port" 
                        class="form-control rounded-bottom" 
                        id="port" placeholder="port" required value="{{$channel->port}}">
                    <label for="port">Port</label>
                
                  </div>

                  <button class="btn btn-success mt-3 col-md-10" type="submit">edit</button>
                </form>
                
              </main>
            </div>
    </div>
</div>
@include('footer')