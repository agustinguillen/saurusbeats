var x = window.matchMedia("(max-width: 767px)");

function replace( hide, show ) {
    document.getElementById(hide).style.display="none";
    document.getElementById(show).style.display="inline-block";
  }

  function ifMobile(x) {
    if (x.matches) {
        replace();   
    }
}

ifMobile(x);



