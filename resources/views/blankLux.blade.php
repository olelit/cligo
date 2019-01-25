@extends('template')

@section('content')
    <main class="blank-kvartira-main">
        <div class="blank-kvartira-body">
            <div class="blank-kvartira-content">
                <div class="blank-kvartira-image">
                    <img src="img/home_general.webp" alt="home_general"/>
                </div>
                <div class="blank-kvartira-title">
                    УБОРКА КВАРТИРЫ
                </div>
                <div class="blank-kvartira-service">
                    В уборку входит уборка одной жилой комнаты, коридора, балкона, санузла и кухни.
                </div>
                <div class="blank-kvartira-price-wrapper">
                    <span class="price-from">От</span>
                    <span class="blank-kvartira-price">40р</span>
                </div>
                <div class="blank-kvartira-price-wrapper blank-width">
                    <span class="blank-kvartira-room">Кол-во комнат:</span>
                    <span class="room-from">1</span>
                    <img class="plus-click-room" src="img/plus.svg" alt="plus"/>
                </div>
                <div class="blank-kvartira-price-wrapper blank-width">
                    <span class="blank-kvartira-bathroom">Санузел:</span>
                    <span class="bathroom-from">1</span>
                    <img class="plus-click-bathroom" src="img/plus.svg" alt="plus"/>
                </div>
                <div class="price-button">
                    Записаться
                </div>
            </div>
        </div>
    </main>
@endsection


