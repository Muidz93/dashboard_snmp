@include('header')

<div class=" tengah"> {{-- row membuat keluar viewport --}}
    <div class="col-md-3">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/list_ird/edit/{{ $ird->id }}" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Input ird</h1>

                    <div class="form-floating">
                        <input type="text" name="merk" class="form-control" id="merk" placeholder="Nama ird"
                            required value="{{ $ird->merk }}">
                        <label for="merk">merk ird</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="type" class="form-control rounded-top " id="type"
                            placeholder="Nomor ird" required value="{{ $ird->type }}">
                        <label for="type">type</label>

                    </div>

                    <div class="form-floating">
                        <input type="text" name="sn" class="form-control" id="sn" placeholder="sn"
                            required value="{{ $ird->sn }}">
                        <label for="sn">serial number</label>

                    </div>

                    <div class="form-floating">
                        <input type="text" name="control" class="form-control rounded-bottom" id="control"
                            placeholder="control" required value="{{ $ird->control }}">
                        <label for="control">ip control</label>

                    </div>

                    <div class="form-floating">
                        <input type="text" name="owner" class="form-control rounded-bottom" id="owner"
                            placeholder="owner" required value="{{ $ird->owner }}">
                        <label for="owner">owner</label>

                    </div>

                    <div class="form-floating">
                        <input type="text" name="channel" class="form-control rounded-bottom" id="channel"
                            placeholder="channel" required value="{{ $ird->channel }}">
                        <label for="channel">used channel</label>
                    </div>
                    <button class="btn btn-success mt-3 col-md-10" type="submit">edit</button>
                </form>

            </main>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')
