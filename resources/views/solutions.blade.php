@extends('layouts.app')

@section('content')

<!-- div SOLUCIONES -->
<div id="Msolutions">
    <!-- MAIN -->
    <main role="main">
        <!-- TOP SECTION -->
        <header class="grid">
            <div class="s-12 padding-2x">
                <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Our References</h1>
                <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </header>


        <!-- REFERENCES -->
        <section class="tabs background-primary-hightlight">

            <!-- First tab -->
            <div class="tab-item tab-active">
                <!-- <a class="tab-label active-btn text-white text-uppercase" data-url="web-design">Web Design</a> -->
                <div class="grid tab-content">
                    <!-- Item 1 -->
                    <div class="m-12 l-6 padding-2x margin-bottom background-light-blue text-right">
                        <p class="text-strong text-size-80 text-white">01</p>
                        <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Diam nonummy nibh euismod tincidunt</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        <a class="button-more background-white" href="sample-reference.html">show item</a>
                    </div>
                    <div class="m-12 l-6 margin-bottom">
                        <a class="image-hover-zoom" href="sample-reference.html">
                            <img src="/img/portfolio/thumb-01.jpg" alt="" title="Portfolio Image 1" />
                        </a>
                    </div>

                    <!-- Item 2 -->
                    <div class="m-12 l-6 margin-bottom">
                        <a class="image-hover-zoom" href="sample-reference.html">
                            <img src="/img/portfolio/thumb-02.jpg" alt="" title="Portfolio Image 2" />
                        </a>
                    </div>
                    <div class="m-12 l-6 padding-2x margin-bottom background-pink">
                        <p class="text-strong text-size-80 text-white">02</p>
                        <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Volutpat dis eget eligendi aliquip dolorum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        <a class="button-more background-white" href="sample-reference.html">show item</a>
                    </div>

                    <!-- Item 3 -->
                    <div class="m-12 l-6 padding-2x margin-bottom background-green text-right">
                        <p class="text-strong text-size-80 text-white">03</p>
                        <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Diam nonummy nibh euismod tincidunt</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        <a class="button-more background-white" href="sample-reference.html">show item</a>
                    </div>
                    <div class="m-12 l-6 margin-bottom">
                        <a class="image-hover-zoom" href="sample-reference.html">
                            <img src="/img/portfolio/thumb-03.jpg" alt="" title="Portfolio Image 3" />
                        </a>
                    </div>


                </div>
            </div>

        </section>

    </main>
</div>


      


        
@endsection