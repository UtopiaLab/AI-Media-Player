// console.clear();
const buttons = Array.from(document.querySelectorAll("button"));

buttons.forEach(btn => {
    btn.addEventListener("click", () => {
        btn.classList.toggle("active");
    });
});

$('.btn').click(function () {
    $(".bigPlay img").toggleClass("active");
});

const audio = document.querySelector('#audio');
var minutes = Math.floor(audio.duration / 60);
var seconds = Math.floor(audio.duration % 60);
document.querySelector('.listen').innerHTML = `${minutes}:${seconds}`;
let isPlay = false;

const allCibik = document.querySelectorAll('.lines.grey');
let index = 0;
let animation;
let timeIndex = 0;
let timer;

const bigButton = document.querySelector('.play-pause');
bigButton.addEventListener('click', () => {
    if (!isPlay) {
        isPlay = true;
        audio.play();
        timer = setInterval(() => {
            var timerMinutes = Math.floor(timeIndex / 60);
            var timerSeconds = Math.floor(timeIndex % 60);
            document.querySelector('.listened').innerHTML = `${timerMinutes}:${timerSeconds}`;
            timeIndex = timeIndex + 1;
        }, 1000);
        animation = setInterval(() => {
            allCibik[index].classList.remove('grey');
            index = index + 1;
        }, (audio.duration *1000)/43);
    } else {
        isPlay = false;
        audio.pause();
        clearInterval(animation);
        clearInterval(timer);
    }

});

// jQuery(document).ready(function($) {
//     var audio1 = $('#audio')[0]; // Use [0] to get the DOM element from jQuery object

//     console.log("Audio duration: " + audio1.duration + " seconds");
// });