<section 
id="home"
class="min-h-screen flex items-center justify-center px-6"
data-aos="fade-up"
id="about">


<div 
class="
text-center
animate-[fadeIn_1s_ease-in-out]
">


<p class="text-cyan-400 text-lg mb-4">

> Hello, I'm 

</p>


<h1 class="text-5xl md:text-7xl font-bold">

Azura Fatih 
<br>

<span class="text-cyan-400">
Al Ansyori
</span>

</h1>


<div class="mt-6 text-xl text-gray-400">

<span id="typing"></span>

<span class="text-cyan-400 animate-pulse">
|
</span>

</div>


<p class="mt-5 text-gray-500 max-w-xl mx-auto">

"Building modern websites
with clean and efficient code."

</p>


<div class="mt-8 flex justify-center gap-5">


<a href="#project"

class="px-6 py-3 rounded-xl
bg-cyan-500 text-black
font-semibold hover:bg-cyan-400">

View Project

</a>


<a href="#contact"

class="px-6 py-3 rounded-xl
border border-cyan-500
hover:bg-cyan-500
hover:text-black">

Contact

</a>




</div>

</div>

<script>

const text = [
    "Laravel Developer",
    "Backend Enthusiast",
    "PPLG Student",
    "Web Developer"
];


let index = 0;
let charIndex = 0;
let isDeleting = false;


function typingEffect(){

    const element = document.getElementById("typing");

    const currentText = text[index];


    if(!isDeleting){

        element.textContent = currentText.substring(
            0,
            charIndex++
        );


        if(charIndex > currentText.length){

            isDeleting = true;

            setTimeout(typingEffect,1000);

            return;
        }


    }else{


        element.textContent = currentText.substring(
            0,
            charIndex--
        );


        if(charIndex < 0){

            isDeleting = false;

            index++;

            if(index >= text.length){
                index = 0;
            }

        }

    }


    const speed = isDeleting ? 50 : 100;

    setTimeout(
        typingEffect,
        speed
    );

}


typingEffect();


</script>


</section>
