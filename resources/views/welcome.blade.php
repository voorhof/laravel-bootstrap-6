<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Styles / Scripts --}}
    @fonts

    @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif

    <style>
        section {
            margin-bottom: 2rem;
            padding-top: 1.5rem;
            border-top: 1px dashed #ddd;
        }
    </style>
</head>
<body>
<header class="container">
    <h1>{{ config('app.name') }}</h1>
    <hr>
</header>

<main class="container">
    <h2>Brandbook try-outs</h2>
    <p>
        <a href="https://github.com/voorhof/laravel-bootstrap-6" target="_blank">github.com/voorhof/laravel-bootstrap-6</a>
    </p>

    <section id="typos">
        <h3>Typo</h3>
        <h4>Heading</h4>
        <p>Lorem ipsum dolor sit amet. Et dolore repellat ut ducimus recusandae rem labore voluptates in asperiores alias in accusantium nostrum cum minima rerum qui atque voluptatem. Sed enim quasi eum autem earum qui velit quibusdam? Et numquam minima et quia delectus et nulla tempore. Sed quaerat quia et autem natus et molestiae repudiandae est quod ipsa aut soluta labore in ullam dolorem!</p>
    </section>

    <section id="buttons">
        <h3>Button</h3>
        <button type="button"
                class="btn theme-primary btn-solid btn-styled">Button</button>
    </section>

    <section id="accordions">
        <h3>Accordion</h3>
        <div class="accordion accordion-gap theme-primary">
            <details class="accordion-item" name="accordionExample">
                <summary class="accordion-header">
                    Accordion Item #1
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
                </summary>
                <div class="accordion-body">
                    <strong>This is the first item’s accordion body.</strong> It is shown by default because the <code>open</code> attribute is present. The native <code>&lt;details&gt;</code> element handles all the show/hide logic without any JavaScript. You can put any HTML content within the <code>.accordion-body</code>.
                </div>
            </details>
            <details class="accordion-item" name="accordionExample">
                <summary class="accordion-header">
                    Accordion Item #2
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
                </summary>
                <div class="accordion-body">
                    <strong>This is the second item’s accordion body.</strong> The <code>name</code> attribute groups this with other accordion items. When you open this item, any other open item in the same group will close automatically.
                </div>
            </details>
            <details class="accordion-item" name="accordionExample">
                <summary class="accordion-header">
                    Accordion Item #3
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
                </summary>
                <div class="accordion-body">
                    <strong>This is the third item’s accordion body.</strong> This exclusive accordion behavior is built into the browser—no Bootstrap JavaScript required. Just use matching <code>name</code> attributes on your <code>&lt;details&gt;</code> elements.
                </div>
            </details>
        </div>
    </section>

    <section id="alerts">
        <h3>Alert</h3>
        <div class="alert theme-primary" role="alert">
            <p>A simple alert—check it out!</p>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </section>

    <section id="carousels">
        <h3>Carousel</h3>
        <div id="carouselStackedIndicators" class="carousel slide">
            <div class="carousel-inner rounded-5">
                <div class="carousel-item active">
                    <svg aria-label="Placeholder: First slide" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#ddd"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
                </div>
                <div class="carousel-item">
                    <svg aria-label="Placeholder: Second slide" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#aaa"></rect><text x="50%" y="50%" fill="#222" dy=".3em">Second slide</text></svg>
                </div>
                <div class="carousel-item">
                    <svg aria-label="Placeholder: Third slide" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#ddd" dy=".3em">Third slide</text></svg>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button class="btn-icon btn-sm" type="button" data-bs-target="#carouselStackedIndicators" data-bs-slide="prev">
                        <span class="carousel-icon-prev" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="btn-icon btn-sm" type="button" data-bs-target="#carouselStackedIndicators" data-bs-slide="next">
                        <span class="carousel-icon-next" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselStackedIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselStackedIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselStackedIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </section>

    <section id="dialogs">
        <h3>Dialog</h3>
        <div>
            <button type="button" class="btn-solid theme-primary" data-bs-toggle="dialog" data-bs-target="#exampleDialog">
                Open dialog slide-up
            </button>

            <dialog class="dialog dialog-slide-up" id="exampleDialog">
                <div class="dialog-header">
                    <h1 class="dialog-title">Dialog title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="dialog" aria-label="Close"></button>
                </div>
                <div class="dialog-body">
                    <p>This is a native dialog element. It uses the browser’s built-in modal behavior for accessibility and focus management.</p>
                </div>
                <div class="dialog-footer">
                    <button type="button" class="btn-outline theme-primary" data-bs-dismiss="dialog">Close</button>
                    <button type="button" class="btn-solid theme-primary">Save changes</button>
                </div>
            </dialog>
        </div>
    </section>

    <section id="datepickers">
        <h3>Datepicker</h3>
        <label for="datepicker1" class="form-label">Datepicker</label>
        <input type="text"
               class="form-control w-12"
               id="datepicker1"
               data-bs-toggle="datepicker"
               autocomplete="off"
               placeholder="Choose date…">
    </section>
</main>

<footer class="container">
    <hr>
    <h2>FOOTER</h2>
</footer>
</body>
</html>
