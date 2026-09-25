particlesJS("particles-js", {

particles: {

number: {
value: 60
},

color: {
value:"#22d3ee"
},

shape:{
type:"circle"
},

opacity:{
value:0.5
},

size:{
value:2
},

move:{
enable:true,
speed:1
}

},


interactivity:{

events:{

onhover:{
enable:true,
mode:"repulse"
}

}

}

});

import AOS from 'aos';
import 'aos/dist/aos.css';


AOS.init({

duration:1000,
once:true

});