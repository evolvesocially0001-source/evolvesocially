@include('Website.Home.Header')
<style>
    .catalog-section {
        padding-top: 60px;
        margin-top: 120px
    }

    .catalog-section .container {
        max-width: 1280px !important
    }

    .catalog-icon {
        width: 80px;
        height: 80px;
        /* Makes all icons uniform */
        margin: 0 auto 20px;
        /* Centers perfectly */
        object-fit: contain;
        display: block;
    }

    .catalog-card:nth-child(4) .catalog-icon {
        width: 100px;
    }


    .catalog-title {
        font-size: 48px;
        font-weight: 700;
        color: #0D1B2A
    }

    .catalog-card {
        background: #fff;
        padding: 40px 20px;
        border-radius: 16px;
        text-align: center;
        min-height: 220px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-shadow: 0px 20px 50px rgba(0, 0, 0, .08);
        transition: all .3s ease
    }

    .catalog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 25px 55px rgba(0, 0, 0, .12)
    }

    .catalog-icon {
        width: 80px;
        height: auto;
        margin-bottom: 20px;
        object-fit: contain
    }

    .catalog-name {
        font-size: 20px;
        font-weight: 600;
        color: #0D1B2A;
        margin-top: 10px
    }
</style>
<section class="catalog-section py-5">
    <div class="container">
        <h2 class="catalog-title text-center mb-5">Catalog</h2>
        <br>
        <div class="row justify-content-center">

            <!-- Card 1 -->

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                <a href="{{ route('websitecatalog') }}">
                    <div class="catalog-card">
                        <img src="{{ asset('Website/assets/img/catalog/website.png') }}" class="catalog-icon"
                            alt="">

                        <h4 class="catalog-name">Website</h4>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                <a href="{{ route('logocatalog') }}">
                    <div class="catalog-card">
                        <img src="{{ asset('Website/assets/img/catalog/logo.png') }}" class="catalog-icon"
                            alt="">
                        <h4 class="catalog-name">Logo</h4>
                    </div>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="catalog-card">
                    <img src="{{ asset('Website/assets/img/catalog/brochure.png') }}" class="catalog-icon"
                        alt="">
                    <h4 class="catalog-name">Brochure</h4>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="catalog-card">
                    <img src="{{ asset('Website/assets/img/catalog/insta.png') }}" class="catalog-icon" alt="">

                    <h4 class="catalog-name">Instagram Post</h4>
                </div>
            </div>

        </div>
    </div>
</section>

@include('Website.Home.Footer')
