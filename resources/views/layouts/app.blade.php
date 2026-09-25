<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Azura Fatih Al Ansyori | Developer Portfolio
    </title>
    <link 
rel="icon"
type="image/png"
href="{{ asset('images/favicon.png') }}">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

</head>

<body 
class="
bg-[#050505]
text-white
relative
overflow-x-hidden
">

<div 
id="particles-js"
class="
fixed
inset-0
-z-10">
</div>

<div 
class="
fixed
inset-0
pointer-events-none
opacity-20
"
style="
background-image:
linear-gradient(#06b6d4 1px, transparent 1px),
linear-gradient(90deg,#06b6d4 1px,transparent 1px);
background-size:40px 40px;
">
</div>

    <nav class="fixed top-0 w-full z-50 bg-black/50 backdrop-blur-lg">

    <div class="max-w-6xl mx-auto px-6 py-5 flex justify-between items-center">

        <h1 class="text-xl font-bold text-cyan-400">
            AZURA.DEV
        </h1>


        <button 
            id="menu-btn"
            class="md:hidden text-cyan-400 text-2xl">
            ☰
        </button>


        <div 
        id="menu"
        class="hidden md:flex space-x-6 text-gray-300">


            <a href="#home" class="hover:text-cyan-400">
                Home
            </a>

            <a href="#about" class="hover:text-cyan-400">
                About
            </a>

            <a href="#skills" class="hover:text-cyan-400">
                Skills
            </a>

            <a href="#project" class="hover:text-cyan-400">
                Project
            </a>

            <a href="#contact" class="hover:text-cyan-400">
                Contact
            </a>


        </div>


    </div>

</nav>


    <main>

        @yield('content')

    </main>

    <script>

const btn = document.getElementById('menu-btn');

const menu = document.getElementById('menu');


btn.onclick = () => {

    menu.classList.toggle('hidden');

}

</script>

</body>
</html>