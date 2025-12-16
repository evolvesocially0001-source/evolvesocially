@include('Website.Home.Header')

<style>
    .catalog-section {
        padding-top: 80px;
        padding-bottom: 40px;
    }

    .catalog-title {
        font-size: 48px;
        font-weight: 700;
        color: #0D1B2A;
        margin-bottom: 50px;
    }

    /* Card */
    .catalog-card {
        background: #fff;
        padding: 35px 20px;
        border-radius: 18px;
        text-align: center;
        height: 200px;
        /* SAME HEIGHT LIKE YOUR SCREENSHOT */
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.06);
        border: 1px solid #f1f1f1;
        transition: .3s;
    }

    .catalog-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 25px 55px rgba(0, 0, 0, 0.12);
    }

    .catalog-icon {
        width: 75px;
        /* EXACT SIZE FROM YOUR SCREENSHOT */
        height: 75px;
        object-fit: contain;
        margin: 0 auto 15px;
    }

    .catalog-name {
        font-size: 17px;
        font-weight: 600;
        color: #0D1B2A;
        text-transform: capitalize;
    }

    /* Enable flex wrapping for proper alignment */
    .catalog-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* EXACT GRID LIKE YOUR SCREENSHOTS */

    /* Desktop 5 per row */
    @media(min-width:1200px) {
        .catalog-col {
            width: 20%;
            padding: 12px;
        }
    }

    /* Large Tablet / small laptop – 3 per row */
    @media(min-width:768px) and (max-width:1199px) {
        .catalog-col {
            width: 33.33%;
            padding: 12px;
        }
    }

    /* Mobile — 2 per row */
    @media(max-width:767px) {
        .catalog-col {
            width: 50%;
            padding: 12px;
        }
    }
</style>

<br>
<br>
<br>
<br>
<section class="catalog-section">
    <div class="container text-center">

        <h2 class="catalog-title">Catalog Website</h2>

        <div class="catalog-row">

            @foreach ($categories as $item)
                <div class="catalog-col">
                    <a href="{{ route('websitecatalog.list', Str::slug($item->title)) }}" style="text-decoration:none">

                        <div class="catalog-card">

                            <!-- IMAGE -->
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" class="catalog-icon">
                            @else
                                <img src="https://via.placeholder.com/120" class="catalog-icon">
                            @endif

                            <!-- TITLE -->
                            <h4 class="catalog-name">{{ $item->title }}</h4>

                        </div>
                    </a>
                </div>
            @endforeach



        </div>
    </div>
</section>

@include('Website.Home.Footer')
