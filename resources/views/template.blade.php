<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>CLIGO</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="canonical" href=""/>
</head>
<body>
<header class="header">
    <div class="header-wrapper">
        <div class="header-logo">
            <a class="logo-link" href="index.html">
                <img class="logo-image" src="img/logo.png" alt="logo"/>
            </a>
        </div>
        <nav class="header-nav">
            <ul class="nav-list">
                <li><span>-</span></li>
                <li><a href="index.html">Главная</a></li>
                <li><span>-</span></li>
                <li><a href="kvartira.html">Квартира</a></li>
                <li><span>-</span></li>
                <li><a href="kottedzh.html">Коттедж</a></li>
                <li><span>-</span></li>
                <li><a href="posle-remonta.html">После ремонта</a></li>
                <li><span>-</span></li>
                <li><a href="otzyvy.html">Отзывы</a></li>
                <li><span>-</span></li>
                <li><a href="o-nas.html">О нас</a></li>
                <li><span>-</span></li>
                <li><a href="block-online.html">Онлайн запись</a></li>
            </ul>
        </nav>
    </div>
</header>

    @yield('content')

<footer class="footer">
    <div class="footer-phone">
        <a class="phone" href="tel:+375257279004">+375-25-727-90-04</a>
        <a class="phone" href="tel:+375257645444">+375-25-764-54-44</a>
    </div>
    <div class="footer-social">
        <div class="facebook-wrapper">
            <a href="#">
                <svg class="facebook-icon" width="22px" height="22px" viewBox="0 0 15 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.5262 5.55955L14.0578 5.55536L14.0577 5.55536H14.0577L14.0575 5.55536L14.0567 5.55535L14.0536 5.55532L14.0412 5.55521L13.9929 5.55479L13.8087 5.55328C13.6495 5.55204 13.4209 5.55037 13.1434 5.54871C12.5885 5.54539 11.8378 5.54207 11.0547 5.54207C10.4784 5.54207 10.0698 5.60579 9.8283 5.88011C9.70755 6.01731 9.64309 6.19101 9.60735 6.39108C9.57181 6.58999 9.56231 6.82931 9.56231 7.10946V9.82814V10.0011H9.73528H14.6948L14.4268 15.508H9.73589H9.56292V15.6809V28.2508H3.6308V15.6797V15.5067H3.45782H0.172973V9.99983H3.45772H3.6307V9.82686V6.54032C3.6307 5.06657 4.10397 3.47639 5.23585 2.25634C6.36469 1.03958 8.1653 0.172973 10.8568 0.172973C12.7726 0.172973 14.1783 0.348001 14.2328 0.354984L14.2331 0.355018L14.6574 0.40877L14.5262 5.55955Z"
                          fill="white" stroke="#4F4F4F"></path>
                </svg>
            </a>
        </div>
        <div class="twitter-wrapper">
            <a href="#">
                <svg class="twitter-icon" width="22px" height="22px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title>
                    <path fill="white" d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"></path>
                </svg>
            </a>
        </div>
        <div class="vk-wrapper">
            <a href="#">
                <svg class="vk-icon" width="22" height="22" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2964 4.576C13.2964 4.576 15.4238 1.628 15.6011 0.66C15.6898 0.308 15.5125 0.132 15.1579 0.132C15.1579 0.132 13.9612 0.132 13.3407 0.132C12.9418 0.132 12.7645 0.308 12.6316 0.572C12.6316 0.572 11.6565 2.64 10.4598 3.96C10.0609 4.4 9.88366 4.532 9.66205 4.532C9.48477 4.532 9.39612 4.4 9.39612 4.004V0.616C9.39612 0.132 9.3518 0 8.95291 0H6.0277C5.80609 0 5.67313 0.132 5.67313 0.308C5.67313 0.748 6.33795 0.836 6.33795 2.068V4.532C6.33795 5.016 6.29363 5.236 6.07202 5.236C5.45152 5.236 3.9446 3.08 3.10249 0.616C2.92521 0.132 2.74792 0 2.30471 0H0.443213C0.177285 0 0 0.176 0 0.44C0 0.924 0.576177 3.168 2.83657 6.16C4.34349 8.184 6.33795 9.284 8.1108 9.284C9.21884 9.284 9.48477 9.108 9.48477 8.668V7.128C9.48477 6.732 9.61773 6.556 9.83934 6.556C10.1053 6.556 10.5485 6.644 11.5679 7.656C12.8089 8.8 12.8975 9.284 13.5623 9.284H15.6011C15.8227 9.284 16 9.196 16 8.844C16 8.404 15.3795 7.568 14.4931 6.6C14.1385 6.116 13.518 5.544 13.2964 5.324C12.9861 5.016 13.0748 4.84 13.2964 4.576Z"
                          fill="white"/>
                </svg>
            </a>
        </div>
        <div class="insta-wrapper">
            <a href="#">
                <svg class="insta-icon" width="22px" height="22px" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" width="24" height="26" rx="6" fill=""></rect>
                    <path d="M19.0432 26.8584H6.53027C2.9296 26.8584 0 23.7807 0 19.9991V6.85749C0 3.07593 2.9296 0 6.53027 0H19.0432C22.6439 0 25.5735 3.07593 25.5735 6.85749V19.9991C25.5735 23.7807 22.6439 26.8584 19.0432 26.8584ZM6.53027 1.53407C3.73487 1.53407 1.46151 3.92165 1.46151 6.85663V19.9983C1.46151 22.9341 3.7357 25.3217 6.53027 25.3217H19.0432C21.8386 25.3217 24.1112 22.9332 24.1112 19.9983V6.85749C24.1112 3.92165 21.8378 1.53494 19.0432 1.53494H6.53027V1.53407Z"
                          fill="white"></path>
                    <path d="M24.8427 10.0779H15.8357C15.4322 10.0779 15.1045 9.73368 15.1045 9.30995C15.1045 8.88622 15.4314 8.54205 15.8357 8.54205H24.8418C25.2453 8.54205 25.573 8.88536 25.573 9.30995C25.5738 9.73368 25.2461 10.0779 24.8427 10.0779Z"
                          fill="white"></path>
                    <path d="M9.54928 10.0785H0.730831C0.327372 10.0785 0.000488281 9.73434 0.000488281 9.31148C0.000488281 8.88775 0.327372 8.54358 0.730831 8.54358H9.54928C9.95274 8.54358 10.2804 8.88689 10.2804 9.31148C10.2796 9.73434 9.95274 10.0785 9.54928 10.0785Z"
                          fill="white"></path>
                    <path d="M12.7864 19.4133C9.64435 19.4133 7.08691 16.7291 7.08691 13.4284C7.08691 10.1276 9.64352 7.44257 12.7864 7.44257C15.9284 7.44257 18.485 10.1268 18.485 13.4284C18.485 16.7291 15.9292 19.4133 12.7864 19.4133ZM12.7864 8.9775C10.4496 8.9775 8.5476 10.9751 8.5476 13.4292C8.5476 15.8834 10.4496 17.8793 12.7864 17.8793C15.1231 17.8793 17.0235 15.8834 17.0235 13.4292C17.0235 10.9751 15.1231 8.9775 12.7864 8.9775Z"
                          fill="white"></path>
                    <defs>
                        <linearGradient id="paint0_linear" x1="-2" y1="26" x2="25" y2="26" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#833AB4"></stop>
                            <stop offset="0.480663" stop-color="#FD1D1D"></stop>
                            <stop offset="1" stop-color="#FCB045"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
        </div>
    </div>
    <div class="footer-logo">
        ©2018 by <a href="#">CLIGO</a>
    </div>
</footer>
<div class="bg_modal_window"></div>
<div class="popup-wrapper">
    <form class="popup-body">
        <div class="popup-title">
            Укажите имя и телефон
        </div>
        <div class="popup-name-wrapper">
            <label for="name" class="popup-label">Ваше Имя<span>*</span></label>
            <input type="text" name="name" id="name" placeholder="Введите имя" class="popup_input" required="required"/>
        </div>
        <div class="popup-tel-wrapper">
            <label for="phone" class="popup-label">Телефон для связи<span>*</span></label>
            <input type="tel" name="phone" id="phone" placeholder="Введите номер" class="popup_input" required="required"/>
        </div>
        <div class="popup-date-wrapper">
            <label class="popup-label" for="meeting">Выберите дату</label>
            <input class="popup-date" id="meeting" type="date" placeholder="Выберите дату"/>
        </div>
        <div class="popup-button-wrapper">
            <button type="submit" class="popup-button">Отправить</button>
        </div>
        <span class="form_field"><span>*</span> — Обязательные поля</span>
    </form>
    <div class="modal_close">
        <span class="left_close"></span>
        <span class="right_close"></span>
    </div>
</div>

<script src="js/common.js"></script>
</body>
</html>
