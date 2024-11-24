document.addEventListener('DOMContentLoaded', function() {
    const animacjacontent = document.getElementById('animacja-content');
    const animacja = document.getElementById('animacja');
    let szerokosc = animacja.offsetWidth;
    let szerokosccontent = animacjacontent.offsetWidth;
    let startPos = szerokosc;
    const predkosc = 2; 

    function animation() {
        start -= predkosc;
        if (start <= -szerokosccontent) {
            start = szerokosc;
        }
        animacjacontent.style.left = `${start}px`;
    }

    function wlaczanimacje() {
        szerokosc = animacja.offsetWidth;
        szerokosccontent = animacjacontent.offsetWidth;
        start = szerokosccontent;
        animacjacontent.style.position = 'absolute';
        animacjacontent.style.left = `${start}px`;
    }

    window.onload = function() {
        wlaczanimacje();
        setInterval(animation, 1);
    };
    window.onresize = wlaczanimacje;
});
