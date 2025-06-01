@props(['id', 'color', 'sender', 'tags', 'title', 'story'])

<section class="story px-2 flex flex-row items-center justify-center">
    <div id="card-out" class="card-out flex flex-col items-center" style="background-color: {{ $color }};">
        <div class="card-top flex flex-row items-center justify-between self-stretch">
            <div class="card-user flex flex-row items-center">
                <svg class="w-[1.8rem] h-[1.8rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                    <path d="M18 3C19.9698 2.99999 21.9204 3.38797 23.7402 4.14179C25.5601 4.8956 27.2137 6.00049 28.6066 7.39337C29.9995 8.78624 31.1044 10.4398 31.8582 12.2597C32.612 14.0796 33 16.0301 33 18C33 26.2843 26.2843 33 18 33C9.71576 33 3 26.2843 3 18C3 9.71576 9.71576 3 18 3ZM19.5 19.5H16.5C12.7864 19.5 9.59827 21.7491 8.22317 24.9597C10.3989 28.0106 13.9671 30 18 30C22.0328 30 25.601 28.0106 27.7769 24.9594C26.4018 21.7491 23.2136 19.5 19.5 19.5ZM18 7.5C15.5147 7.5 13.5 9.51474 13.5 12C13.5 14.4853 15.5147 16.5 18 16.5C20.4852 16.5 22.5 14.4853 22.5 12C22.5 9.51474 20.4853 7.5 18 7.5Z"/>
                </svg>
                <h2 id="sender-name" class="lato m-0 text-[10pt] grow">{{ $sender }}</h2>
            </div>
            <div class="flex items-center">
                <p class="lato m-0 text-[10pt] text-right">{{ $tags }}</p>
            </div>
        </div>
        <div class="card-in flex flex-col items-center">
            <div class="w-full flex flex-col gap-[0.4rem]">
                <h3 class="mynerve w-full m-0 text-[16pt]">{{ $title }}</h3>
                <p class="lato fade-text w-full m-0 text-[10pt] text-justify">{{ $story }}</p>
            </div>
            <div class="card-buttons w-full flex items-center">
                @if (Route::has('signin'))
                    @auth
                        <button>
                            <svg id="like-button-{{ $id }}" onclick="like({{ $id }})" xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 26">
                                <path class="stroke-[0.1em]" d="M20.42 4.58a5.4 5.4 0 00-7.65 0l-.77.78-.77-.78a5.4 5.4 0 00-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z" />
                            </svg>
                        </button>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 26">
                            <path class="stroke-[0.1em]" d="M20.42 4.58a5.4 5.4 0 00-7.65 0l-.77.78-.77-.78a5.4 5.4 0 00-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z" />
                        </svg>
                    @endauth
                @endif
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 40 40">
                    <path class="stroke-[0.15em]" d="M13.5495 29.5754C13.5495 28.9126 13.0123 28.3754 12.3495 28.3754H12.1825C10.5817 28.3754 9.05502 27.7624 7.93623 26.6847C6.81896 25.6084 6.2 24.1585 6.2 22.6566V11.9187C6.2 10.4168 6.81896 8.96693 7.93623 7.8907C9.05502 6.813 10.5817 6.2 12.1825 6.2H29.8175C31.4183 6.2 32.945 6.813 34.0638 7.8907C35.181 8.96693 35.8 10.4168 35.8 11.9187V22.6566C35.8 24.1585 35.181 25.6084 34.0638 26.6847C32.945 27.7624 31.4183 28.3754 29.8175 28.3754H21.9723C21.679 28.3754 21.3958 28.4828 21.1763 28.6774L13.5495 35.4389V29.5754ZM13.5495 36.1355V36.1343V36.1355Z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 42 42">
                    <path class="stroke-[0.16em]" d="M32.1417 5.36938C32.2805 4.94056 32.1672 4.47017 31.8485 4.15147C31.5298 3.83278 31.0594 3.71953 30.6306 3.85827L4.63062 12.27C4.16048 12.4221 3.83165 12.8469 3.80214 13.3401C3.77263 13.8333 4.04849 14.2942 4.49713 14.5013L14.4383 19.0896C14.8297 19.2702 15.2879 19.227 15.6387 18.9765L20.4857 15.5143L17.0235 20.3613C16.773 20.7121 16.7298 21.1703 16.9104 21.5617L21.4987 31.5029C21.7058 31.9515 22.1667 32.2274 22.6599 32.1979C23.1531 32.1684 23.5779 31.8395 23.73 31.3694L32.1417 5.36938Z"/>
                </svg>
            </div>
        </div>
    </div>
    <script src="js/like.js"></script>
</section>