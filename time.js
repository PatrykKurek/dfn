var a1 = new Date(); // Current date now.
var b1 = new Date(2019, 4, 2, 19, 0, 0, 0);
var a = a1.getTime();
var b = b1.getTime();
var c = (b-a); // Difference in milliseconds.
var d = Math.floor(c/(1000*60*60*24))
var g = Math.floor((c/(1000*60*60))%24)
var m = Math.floor((c/(1000*60))%60)
var s = Math.floor((c/1000)%60)




document.getElementById('sekundy').src = 'obrazy/czas/' + s + '.png';
document.getElementById('minuty').src = 'obrazy/czas/' + m + '.png';
document.getElementById('godziny').src = 'obrazy/czas/' + g + '.png';
document.getElementById('dni').src = 'obrazy/czas/' + d + '.png';


window.setInterval(function (){
  
    document.getElementById('sekundy').src = 'obrazy/czas/' + s + '.png';
    document.getElementById('minuty').src = 'obrazy/czas/' + m + '.png';
    document.getElementById('godziny').src = 'obrazy/czas/' + g + '.png';
    document.getElementById('dni').src = 'obrazy/czas/' + d + '.png';
    s = s - 1;
   
    if (s == -1) {
        s = 59;
        m = m - 1;
    }

    if (m == -1) {
        g = g - 1;
        m = 59;        
    }
    if (g == -1) {
        g = 59;
        d = d - 1;        
    }
    if (d == 60) {
        d = 0;       
    }
  
   
}, 1000); 
   
    
     
