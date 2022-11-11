@include('header')

<div class="tengah">
    <div class="col-lg-7">
        <div class="container mt-5 pt-5 pb-5 ">
            <main class="form-input">
                <form action="/encoder/add" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Input encoder</h1>
                    <div class="form-floating">
                        <input type="text" name="merk"
                            class="form-control rounded-top @error('merk') is-invalid @enderror" id="merk"
                            placeholder="merk" required value="{{ old('merk') }}">
                        <label for="name">merk</label>
                        @error('merk')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"
                            id="type" placeholder="type" required value="{{ old('type') }}">
                        <label for="type">type</label>
                        @error('type')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="sn" class="form-control @error('sn') is-invalid @enderror"
                            id="sn" placeholder="sn" required value="{{ old('sn') }}">
                        <label for="sn">sn</label>
                        @error('sn')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="control"
                            class="form-control rounded-bottom @error('control') is-invalid @enderror" id="control"
                            placeholder="control" required value="{{ old('control') }}">
                        <label for="control">ip control</label>
                        @error('control')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="owner"
                            class="form-control rounded-bottom @error('owner') is-invalid @enderror" id="owner"
                            placeholder="owner" required>
                        <label for="owner">owner</label>
                        @error('owner')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="used"
                            class="form-control rounded-bottom @error('used') is-invalid @enderror" id="used"
                            placeholder="used" required value="{{ old('used') }}">
                        <label for="used">used</label>
                        @error('used')
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
