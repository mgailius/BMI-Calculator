const h2 = document.querySelector('.h2');
const aboutKmi = document.querySelector('.aboutKmi');
const indicator = document.querySelector('.indicator');
const cYellow = '#ffea5f';
const cRed = '#ff4c4c';

const kmi = Number.parseFloat(h2.innerHTML);

if (kmi < 18.5) {
	aboutKmi.innerHTML = 'Underweight';
	indicator.style.background = cYellow;
} else if (kmi < 25) {
	aboutKmi.innerHTML = 'Optimal';
} else if (kmi < 30) {
	aboutKmi.innerHTML = 'Overweight';
	indicator.style.background = cYellow;
} else {
	aboutKmi.innerHTML = 'Obesity';
	indicator.style.background = cRed;
}
