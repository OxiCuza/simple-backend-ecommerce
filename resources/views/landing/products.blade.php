@extends('landing.layout.app')

@section('content')
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ms-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-lower">PROMO !! DISCOUNT UP TP 50% !!</span>
                            <span class="section-heading-upper">Sepatu PDL TNI , POLISI , SECURITY & BANSER (MURAH BERKUALITAS)</span>                            </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('landing_page/assets/img/1.jpg')}}" alt="..." />
                <br><img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('landing_page/assets/img/5.jpg')}}" alt="..." />
                <br><img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('landing_page/assets/img/4.jpg')}}" alt="..." />
                </br>
                <div class="product-item-description d-flex me-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0"> <b>DESKRIPSI : </b></p>
                        <body> Sepatu dinas PDL langsung dr pengrajin , melayani part kecil dan part besar , mulai ukuran 38-45.</body>
                        <br>* LEM ORI yg kami gunakan menambah DAYA REKAT LUAR BIASA
                        <br>* Bahan kulit sintetic TRP (tahan terhadap lipatan saat di pakai)
                        <br>* SOL KARET ORI ANTISLIP
                        <br>* Sepatu semakin kuat dg SOL JAHITAN nylon memutar
                        <br>* ADA RESLITING YKK memudahkan dlm PENGGUNAAN</br>
                        <br> <b>Size Chart :</b>
                        <br> Size 39= INSOLE 24 cm
                        <br> Size 40= INSOLE 25 cm
                        <br> Size 41= INSOLE 26 cm
                        <br> Size 42= INSOLE 27 cm
                        <br> Size 43= INSOLE 28 cm
                        <br> Size 44= INSOLE 28,5 cm
                        <br> Size 45= INSOLE 29 cm
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ms-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">Beras</span>
                            <span class="section-heading-lower">Beras Pacet dan Bramu</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('landing_page/assets/img/products-03.jpg')}}" alt="..." />
                <div class="product-item-description d-flex me-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0">Rasanya enak dan mantap</p></div>
                </div>
            </div>
        </div>
    </section>
@endsection
