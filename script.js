var typed = new Typed(".edit", { 
    strings: ["Disease", "Depression", "Pain"],
 typeSpeed: 100, 
 backSpeed: 60,
 loop: true });

 function showNav()
 {
    var x=document.getElementById('nav');
    if(x.style.display=== 'none')
    {
      x.style.display="block";
    }

    else
    {
      x.style.display="none";
    }
 }
