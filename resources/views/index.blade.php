@extends('layouts.app')

@section('content')

<!-- div INDEX -->
<div id="Mindex">
    <!-- MAIN -->
    <main role="main">
        <!-- TOP SECTION -->
        <section class="grid">
            <!-- Main Carousel -->
            <div class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
                <div class="item background-image" style="background-image:url(/img/388351636.jpg)">
                    <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Automatiza tu casa por $11,800.00 MXN *</p>
                    <p class="text-padding text-size-20 text-dark text-uppercase background-white">* 5 cotroles de iluminación + 2 cámaras de vigilancia interior + 2 sensores de seguridad + 2 plug-in</p>
                </div>
                <div class="item background-image" style="background-image:url(/img/1058307.jpg)">
                    <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Inspired by Technologies</p>
                    <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
                </div>
                <!-- <div class="item background-image" style="background-image:url(/img/208978141.jpg)"> -->
                <div class="item background-image" style="background-image:url(/img/389808604.jpg)">
                    <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">CSS and HTML is our Playground</p>
                    <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
                </div>
            </div>
        </section>
        <!-- SECTION 1 -->
        <section class="grid margin text-center">
            <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red hover-zoom">
                <i class="icon-sli-bulb text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Ahorro energético</h3>
            </a>
            <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue hover-zoom">
                <i class="icon-sli-magic-wand text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Aplicaciones Comfort</h3>
            </a>
            <!-- Image-->
            <img class="m-12 l-6 l-row-2 margin-bottom" src="/img/395019788.jpg">

            <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange hover-zoom">
                <i class="icon-sli-camrecorder text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Seguridad</h3>
            </a>
            <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua hover-zoom">
                <i class="icon-sli-speedometer text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Medición</h3>
            </a>
        </section>
    </main>
</div>


      


        
@endsection