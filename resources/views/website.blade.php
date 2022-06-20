@include('header')
<style type="text/css">

            .img-icon {
                /* border-radius: 50%; */
                /* margin-right: 60px;
                margin-top: 20px; */
                width:100px;
                height:100px;
                margin: auto;
                /* margin: 10% 10% 10% 10%; */
                

            }
            .bg-icon:hover{
                box-shadow: 1px 10px 10px #ccc;
            }
            .bg-icon{
                /* width: 20%;
                height: 20%; */
                background-color:#fcfcfc;
                /* border-radius:80%; */
                margin: 6% 4% 6% 4%;
           
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
    <div class="row">
            <div class=" bg-icon col ">
                <a class="text-decoration-none" href="http://36.89.207.251:8001/" target="_blank">
                    <img src="{{asset('images/logo/favicon.png')}}" class="img-icon d-flex align-content-center">
                    <p class="text-center text-black">Serah Terima Barang</p>
                </a>
            </div>
            <div class=" bg-icon col">
            <a class="text-decoration-none" href="http://36.89.207.251:894/" target="_blank">
                <img src="{{asset('images/logo/prtg.png')}}" class="img-icon d-flex align-content-center">
                <p class="text-center text-black">PRTG</p>
            </a>
            </div>
            <div class=" bg-icon col">
            <a class="text-decoration-none" href="http://36.89.207.251:8002/" target="_blank">
                <img src="{{asset('images/logo/ms.png')}}" class="img-icon d-flex align-content-center">
                <p class="text-center text-black">Monitoring Suhu</p>
            </a>
            </div>
            <div class=" bg-icon col">
            <a class="text-decoration-none" href="http://36.89.207.251:881/cacti" target="_blank">
                <img src="{{asset('images/logo/m_logo.png')}}" class="img-icon d-flex align-content-center">
                <p class="text-center text-black">Cacti</p>
            </a>
            </div>
             <div class=" bg-icon col">
            <a class="text-decoration-none" href="http://192.168.2.3/index.php/login" target="_blank">
                <img src="{{asset('images/logo/nextcloud.png')}}" class="img-icon d-flex align-content-center">
                <p class="text-center text-black">Nextcloud</p>
            </a>
            </div>
            <!-- <div class=" bg-icon col">
            <a href="" target="_blank">
                <img src="" class="img-icon ">
            </a>
            </div>
            <div class=" bg-icon col">
            <a href="" target="_blank">
                <img src="" class="img-icon ">
            </a>
            </div> -->
        </div>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')