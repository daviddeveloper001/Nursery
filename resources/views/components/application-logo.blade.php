@if (request()->routeIs('login'))
    <img src="{{ asset('images/CraftersLogo.png') }}"
        alt="Crafters"
        style="
            position: fixed;
            top: 30%;
            left: 50%;
            width: 450px;
            height: 450px;
            transform: translate(-50%, -50%);
            z-index: 9999;
        ">
@endif
