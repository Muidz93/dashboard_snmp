@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Edit IRD</h4>
    </div>
</div>
<div class="container my-3">
    <a href="/" class="btn btn-success"><i class="bi bi-arrow-left"></i></a>
</div>
<div class="tengah">
    <div class="col-lg-7">
        <div class="container py-3 ">
            <main class="form-input">
                <form action="/edit/ird/{{ $snmp->id }}" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="satelit1"
                            class="form-control rounded-top @error('satelit1') is-invalid @enderror" id="satelit1"
                            placeholder="Nomor Channel" value="{{ $snmp->satelit1 }}">
                        <label for="name">Satelit 1</label>
                        @error('satelit1')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="satelit2"
                            class="form-control rounded-top @error('satelit2') is-invalid @enderror" id="satelit2"
                            placeholder="Nomor Channel" value="{{ $snmp->satelit2 }}">
                        <label for="name">Satelit 2</label>
                        @error('satelit2')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="satelit3"
                            class="form-control rounded-top @error('satelit3') is-invalid @enderror" id="satelit3"
                            placeholder="Nomor Channel" value="{{ $snmp->satelit3 }}">
                        <label for="name">Satelit 3</label>
                        @error('satelit3')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="satelit4"
                            class="form-control rounded-top @error('satelit4') is-invalid @enderror" id="satelit4"
                            placeholder="Nomor Channel" value="{{ $snmp->satelit4 }}">
                        <label for="name">Satelit 4</label>
                        @error('satelit4')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                    <hr style="width:80%; margin: auto;" class="my-4">
                    <div class="form-floating">
                        <input type="text" name="sdi_out1"
                            class="form-control rounded-top @error('sdi_out1') is-invalid @enderror" id="sdi_out1"
                            placeholder="Nomor Channel" value="{{ $snmp->sdi_out1 }}">
                        <label for="name">sdi out 1</label>
                        @error('sdi_out1')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="sdi_out2"
                            class="form-control rounded-top @error('sdi_out2') is-invalid @enderror" id="sdi_out2"
                            placeholder="Nomor Channel" value="{{ $snmp->sdi_out2 }}">
                        <label for="name">sdi out 2</label>
                        @error('sdi_out2')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="sdi_out3"
                            class="form-control rounded-top @error('sdi_out3') is-invalid @enderror" id="sdi_out3"
                            placeholder="Nomor Channel" value="{{ $snmp->sdi_out3 }}">
                        <label for="name">sdi out 3</label>
                        @error('sdi_out3')
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
