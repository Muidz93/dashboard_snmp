@include('header')
<style type="text/css">
            .img-icon {
                /* border-radius: 50%; */
                /* margin-right: 60px;
                margin-top: 20px; */
                width:100px;
                height:100px;
                margin-top:30px;
                margin-left:30px;
            }
            .bg-icon:hover{
                box-shadow: 1px 10px 10px #ccc;
            }
            .bg-icon{
                width:170px;
                height:170px;
                background-color:#fcfcfc;
                /* border-radius:80%; */
            }
            @media(max-width:450px) {
                .bg-icon{
                margin-left:0;
                margin-right:0;
                }
            }
        </style>
<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Kumpulan web West Platform</h4>
    </div>
</div>
<!-- Data IRD -->
<div class="container border my-3">
    <div class="row mx-auto">
            <div class=" bg-icon mx-5 my-4">
                <a class="text-decoration-none" href="http://36.89.207.251:8001/" target="_blank">
                    <img src="{{asset('images/logo/favicon.png')}}" class="img-icon " width="80">
                    <p class="text-center text-black">Serah Terima Barang</p>
                </a>
            </div>
            <div class=" bg-icon mx-5 my-4">
            <a class="text-decoration-none" href="http://36.89.207.251:894/" target="_blank">
                <img src="{{asset('images/logo/prtg.png')}}" class="img-icon " width="80">
                <p class="text-center text-black">PRTG</p>
            </a>
            </div>
            <div class=" bg-icon mx-5 my-4">
            <a class="text-decoration-none" href="http://36.89.207.251:8002/" target="_blank">
                <img src="{{asset('images/logo/ms.png')}}" class="img-icon " width="80">
                <p class="text-center text-black">Monitoring Suhu</p>
            </a>
            </div>
            <div class=" bg-icon mx-5 my-4">
            <a class="text-decoration-none" href="http://36.89.207.251:881/cacti" target="_blank">
                <img src="{{asset('images/logo/m_logo.png')}}" class="img-icon " width="80">
                <p class="text-center text-black">Cacti</p>
            </a>
            </div>
            <!-- <div class=" bg-icon mx-5 my-4">
            <a href="" target="_blank">
                <img src="" class="img-icon ">
            </a>
            </div>
            <div class=" bg-icon mx-5 my-4">
            <a href="" target="_blank">
                <img src="" class="img-icon ">
            </a>
            </div> -->
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>

@include('footer')