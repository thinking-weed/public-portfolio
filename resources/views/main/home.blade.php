<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="PHP,Javascript,Laravel">

        <title>Portfolio by thinking-weed</title>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Googleフォントから --}}
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

        {{-- BootstrapのCSS bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        {{-- もろもろStyles --}}
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.tools-center{align-tools:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:tools-center{align-tools:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        {{-- 外部CSSファイルのリンク --}}
        <link href="{{ asset('/css/home.css') }}" rel="stylesheet">

        {{-- レスポンシブナビゲーション --}}
        <style>
            @media (min-width: 1219px) {  {{-- 1220px 以上の幅の場合 --}}
                .conditional-include1 {
                    display: block;  {{-- 表示させる --}}
                }
                .conditional-include2 {
                    display: none;  {{-- 非表示にする --}}
                }
            }
            @media (max-width: 1219px) {  {{-- 1219px 以下の幅の場合 --}}
                .conditional-include1 {
                    display: none;  {{-- 非表示にする --}}
                }
                .conditional-include2 {
                    display: block;  {{-- 表示される --}}
                }
            }
        </style>
        {{-- scripts --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}

        {{-- <script src="{{ asset('/js/home.js') }}"></script> --}}
        <script src="{{ asset('/js/appblade.js') }}"></script>
        <script src="{{ asset('/js/home.js') }}"></script>
        <script src="{{ asset('/js/WindowModal_nav.js') }}"></script>
        <script src="{{ asset('/js/modal_adminPage.js') }}"></script>
        <script src="{{ asset('/js/modal_homePage.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    </head>
    <body class="font-sans antialiased">
        <div class="outerwrap">
            <div class="conditional-include1 " >
            @include('layouts.navigations.navigation_home')
            </div>
            <div class="conditional-include2 ">
            @include('layouts.navigations.responsive_nav')
            </div>
            <p class="first_message">
                本HPをご覧いただきありがとうございます。※連絡先はメニューのContactのところに記載しております。改善点等ありましたら、レビューをpostしていただけるとありがたいです。
            </p>
            <div class="main innerwrap" style="margin-top: 3rem;">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-13">

                        <div class="biography scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                                        from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                                        motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="article">
                                <div class="topic flex rounded-full">
                                    <img src="{{ asset('/images/home-images/biography_icon.png') }}" alt="プロフィールアイコン">
                                    <h2 class="mt-6 text-xl font-semibold text-black-900">
                                        My Biography（略歴）
                                    </h2>
                                </div>

                                <div class="accordion biography" id="accordion_biography">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_biography" aria-expanded="false" aria-controls="collapseOne_biography">
                                                Browse the overview In English
                                            </button>
                                        </h2>
                                        <div id="collapseOne_biography" class="accordion-collapse collapse" data-bs-parent="#accordion_biography">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 leading-relaxed" style="opacity: 1;">
                                                    {{ '　I taught mathematics and other subjects at a school in Mie for 8 years until March 2023.
                                                    This spring I started studying programming and design with the help of TECH I.S. and the PC and Multimedia School.
                                                    In college, I mainly studied differential equations, Fourier series, and fluid mechanics.
                                                    In the future, I would like to develop web applications that can reduce the burden on busy teachers in Japan and that can be used easily without having to get an account.' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_biography" aria-expanded="false" aria-controls="collapseTwo_biography">
                                            日本語での概要
                                            </button>
                                        </h2>
                                        <div id="collapseTwo_biography" class="accordion-collapse collapse" data-bs-parent="#accordion_biography">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    　2023年3月まで8年間、三重の学校で数学などを教えていました 。
                                                    この春から、TECH I.S.とパソコン・マルチメディアスクールの助けを借りて、プログラミングとデザインの勉強を始めました。
                                                    大学では主に微分方程式やフーリエ級数、流体力学などを学びました。
                                                    将来は、忙しい日本の先生方の負担を軽減できるような、
                                                    かつ、アカウントを取らなくても気軽に使えるようなWebアプリケーションを開発したいと考えています。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('contact.view') }}" class="ToContact" id="Contact">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                                <p>to<br>Contact</p>
                            </a>
                        </div>

                        <div class="myskills scale-100 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                            from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                            motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="skillList topic flex rounded-full">
                                    <img src="{{ asset('/images/skill_icon.png') }}" alt="スキルアイコン">
                                    <h2 class="mt-6 text-xl font-semibold text-black-900 ">
                                        {{ '　Programming Language & Flamework, Tools'}}<br>{{ '　,which has learned or used' }}
                                    </h2>
                                </div>

                                <div class="accordion myskills" id="accordion_myskills">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_myskills" aria-expanded="false" aria-controls="collapseOne_myskills">
                                                〇TECH I.S. Curriculum
                                            </button>
                                        </h2>
                                        <div id="collapseOne_myskills" class="accordion-collapse collapse" data-bs-parent="#accordion_myskills">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    <div class="learncontents">
                                                        {{ 'HTML / CSS / Javascript  / PHP / MySQL  / Laravel / Github / Slack /Bootstrap' }}
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_myskills" aria-expanded="false" aria-controls="collapseTwo_myskills">
                                                〇WAS personal-computer multi-media school Curriculum
                                            </button>
                                        </h2>
                                        <div id="collapseTwo_myskills" class="accordion-collapse collapse" data-bs-parent="#accordion_myskills">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    <div class="learncontents">
                                                        {{'Photoshop / Illustrator / teams / basic knowledge about DX・UX marketing and design'}}
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree_myskills" aria-expanded="false" aria-controls="collapseThree_myskills">
                                                〇What I am considering studying more in the future
                                            </button>
                                        </h2>
                                        <div id="collapseThree_myskills" class="accordion-collapse collapse" data-bs-parent="#accordion_myskills">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    <div class="learncontents">
                                                        <span>{{'Laravel / Python3 / Django / Flutter / Vue.js / Typescript / GeoGebra script / Javascript / React / Tailwind CSS'}}</span>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="WorksAtWas scale-100 bg-white dark:bg-gray-800/50
                            dark:bg-gradient-to-blfrom-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                            motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="article">
                                <div class="was topic flex rounded-full">
                                    <img src="{{ asset('/images/was-works/was_icon.png') }}" alt="WASのロゴ">
                                    <h2 class="font-semibold text-black-900">
                                        {{ '　Works At WAS PC multi-media school' }}
                                    </h2>
                                </div>

                                <div class="accordion WorksAtWas" id="accordion_WorksAtWas">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_WorksAtWas" aria-expanded="false" aria-controls="collapseOne_WorksAtWas">
                                                Browse the overview In English
                                            </button>
                                        </h2>
                                        <div id="collapseOne_WorksAtWas" class="accordion-collapse collapse" data-bs-parent="#accordion_WorksAtWas">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    {{ "　I've been learning Photoshop, Illustrator, and basic knowledge about DX・UX marketing and design At WAS for the past three months.
                                                        Finally, by using Photoshop and Illustrator, I trained to make materials for Web pages." }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_WorksAtWas" aria-expanded="false" aria-controls="collapseTwo_WorksAtWas">
                                            日本語での概要
                                            </button>
                                        </h2>
                                        <div id="collapseTwo_WorksAtWas" class="accordion-collapse collapse" data-bs-parent="#accordion_WorksAtWas">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    　この3ヶ月間、PhotoshopとIllustrator、そしてDX・UXマーケティングとデザインの基礎知識をWASで学びました。
                                                    最終的には、PhotoshopとIllustratorを使い、Webページの素材を作れるように訓練しました。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('WasWorks.view') }}" id="WorksAtWas" class="ToWorks">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                                <p>To works</p>
                            </a>
                        </div>

                        <div id="techis_team_development" class="techis_team_development scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl
                        from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg
                        shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                        motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="article">
                                <div class="techis_team_development_image topic flex rounded-full">
                                    <img src="{{ asset('/images/SCDmap-images/techlogo.png') }}" alt="TECH I.S.のロゴ">
                                    <img src="{{ asset('/images/team171-images/team-development.png') }}" alt="チーム開発のロゴ">
                                    <h2 class="font-semibold text-black-900" style="font-size:1.4rem;">
                                        {{ '　Team-Development at TECH I.S>'}}<br>　（TECH I.S.のカリキュラムの一環としてリンク先の商品管理システムを作成）
                                    </h2>
                                </div>

                                <div class="accordion techis_team_development" id="accordion_techis_team_development">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_techis_team_development" aria-expanded="false" aria-controls="collapseOne_techis_team_development">
                                                Browse the overview In English
                                            </button>
                                        </h2>
                                        <div id="collapseOne_techis_team_development" class="accordion-collapse collapse" data-bs-parent="#accordion_techis_team_development">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-black-400 leading-relaxed">
                                                    {{ "　As part of the TECH I.S. curriculum, a team of four students including myself and one instructor created a production management system.
                                                    I was mainly responsible for product registration, product search, navigation, layout design, user authentication,
                                                    individual product display, account editing, product content editing, error pattern display, logout functions,
                                                    and system deployment." }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_techis_team_development" aria-expanded="false" aria-controls="collapseTwo_Qiita_article">
                                            日本語での概要
                                            </button>
                                        </h2>
                                        <div id="collapseTwo_techis_team_development" class="accordion-collapse collapse" data-bs-parent="#accordion_techis_team_development">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    　TECH I.S.のカリキュラムの一環として、受講生４人、講師１人のチームでリンク先の商品管理システムを作成しました。商品登録機能、商品検索機能、
                                                    ナビゲーション、レイアウトデザイン、ユーザー認証機能、商品個別表示機能、アカウント編集機能、商品内容編集機能、エラーパターンの表示機能、ログアウト機能、
                                                    デプロイなどを私は主に担当しました。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="ToWorks" href="https://team171-system-9ae6c37d5beb.herokuapp.com/" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                                <p>To works</p>
                            </a>
                        </div>

                        <div id="Qiita_article" class="Qiita_article scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl
                            from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg
                            shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                            motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="article">
                                <div class="Qiita_article_image topic flex rounded-full">
                                    <img src="{{ asset('/images/qiita_icon.png') }}" alt="Qiitaのロゴ">
                                    <h2 class="font-semibold text-black-900" style="font-size:1.4rem;">
                                        My Qiita Artcles（プログラミング学習備忘録・数学に関することあれこれ）
                                    </h2>
                                </div>

                                <div class="accordion Qiita_article" id="accordion_Qiita_article">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_Qiita_article" aria-expanded="false" aria-controls="collapseOne_Qiita_article">
                                                About Programming
                                            </button>
                                        </h2>
                                        <div id="collapseOne_Qiita_article" class="accordion-collapse collapse" data-bs-parent="#accordion_Qiita_article">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-black-400 leading-relaxed">
                                                    主に、LaravelやPythonを学習する中で特に自分が困ったり、悩んだりした部分を中心に備忘録としても使えるように
                                                    書きました。
                                                </p>
                                                <br>
                                                <ul>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/private/a468b3deccea13710359">
                                                            １. Pyhtonのスクレイピングに関するライブラリ（beautifulsoup4）について
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/40510d7bc6db12ee50db">
                                                            ２. Pyhtonで～.pyファイルを起動する方法が複数あり、できればコンソール（コマンドプロンプト）による方法をオススメする話
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/ba01c2c46e072a7ebb83">
                                                            ３. Laravel等のフレームワークにCSSを当てるには「引き算」が時々必要になると感じた話
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_Qiita_article" aria-expanded="false" aria-controls="collapseTwo_Qiita_article">
                                            About （statistical）Mathmatics
                                            </button>
                                        </h2>
                                        <div id="collapseTwo_Qiita_article" class="accordion-collapse collapse" data-bs-parent="#accordion_Qiita_article">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    僭越ながら、主に統計検定の学習を進める中で学習した数学のおススメの勉強法や自分の途中計算の過程を記事にしてみました。
                                                    ※「もし、ここが間違ってるよ」というところがありましたら、お気軽にご連絡ください
                                                </p>
                                                <br>
                                                <ul>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/38a6438ddb1520ed3387">
                                                            １. 確率統計学・統計検定学習備忘録　①条件付き確率　のイメージをつかむ問題
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/1d6c6db04c00b28f724a">
                                                            ２. 確率統計学・統計検定学習備忘録　②統計検定1級2022数理統計　大問2別解・別解説
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/fe820b00b2f3b74f4580">
                                                            ３. で、数学的帰納法って結局何に使うん？（´｡｀)　⇒　例えば、ヴァンデルモンドのたたみ込みの証明とか　⇒「非」復元抽出の公式の導出
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/36a3eadf0035557a1714">
                                                            ４. 確率統計学・統計検定学習備忘録　③標本平均・標本分散（※復元抽出）、数Ⅰと数Bの統計の違い①
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/f8632f54bb33a3c49aaf">
                                                            ５. 確率統計学・統計検定学習備忘録　④標本平均と平均（値）に関する公式の意味の違い
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/8099d221865afd6db3c6">
                                                            ６. ⑤統計検定1級2022数理統計　大問3（１）（２）別解・別解説　ポアソン分布・ガウス分布に関する計算
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="qiita_link" href="https://qiita.com/thinking-weed/items/8f0d04e622912c58e05d">
                                                            ７. 統計検定学習備忘録　非復元抽出の標本平均に関する公式等
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="NoTenki scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl
                        from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg
                        shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                        motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="article">
                                <div class="NoTenki_image topic flex rounded-full">
                                    <img src="{{ asset('/images/NoTenki-images/No-Tenki.png') }}" alt="NoTenkiのロゴ">
                                    <h2 class="font-semibold text-black-900">
                                        {{ 'NoTenki　'}}
                                    </h2>
                                    <h3 class="font-semibold text-black-900" style="margin: auto 1rem;padding:auto 1rem;">
                                        {{'　～感想用紙やアンケート等の転記・データ集計はもうAIにさせよう～'}}
                                    </h3>
                                </div>

                                <div class="accordion NoTenki" id="accordion_NoTenki">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_NoTenki" aria-expanded="false" aria-controls="collapseOne_NoTenki">
                                                日本語での概要（※設計中）
                                            </button>
                                        </h2>
                                        <div id="collapseOne_NoTenki" class="accordion-collapse collapse" data-bs-parent="#accordion_NoTenki">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                    　この「NoTenki」は「Python」で構築できる「OCR（Optical Character {{ 'Recognition（/ Reader）' }}、（光学的文字認識≒文字を含む画像の文字部分だけを読み取ってword文章化する技術）」とAIを使って、
                                                    生徒の感想用紙やアンケートなどをpdf化したものを、要約・整理し、Wordや ExcelにまとめてくれるWebアプリです。
                                                    最終的には、学校タブレットのカメラ機能との連携も考えています。<br>
                                                    　※１年あたり１５万程度で導入できる既存の自動採点システムの汎用的なものを想定しています。
                                                    <br>
                                                    <hr class="BorderLine w-full">
                                                    <br>
                                                    　８年間の教員としての学校勤務経験から、日本の教員の長時間労働の原因の一つは、ICT化を進めれば削減できるものの、
                                                    <br>
                                                    <br>　①セキリティの観点から業務のICT化をするのに必要なソフトやプログラムを学校パソコンではダウンロード・インストールが難しい
                                                    <br>　②そもそも物を渡されたからといって、当然他の業界同様、全ての教員がICTに強いわけではない
                                                    <br>　③学校では、アカウント１つをとるのにも非常に時間がかかる
                                                    <br><br>ことが主な原因として挙げられると考えています。そのため、セキリティ性の強いLaravelと連携させ、Vue.jsなどによりユーザービリティの高い、
                                                    アカウントを取らなくても使える設計を計画しています。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_NoTenki" aria-expanded="false" aria-controls="collapseTwo_NoTenki">
                                                Browse the overview In English（Now Desiging）
                                            </button>
                                        </h2>
                                        <div id="collapseTwo_NoTenki" class="accordion-collapse collapse" data-bs-parent="#accordion_NoTenki">
                                            <div class="accordion-body">
                                                <p class="mt-4 text-black-500 dark:text-black-400 leading-relaxed">
                                                    {{ '"NoTenki" is a web application that uses OCR (Optical Character Recognition/Reader,
                                                    a technology that reads only the text portion of an image containing text and converts it into word text) and AI,
                                                    which can be built into "Python", to summarize and organize student impression forms,
                                                    questionnaires, etc., converted into pdf files, and compile them into Word and Excel.
                                                    The application is a web application that summarizes and organizes student feedback forms, questionnaires, etc.
                                                    , converts them into PDF files, and compiles them into Word and Excel files using AI.
                                                    I am also thinking of eventually integrating with the camera function of school tablets.'}}
                                                <br>
                                                    {{'　I envision a generic version of an existing automated grading system that can be implemented for about 150,000yen per year.' }}
                                                <br>
                                                    <hr class="BorderLine w-full">
                                                <br>
                                                    {{ 'Based on my 8 years of experience working as a teacher,
                                                    one of the causes of long working hours for teachers in Japan,
                                                    although it can be reduced if ICT is promoted,'}}
                                                <br>
                                                    <ol>
                                                        <li>{{ '① It is difficult to download and install the necessary software and programs for ICT in terms of security on school computers,' }}</li>
                                                        <li>{{ '② Not all teachers are ICT experts just because they are given things to begin with, as in other industries,' }}</li>
                                                        <li>{{ '③ It takes a lot of time to get an account at a school.' }}</li>
                                                    </ol>
                                                <br>{{ 'Therefore, I am planning to link with Laravel, which is highly secure, and to design a highly usable system with Vue.js, etc., so that users can use the system even without an account.' }}
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a a href="#" onclick="event.preventDefault(); showAlert()" id="NoTenki" class="ToWorks">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                                <p>To works</p>
                            </a>
                        </div>

                        <div class="DesignDocuments scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl
                                from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg
                                shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                                motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div class="article">
                                    <div class="DesignDocuments_image topic flex rounded-full">
                                        <img src="{{ asset('/images/design-documents-images/design-documents.png') }}" alt="このポートフォリオの仕様書のロゴ">
                                        <h2 class="font-semibold text-black-900">
                                            {{ '　Design_Documents for this portfolio（仕様書）'}}
                                        </h2>
                                    </div>

                                    <div class="accordion DesignDocuments" id="accordion_DesignDocuments">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_DesignDocuments" aria-expanded="false" aria-controls="collapseOne_DesignDocuments">
                                                    Browse the overview In English
                                                </button>
                                            </h2>
                                            <div id="collapseOne_DesignDocuments" class="accordion-collapse collapse" data-bs-parent="#accordion_DesignDocuments">
                                                <div class="accordion-body">
                                                    <a href="#" onclick="event.preventDefault(); Modalshow6()">
                                                        <p class="mt-4 text-black-500 dark:text-black-400 leading-relaxed">
                                                            {{'Please contact me first so I can provide you with the password through email.'}}
                                                            <br>{{ 'パスワードを入力' }}
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_DesignDocuments" aria-expanded="false" aria-controls="collapseTwo_DesignDocuments">
                                                日本語の場合
                                            </button>
                                        </h2>
                                        <div id="collapseTwo_DesignDocuments" class="accordion-collapse collapse" data-bs-parent="#accordion_DesignDocuments">
                                            <div class="accordion-body">
                                                <a href="#" onclick="event.preventDefault(); Modalshow6()">
                                                    <p class="mt-4 text-black-500 dark:text-white-400 leading-relaxed">
                                                        メールを通して、パスワードをお渡ししますので、まずはご連絡ください。
                                                        <br>{{ 'パスワードを入力' }}
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 3rem">
        @include('layouts.footer')
        </div>

        {{--  パスワード入力用モーダル  --}}
        @include('modals.password-authentication-modal.password-authentication-modal6')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/home.js') }}"></script>

        {{-- Ctrl＋/（スラッシュ）でコメントアウト --}}
    </body>
</html>
