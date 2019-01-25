@extends('template')

@section('content')
    <main class="main">
    <div class="h1-wrapper">
        <div class="title-h1">
            <span class="title-letter">Cli</span>
            <span class="title-circle">GO</span>
        </div>
        <div class="title-click">
            <span class="left-border">-</span>УБОРКА В ОДИН КЛИК <span class="right-border">-</span>
        </div>
    </div>
    <div class="main-button-wrapper">
        <div class="main-button">Связаться с нами</div>
    </div>
    <div class="main-center-wrapper">
        <div class="h2-wrapper">
            <h2 class="title-h2">ВИДЫ УСЛУГ</h2>
        </div>
        <div class="center-content">
            Сотрудники компании «CLIGO» придерживаются высоких стандартов в каждом аспекте деятельности и всегда
            качественно выполняют работу. Каждый сотрудник нашей организации прошел специальное обучение и имеет
            необходимую квалификацию, позволяющую удовлетворить разноплановые и постоянно меняющиеся потребности
            клиентов. Взгляните на список услуг, которые мы предлагаем.
        </div>
    </div>
    <div class="main-content-wrapper">
        <a href="#" class="content-work">
            <div class="work-title">
                КВАРТИРА
            </div>
            <div class="work-image">
                <img src="img/home_general.webp" alt="home"/>
            </div>
        </a>
        <a href="#" class="content-work">
            <div class="work-title">
                КОТТЕДЖ
            </div>
            <div class="work-image">
                <img src="img/room_general.webp" alt="room"/>
            </div>
        </a>
        <a href="#" class="content-work">
            <div class="work-title">
                ПОСЛЕ РЕМОНТА
            </div>
            <div class="work-image">
                <img src="img/repairs_general.webp" alt="rapairs"/>
            </div>
        </a>
    </div>
    <div class="bg-black">
        <div class="main-center-wrapper aboutUs-wrapper">
            <div class="h2-wrapper">
                <h2 class="title-h2">О НАС</h2>
            </div>
            <div class="center-content aboutUs-content">
                Клининговая компания с отличной репутацией — это то, что вам нужно? Поздравляем, вы нашли то, что
                искали. «CLIGO» поможет вам в любое время и в любом месте. Результаты нашей работы не только отвечают
                запросам клиентов, но и превосходят их ожидания.
            </div>
        </div>
    </div>
    <div class="bg-black">
        <div class="feedback-wrapper">
            <div class="feedback-content">
                <div class="feedback-title">
                    Пользуюсь несколько месяцев и уже не могу представить свою жизнь без клинера! Начинал с разовой
                    уборки, сейчас пришел к удобному для меня формату (одна уборка в неделю), который позволил выкинуть
                    все порошки, швабры, губки и вообще не париться про уборку.

                    <span class="feedback-title-name">Кристина Гриневич</span>
                </div>
            </div>
            <div class="feedback-bg">
                <img src="img/feedback-image.webp" alt="feedback-image"/>
            </div>
        </div>
    </div>
    </main>
    @endsection

