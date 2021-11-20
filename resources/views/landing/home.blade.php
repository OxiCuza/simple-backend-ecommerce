@extends('landing.layout.app')

@section('content')
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('landing_page/assets/img/intro_cobajpg.jpg')}}" alt="..." />
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">VISI MISI</span>
                        <span class="section-heading-lower">BUMDES MALL </span>
                    </h2>
                    <p class="mb-3" text-align="justify"> 1. Meningkatkan perekonomian desa serta Meningkatkan usaha masyarakat dalam pengelolaan potensi ekonomi desa
                        <br> 2 Mengelola program yang masuk ke Desa, terutama dalam rangka mengentaskan kemiskinan dan pengembangan usaha ekonomi
                        pedesaan.
                    </p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" target="_blank" href="https://www.google.com/maps/place/Kantor+Kepala+Desa+Kenanten/@-7.4985174,112.4430541,17z/data=!3m1!4b1!4m5!3m4!1s0x2e780d69349e6507:0xf21b7bc20186b082!8m2!3d-7.4985231!4d112.4452939">Visit Us Today!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
