<header class="wrapper">
        <div class="for_mobile hide">
            <a class="logo" href="/">
                <img src="{{ config('global.path') }}/img/logo.avif" alt="Лого">
            </a>

            <div class="burger">
                <div class="top"></div>
                <div class="middle"></div>
                <div class="bottom"></div>
            </div>
        </div>
        <div class="flex">
            <a class="logo" href="/">
                <img src="{{ config('global.path') }}/img/logo.avif" alt="Лого">
            </a>
            <div class="right_box">
                <div class="cont_item">
                    <img src="{{ config('global.path') }}/img/time.svg" alt="Время">
                    <div class="cont_text">
                        Пн-Пт с 9:00 до 17:00
                    </div>
                </div>

                <div class="delim"></div>

                <div class="cont_item">
                    <img src="{{ config('global.path') }}/img/phone.svg" alt="Телефон">
                    <a class="cont_text phone" href="tel:+73832304388">
                        8 (383) 230-43-88
                    </a>
                </div>

                <a data-fancybox="" data-src="#call_popup" class="call_order" href="javascript:;">Заказать звонок</a>
            </div>
            <ul class="menu">
                <x-menu />
            </ul>

            @if($user != null)
            <form class="cab_box" id="go_out_cab_form">
                <div class="icon_text">
                    <!-- <svg class="mark-class" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="6" r="5.2" stroke="#3D3D3D" stroke-width="1.6"></circle>
                        <path d="M1 19.4999C7 14 15 14 21 19.4999" stroke="#3D3D3D" stroke-width="1.6" stroke-linecap="round"></path>
                    </svg> -->

                    <svg class="icon_perse" width="30" height="30" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 13C24 15.9174 22.8411 18.7153 20.7782 20.7782C18.7153 22.8411 15.9174 24 13 24C10.0826 24 7.28473 22.8411 5.22183 20.7782C3.15893 18.7153 2 15.9174 2 13C2 10.0826 3.15893 7.28473 5.22183 5.22183C7.28473 3.15893 10.0826 2 13 2C15.9174 2 18.7153 3.15893 20.7782 5.22183C22.8411 7.28473 24 10.0826 24 13ZM15.75 8.875C15.75 9.60435 15.4603 10.3038 14.9445 10.8195C14.4288 11.3353 13.7293 11.625 13 11.625C12.2707 11.625 11.5712 11.3353 11.0555 10.8195C10.5397 10.3038 10.25 9.60435 10.25 8.875C10.25 8.14565 10.5397 7.44618 11.0555 6.93046C11.5712 6.41473 12.2707 6.125 13 6.125C13.7293 6.125 14.4288 6.41473 14.9445 6.93046C15.4603 7.44618 15.75 8.14565 15.75 8.875ZM13 14.375C11.6836 14.3747 10.3948 14.7524 9.2867 15.4632C8.17864 16.1739 7.29793 17.1879 6.74925 18.3845C7.52293 19.2846 8.48212 20.0067 9.56105 20.5013C10.64 20.9959 11.8131 21.2513 13 21.25C14.1869 21.2513 15.36 20.9959 16.439 20.5013C17.5179 20.0067 18.4771 19.2846 19.2507 18.3845C18.7021 17.1879 17.8214 16.1739 16.7133 15.4632C15.6052 14.7524 14.3164 14.3747 13 14.375Z" fill="#121419"></path>
                    </svg>
                    <div class="cont_text">{{ $user->phone }}</div>
                </div>

                <a id="go_out_cab_butt" class="call_order" href="">Выйти</a>
            </form>
            @endif

        </div>
</header>