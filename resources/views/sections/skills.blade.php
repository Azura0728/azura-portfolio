<section 
id="skills"
class="py-24 px-6"
data-aos="fade-up"
id="about">


<div class="max-w-6xl mx-auto">


<h2 class="text-4xl font-bold text-center mb-12">

Skills

</h2>



<div class="grid md:grid-cols-4 gap-6">


@foreach([
'Laravel',
'PHP',
'MySQL',
'HTML5',
'Tailwind CSS',
'JavaScript',
'Git',
'Docker',
] as $skill)


<div 
class="
bg-white/5
border border-white/10
rounded-xl
p-6
text-center
hover:-translate-y-3
hover:border-cyan-400
transition duration-300
">


<h3 class="text-xl font-semibold text-cyan-400">

{{ $skill }}

</h3>


</div>


@endforeach


</div>


</div>


</section>