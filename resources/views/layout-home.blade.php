<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
    
    <section class="px-6 py-8">

        @include('partials/navigation')

        @yield('header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            

            @yield('featured')

            @yield('posts')

        </main>

        @include('partials/footer')
        
    </section>

</body>


