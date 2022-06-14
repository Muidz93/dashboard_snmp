@extends('header')
<br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="nf">
                <h1 class="text-center">Upss Sorry</h1>
                <h2>
                    "{{ $er }}" Tidak Di Temukan
                </h2>
                <a href="/" class="btn btn-success col-md-12">Home</a>
            </div>
        </div>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
@extends('footer')