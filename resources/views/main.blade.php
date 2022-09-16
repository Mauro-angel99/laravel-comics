<main>
    <div class="content">
        <div class="container">
            <div class="row comics">
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span>{{ $comic['title'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="options">
        <div class="container">
            <div class="row">
                <div class="option">
                    <img class="option-img" src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    <span class="option-text">DIGITAL COMICS</span>
                </div>
                <div class="option">
                    <img class="option-img" src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    <span class="option-text">DC MERCHANDISE</span>
                </div>
                <div class="option">
                    <img class="option-img" src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    <span class="option-text">SUBSCRIPTIONS</span>
                </div>
                <div class="option">
                    <img class="option-img" src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    <span class="option-text">COMIC SHOP LOCATOR</span>
                </div>
                <div class="option">
                    <img class="option-img" src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    <span class="option-text">DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
</main>