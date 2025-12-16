@include('Website.Home.Header')

<style>
    /* ===================== */
    /* GLOBAL SAFE FIX */
    /* ===================== */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    /* ===================== */
    /* PAGE BACKGROUND */
    /* ===================== */
    .catalog-page {
        background: #fff;
        padding: 100px 0 80px;
    }

    /* ===================== */
    /* TITLE */
    /* ===================== */
    .catalog-title {
        font-size: 48px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
        color: #1b3558;
    }

    /* ===================== */
    /* CONTENT WRAPPER */
    /* ===================== */
    .catalog-wrapper {
        max-width: 1200px;
        margin: auto;
    }

    /* ===================== */
    /* GRID */
    /* ===================== */
    .catalog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .catalog-card {
        width: 100%;
    }

    .catalog-card img {
        width: 100%;
        max-width: 100%;
        display: block;
        border-radius: 14px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .15);
    }

    /* ===================== */
    /* MOBILE TRANSFORMATION */
    /* ===================== */
    @media (max-width: 991px) {

        .container {
            width: 100%;
            padding-left: 12px;
            padding-right: 12px;
        }

        .catalog-page {
            background: #2c3e50;
            padding: 100px 0 60px;
        }

        .catalog-title {
            font-size: 32px;
            color: #0D1B2A;
            background: #fff;
            max-width: 420px;
            margin: 0 auto 25px;
            padding: 20px 10px;
            border-radius: 22px 22px 0 0;
        }

        .catalog-wrapper {
            max-width: 420px;
            width: 100%;
            background: #fff;
            padding: 20px 15px 40px;
            margin: 0 auto;
            border-radius: 0 0 22px 22px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, .35);
        }

        .catalog-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="catalog-page">
    <div class="container">

        <br><br><br>

        <!-- 🔥 Dynamic Category Title -->
        <h2 class="catalog-title">
            Catalog List – {{ $category->title }}
        </h2>

        <div class="catalog-wrapper">
            <div class="catalog-grid">

                @forelse ($products as $product)
                    <div class="catalog-card">
                        <a href="{{ $product->url }}">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $category->title }}">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No Image">
                            @endif
                        </a>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align:center;">
                        <p>Catalog items Comming Soon...</p>
                    </div>
                @endforelse

            </div>
        </div>

    </div>
</section>

@include('Website.Home.Footer')
