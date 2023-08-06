let sections = document.querySelectorAll('section');
let start = document.getElementById('home');

document.addEventListener("DOMContentLoaded", () => {
        start.classList.add('show-animate')
});

// console.log(
//     sections
// );
window.onscroll = ()=>{
    sections.forEach(sec =>{
        let top = window.scrollY;
        let offset = sec.offsetTop - 300;
        let height = sec.offsetHeight ;

        if(top >= offset && top < offset + height)
        {
            sec.classList.add('show-animate')
        }
        // else{
        //     sec.classList.remove('show-animate');
        // }
    })
}