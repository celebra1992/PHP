input.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Введенное число должно быть в интервале от 1 до 200.' 
document.getElementById('sub').disabled = true; 

} 
}; 

input.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
document.getElementById('sub').disabled = false; 

} 
}; 

input1.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Введенное число должно быть в интервале от 1 до 200.' 
document.getElementById('sub').disabled = true; 
} 
}; 

input1.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
document.getElementById('sub').disabled = false; 
} 
}; 
input2.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Введенное число должно быть в интервале от 1 до 200.' 
document.getElementById('sub').disabled = true; 
} 
}; 

input2.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
document.getElementById('sub').disabled = false; 
} 
}; 


input4.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Введенное число должно быть в интервале от 1 до 200.' 
document.getElementById('sub').disabled = true; 
} 
}; 

input4.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
document.getElementById('sub').disabled = false; 
} 
}; 



input7.onblur = function() { 
if (this.value > 20 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Введенное число должно быть в интервале от 1 до 200.' 
document.getElementById('sub').disabled = true; 
} 
}; 

input7.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
document.getElementById('sub').disabled = false; 
} 
}; 


function result() {
 
var ukr=document.getElementById("input").value;
var fori=document.getElementById("input1").value;
var matan=document.getElementById("input2").value;
var fiz=document.getElementById("input3").value;
var atestat=document.getElementById("input4").value;
var cours=document.getElementById("input7").value;
var himia=document.getElementById("input8").value;
var istoria=document.getElementById("input9").value;

matan=matan * 0.45;
ukr = ukr * 0.2;
cours = cours * 0.05;
atestat = atestat * 0.1;

var place = 0;
var place1 = 0;
var place2 = 0;

var place_of_all = 0;


var the_best_mark = 0;

if(the_best_mark < fori)
{
the_best_mark = fori;
}
if(the_best_mark < fiz)
{
the_best_mark = fiz;
}
if(the_best_mark < himia)
{
the_best_mark = himia;
}
if(the_best_mark < istoria)
{
the_best_mark = istoria;
}

the_best_mark = the_best_mark * 0.2;

var all_sum;
all_sum = ukr + matan;
all_sum = all_sum + the_best_mark;
all_sum = all_sum + cours;
all_sum = all_sum + atestat;


alert ("Ваш конкурсный бал - " + all_sum);

var year2013 = [ 190, 180, 170, 160,150, 184, 130, 120,110, 109, 108, 107, 106, 105];
var year2014 = [ 200, 200, 200, 200,200, 200, 200, 200,200, 200, 200, 200, 200, 200];
var year2015 = [ 150, 160, 140, 150 ];

for (var i = 0; i < year2013.length; i++) 
{

if (year2013[i] > all_sum)
{
	place = i;
	
}
}


for (var i = 0; i < year2014.length; i++) 
{

if (year2014[i] > all_sum)
{
	place1 = i;
	
}
}


for (var i = 0; i < year2015.length; i++) 
{

if (year2015[i] > all_sum)
{
	place2 = i;
	
}
}


if( place <= 10)
{
alert ("В 2013 году вы в 1 десятке");
}
if( place >= 10 && place <= 20)
{
alert ("В 2013 году вы в 2 десятке");
}
if( place > 20 )
{
alert ("В 2013 году вы вобще не поступили");
}

if( place1 <= 10)
{
alert ("В 2014 году вы в 1 десятке");
}
if( place1 >= 10 && place1 <= 20)
{
alert ("В 2014 году вы в 2 десятке");
}
if( place1 > 20 )
{
alert ("В 2014 году вы вобще не поступили");
}


if( place2 <= 10)
{
alert ("В 2015 году вы в 1 десятке");
}
if( place2 >= 10 && place2 <= 20)
{
alert ("В 2015 году вы в 2 десятке");
}
if( place2 > 20 )
{
alert ("В 2015 году вы вобще не поступили");
}
}

place_of_all = year2013.length;
place1_of_all = year2014.length;
place2_of_all = year2015.length;