<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">
        
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .banner-container {
                height: 550px;
                background-image: url('/acc-web/assets/background.jpg');
                background-position: center;
                background-repeat: no-repeat;
            }

            .motto {
                color: white;
                font-size: 100px;
                font-family: 'Smooch', cursive;
                text-shadow: 2px 2px grey;
            }

            .area-container {
                background-color:rgb(112, 179, 154);
                width: 250px; 
                height: 280px;
            }

            .icon-container {
                display: flex;
                justify-content: center;
                height: 50%;
                color: black;
            }
            

            .area-container:hover {
                transition-duration: 500ms;
                transform: scale(1.05);
                cursor: pointer;
            }


            .gallery-container {
                height: 500px;
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="mt-4">
            <div class="d-flex text-center flex-column">
                <a href="{{ url('/') }}"><img src={{ asset('images/banner.png') }} alt="" height="100px" class="mx-auto mb-2"></a>
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent mx-auto flex-nowrap">
                    <div class="navbar-expand" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item fs-5 nav-link px-2" href="#">Home</a>
                            <a class="nav-item fs-5 nav-link px-2" href="#documentation">Documentation</a>
                            <a class="nav-item fs-5 nav-link px-2" href="#">Campus</a>
                            <a href="{{ route('login') }}" class="fs-5 px-2 nav-link nav-item">Log in</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div style="background-image:url({{asset('images/background.jpg')}})" 
                class="banner-container color-white d-flex justify-content-center align-items-center">
                <h1 class="text-center motto">Aspire, Achieve, Serve</h1>
            </div>
        
            <div class="areas-banner text-center my-5" id="documentation" >
                <h1>Documentation Categories</h1>
                <p>This part is subdivided into 10 specific areas which <br/> are the focus of the accreditation.</p>
            </div>

           <div class="max-w-6xl mx-auto sm:px-6 lg:px-2">
                <!-- First Layer -->
            <div class="areas-container my-2 d-flex flex-wrap  mx-auto p-2 gap-5 justify-content-center" id="documentation">
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/1')}}'">
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="60" width="80"><path d="M112.1 454.3c0 6.297 1.816 12.44 5.284 17.69l17.14 25.69c5.25 7.875 17.17 14.28 26.64 14.28h61.67c9.438 0 21.36-6.401 26.61-14.28l17.08-25.68c2.938-4.438 5.348-12.37 5.348-17.7L272 415.1h-160L112.1 454.3zM191.4 .0132C89.44 .3257 16 82.97 16 175.1c0 44.38 16.44 84.84 43.56 115.8c16.53 18.84 42.34 58.23 52.22 91.45c.0313 .25 .0938 .5166 .125 .7823h160.2c.0313-.2656 .0938-.5166 .125-.7823c9.875-33.22 35.69-72.61 52.22-91.45C351.6 260.8 368 220.4 368 175.1C368 78.61 288.9-.2837 191.4 .0132zM192 96.01c-44.13 0-80 35.89-80 79.1C112 184.8 104.8 192 96 192S80 184.8 80 176c0-61.76 50.25-111.1 112-111.1c8.844 0 16 7.159 16 16S200.8 96.01 192 96.01z"/></svg>
                    </div>
                    <h1>Area I</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Mission, Vision, Goal, Objective</p>
                    </div>
                </div>
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/2')}}'">
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="60" width="80"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M623.5 164C638.1 172.6 644.6 192.1 635.1 207.5C627.4 222.1 607.9 228.6 592.5 219.1L319.1 68.61L47.54 219.1C32.09 228.6 12.61 222.1 4.025 207.5C-4.558 192.1 1.008 172.6 16.46 164L304.5 4.027C314.1-1.342 325.9-1.342 335.5 4.027L623.5 164zM279.1 200C279.1 177.9 297.9 160 319.1 160C342.1 160 359.1 177.9 359.1 200C359.1 222.1 342.1 240 319.1 240C297.9 240 279.1 222.1 279.1 200zM103.1 296C103.1 273.9 121.9 256 143.1 256C166.1 256 183.1 273.9 183.1 296C183.1 318.1 166.1 336 143.1 336C121.9 336 103.1 318.1 103.1 296V296zM535.1 296C535.1 318.1 518.1 336 495.1 336C473.9 336 455.1 318.1 455.1 296C455.1 273.9 473.9 256 495.1 256C518.1 256 535.1 273.9 535.1 296zM226.9 491.4L199.1 441.5V480C199.1 497.7 185.7 512 167.1 512H119.1C102.3 512 87.1 497.7 87.1 480V441.5L61.13 491.4C54.84 503 40.29 507.4 28.62 501.1C16.95 494.8 12.58 480.3 18.87 468.6L56.74 398.3C72.09 369.8 101.9 352 134.2 352H153.8C170.1 352 185.7 356.5 199.2 364.6L232.7 302.3C248.1 273.8 277.9 255.1 310.2 255.1H329.8C362.1 255.1 391.9 273.8 407.3 302.3L440.8 364.6C454.3 356.5 469.9 352 486.2 352H505.8C538.1 352 567.9 369.8 583.3 398.3L621.1 468.6C627.4 480.3 623 494.8 611.4 501.1C599.7 507.4 585.2 503 578.9 491.4L551.1 441.5V480C551.1 497.7 537.7 512 519.1 512H471.1C454.3 512 439.1 497.7 439.1 480V441.5L413.1 491.4C406.8 503 392.3 507.4 380.6 501.1C368.1 494.8 364.6 480.3 370.9 468.6L407.2 401.1C405.5 399.5 404 397.6 402.9 395.4L375.1 345.5V400C375.1 417.7 361.7 432 343.1 432H295.1C278.3 432 263.1 417.7 263.1 400V345.5L237.1 395.4C235.1 397.6 234.5 399.5 232.8 401.1L269.1 468.6C275.4 480.3 271 494.8 259.4 501.1C247.7 507.4 233.2 503 226.9 491.4H226.9z"/></svg>
                    </div>
                    <h1>Area II</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Faculty</p>
                    </div>
                </div>
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/3')}}'">
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" heigth="60" width="80"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 96h384v288h64V72C544 50 525.1 32 504 32H72C49.1 32 32 50 32 72V384h64V96zM560 416H416v-48c0-8.838-7.164-16-16-16h-160C231.2 352 224 359.2 224 368V416H16C7.164 416 0 423.2 0 432v32C0 472.8 7.164 480 16 480h544c8.836 0 16-7.164 16-16v-32C576 423.2 568.8 416 560 416z"/></svg>
                    </div>
                    <h1>Area III</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Curriculum and Instruction</p>
                    </div>
                </div>
            </div>
            <!-- Second Layer -->
            <div class="areas-container my-2 d-flex flex-wrap mx-auto p-2 gap-5 justify-content-center" id="documentation">
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/4')}}'" >
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 640 512">
                        <path d="M623.1 136.9l-282.7-101.2c-13.73-4.91-28.7-4.91-42.43 0L16.05 136.9C6.438 140.4 0 149.6 0 160s6.438 19.65 16.05 23.09L76.07 204.6c-11.89 15.8-20.26 34.16-24.55 53.95C40.05 263.4 32 274.8 32 288c0 9.953 4.814 18.49 11.94 24.36l-24.83 149C17.48 471.1 25 480 34.89 480H93.11c9.887 0 17.41-8.879 15.78-18.63l-24.83-149C91.19 306.5 96 297.1 96 288c0-10.29-5.174-19.03-12.72-24.89c4.252-17.76 12.88-33.82 24.94-47.03l190.6 68.23c13.73 4.91 28.7 4.91 42.43 0l282.7-101.2C633.6 179.6 640 170.4 640 160S633.6 140.4 623.1 136.9zM351.1 314.4C341.7 318.1 330.9 320 320 320c-10.92 0-21.69-1.867-32-5.555L142.8 262.5L128 405.3C128 446.6 213.1 480 320 480c105.1 0 192-33.4 192-74.67l-14.78-142.9L351.1 314.4z"/></svg>
                    </div>
                    <h1>Area IV</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Support to Students</p>
                    </div>
                </div>
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/5')}}'">
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="60" width="80"><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                    </div>
                    <h1>Area V</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Research</p>
                    </div>
                </div>
                <div class="area-container area-container rounded p-2 text-center"onclick="window.location='{{url('/area/6')}}'">
                    <div class="icon-container py-5 " >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="50" width="80" >
                        <path d="M128 95.1c26.5 0 47.1-21.5 47.1-47.1S154.5 0 128 0S80.01 21.5 80.01 47.1S101.5 95.1 128 95.1zM511.1 95.1c26.5 0 47.1-21.5 47.1-47.1S538.5 0 511.1 0c-26.5 0-48 21.5-48 47.1S485.5 95.1 511.1 95.1zM603.5 258.3l-18.5-80.13c-4.625-20-18.62-36.88-37.5-44.88c-18.5-8-38.1-6.75-56.12 3.25c-22.62 13.38-39.62 34.5-48.12 59.38l-11.25 33.88l-15.1 10.25L415.1 144c0-8.75-7.25-16-16-16H240c-8.75 0-16 7.25-16 16L224 239.1l-16.12-10.25l-11.25-33.88c-8.375-25-25.38-46-48.12-59.38c-17.25-10-37.63-11.25-56.12-3.25c-18.88 8-32.88 24.88-37.5 44.88l-18.37 80.13c-4.625 20 .7506 41.25 14.37 56.75l67.25 75.88l10.12 92.63C130 499.8 143.8 512 160 512c1.25 0 2.25-.125 3.5-.25c17.62-1.875 30.25-17.62 28.25-35.25l-10-92.75c-1.5-13-7-25.12-15.62-35l-43.37-49l17.62-70.38l6.876 20.38c4 12.5 11.87 23.5 24.5 32.63l51 32.5c4.623 2.875 12.12 4.625 17.25 5h159.1c5.125-.375 12.62-2.125 17.25-5l51-32.5c12.62-9.125 20.5-20 24.5-32.63l6.875-20.38l17.63 70.38l-43.37 49c-8.625 9.875-14.12 22-15.62 35l-10 92.75c-2 17.62 10.75 33.38 28.25 35.25C477.7 511.9 478.7 512 479.1 512c16.12 0 29.1-12.12 31.75-28.5l10.12-92.63L589.1 315C602.7 299.5 608.1 278.3 603.5 258.3zM46.26 358.1l-44 110c-6.5 16.38 1.5 35 17.88 41.63c16.75 6.5 35.12-1.75 41.62-17.88l27.62-69.13l-2-18.25L46.26 358.1zM637.7 468.1l-43.1-110l-41.13 46.38l-2 18.25l27.62 69.13C583.2 504.4 595.2 512 607.1 512c3.998 0 7.998-.75 11.87-2.25C636.2 503.1 644.2 484.5 637.7 468.1z"/></svg>
                    </div>
                    <h1>Area VI</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Extension and Community Involvement</p>
                    </div>
                </div>
                
            </div>

            <!-- Third Layer -->
            <div class="areas-container my-2 d-flex flex-wrap mx-auto p-2 gap-5 justify-content-center" id="documentation">
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/7')}}'" >
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="60" width="80"><path d="M448 336v-288C448 21.49 426.5 0 400 0H352v191.1c0 13.41-15.52 20.88-25.1 12.49L272 160L217.1 204.5C207.5 212.8 192 205.4 192 191.1V0H96C42.98 0 0 42.98 0 96v320c0 53.02 42.98 96 96 96h320c17.67 0 32-14.33 32-32c0-11.72-6.607-21.52-16-27.1v-81.36C441.8 362.8 448 350.2 448 336zM384 448H96c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32h288V448z"/></svg>
                    </div>
                    <h1>Area VII</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Library</p>
                    </div>
                </div>
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/8')}}'">
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="60" width="80"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M336 0C362.5 0 384 21.49 384 48V464C384 490.5 362.5 512 336 512H240V432C240 405.5 218.5 384 192 384C165.5 384 144 405.5 144 432V512H48C21.49 512 0 490.5 0 464V48C0 21.49 21.49 0 48 0H336zM64 272C64 280.8 71.16 288 80 288H112C120.8 288 128 280.8 128 272V240C128 231.2 120.8 224 112 224H80C71.16 224 64 231.2 64 240V272zM176 224C167.2 224 160 231.2 160 240V272C160 280.8 167.2 288 176 288H208C216.8 288 224 280.8 224 272V240C224 231.2 216.8 224 208 224H176zM256 272C256 280.8 263.2 288 272 288H304C312.8 288 320 280.8 320 272V240C320 231.2 312.8 224 304 224H272C263.2 224 256 231.2 256 240V272zM80 96C71.16 96 64 103.2 64 112V144C64 152.8 71.16 160 80 160H112C120.8 160 128 152.8 128 144V112C128 103.2 120.8 96 112 96H80zM160 144C160 152.8 167.2 160 176 160H208C216.8 160 224 152.8 224 144V112C224 103.2 216.8 96 208 96H176C167.2 96 160 103.2 160 112V144zM272 96C263.2 96 256 103.2 256 112V144C256 152.8 263.2 160 272 160H304C312.8 160 320 152.8 320 144V112C320 103.2 312.8 96 304 96H272z"/></svg>
                    </div>
                    <h1>Area VIII</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Physical Plant and Facilities</p>
                    </div>
                </div>
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/9')}}'">
                    <div class="icon-container py-5 " >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="60" width="80"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M331.8 224.1c28.29 0 54.88 10.99 74.86 30.97l19.59 19.59c40.01-17.74 71.25-53.3 81.62-96.65c5.725-23.92 5.34-47.08 .2148-68.4c-2.613-10.88-16.43-14.51-24.34-6.604l-68.9 68.9h-75.6V97.2l68.9-68.9c7.912-7.912 4.275-21.73-6.604-24.34c-21.32-5.125-44.48-5.51-68.4 .2148c-55.3 13.23-98.39 60.22-107.2 116.4C224.5 128.9 224.2 137 224.3 145l82.78 82.86C315.2 225.1 323.5 224.1 331.8 224.1zM384 278.6c-23.16-23.16-57.57-27.57-85.39-13.9L191.1 158L191.1 95.99l-127.1-95.99L0 63.1l96 127.1l62.04 .0077l106.7 106.6c-13.67 27.82-9.251 62.23 13.91 85.39l117 117.1c14.62 14.5 38.21 14.5 52.71-.0016l52.75-52.75c14.5-14.5 14.5-38.08-.0016-52.71L384 278.6zM227.9 307L168.7 247.9l-148.9 148.9c-26.37 26.37-26.37 69.08 0 95.45C32.96 505.4 50.21 512 67.5 512s34.54-6.592 47.72-19.78l119.1-119.1C225.5 352.3 222.6 329.4 227.9 307zM64 472c-13.25 0-24-10.75-24-24c0-13.26 10.75-24 24-24S88 434.7 88 448C88 461.3 77.25 472 64 472z"/></svg>
                    </div>
                    <h1>Area IX</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Laboratories</p>
                    </div>
                </div>
            </div>

            <!-- Last Layer -->
            <div class="areas-container my-2 d-flex flex-wrap w-75 mx-auto p-2 gap-5 justify-content-center" id="documentation">
                <div class="area-container area-container rounded p-2 text-center" onclick="window.location='{{url('/area/10')}}'" >
                    <div class="icon-container py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="80" height="60"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z"/></svg>
                    </div>
                    <h1>Area X</h1>
                    <div class="list p-1 rounded" style="background-color: var(--light-green);">
                        <p class="mb-0 fs-5">Administration</p>
                    </div>
                </div>
            </div>
            <div class="gallery-container my-5">
            </div>
        </div>
    </body>
</html>
