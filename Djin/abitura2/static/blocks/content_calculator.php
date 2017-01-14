<head>
<style>
.class1{
    border:1px solid #ccc;
}
.foc{
    border:1px solid red;
}.
no_foc{
    border:1px solid #fff;
}
 .error { border-color: red; } 
 
a.button { 
position: relative; 
font-weight: bold; 
color: white; 
text-decoration: none; 
text-shadow: 0 -1px 1px #cc5500; 
user-select: none; 
padding: .8em 2em; 
outline: none; 
border-radius: 1px; 
background: linear-gradient(to left, rgba(0,0,0,.3), rgba(0,0,0,.0) 50%, rgba(0,0,0,.3)), linear-gradient(#d77d31, #fe8417, #d77d31); 
background-size: 100% 100%, auto; 
background-position: 50% 50%; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, #000 0 10px 15px -10px; 
transition: 0.2s; 
} 
a.button:hover { 
background-size: 140% 100%, auto; 
} 
a.button:active { 
top: 1px; 
color: #ffdead; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000; 
} 

a.button { 
position: relative; 
font-weight: bold; 
color: white; 
text-decoration: none; 
text-shadow: 0 -1px 1px #cc5500; 
user-select: none; 
padding: .8em 2em; 
outline: none; 
border-radius: 1px; 
background: linear-gradient(to left, rgba(0,0,0,.3), rgba(0,0,0,.0) 50%, rgba(0,0,0,.3)), linear-gradient(#d77d31, #fe8417, #d77d31); 
background-size: 100% 100%, auto; 
background-position: 50% 50%; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, #000 0 10px 15px -10px; 
transition: 0.2s; 
} 
a.button:hover { 
background-size: 140% 100%, auto; 
}
h1{ 
text-align:center; 
margin-top:0px; 
margin-bottom:1em; 
color:#00AA00; 
font-family:Arial, Helvetica, Verdana, Sans-Serif; 
text-shadow: 5px 5px 5px #00FF00; 
font-size:200%; 
font-weight:bold; 
} 
a.button:active { 
top: 1px; 
color: #ffdead; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000; 
}
</style>
</head>
<body><br><br><br><br>
<table border="1">
   <tr>
    <th><img src="../static/images/images/NTUemblTransp.png" width="200" height="180" alt="NTU KHPI"></th>
    
	 <th colspan="2"><?php echo $Lang["chances"]; ?></th>
 <th> <img src="../static/images/img_calculator/sputnik.jpg" width="200" height="100" alt="sputnik"> </th>
   </tr>
   <tr>
    <td></td>
    <td> <h1> <pre><?php echo $Lang["zno"]; ?></h1>  <hr> 
 <?php echo $Lang["language"]; ?> <input type="number" margin-right = "10%" min = "50" align="right" max = "200" id="input" required > <hr> 
 <?php echo $Lang["mathematics"]; ?> <input type="number" margin-right = "10%" min = "50" align="right" max = "200" id="input2" required > <hr> 
 <?php echo $Lang["additional"]; ?> <input type="number" margin-right = "10%" min = "50" align="right" max = "200" id="input1" required> <hr> 


 <p align="center"> <?php echo $Lang["school_certificate"]; ?> </p> <hr>
 
 <?php echo $Lang["average_certificate"]; ?> <input type="number" oninput="up(this)" id = "input4" step="0.01" required/>

<script>
function up(e) {
  if (e.value.indexOf(".") != '-1') {
    e.value=e.value.substring(0, e.value.indexOf(".") + 3);
  }
}
</script> <hr> 
 


<p align="center"> <?php echo $Lang["personal_achievements"]; ?>  </p> <hr>

<?php echo $Lang["passing"]; ?> <input type="text" min = "1" max = "20" id="input7"> <hr> 

<div id="error"></div>

</br>

<input TYPE="SUBMIT" id="sub" VALUE ="<?php echo $Lang["click"]; ?>" onclick=result()></td>
	<td><p align="center"> <?php echo $Lang["note"]; ?> </p>
 
  
<p align="justify">
<?php echo $Lang["text"]; ?>
 </p></td>
	<td></td>
  </tr>
 </table>
<br><br><br><br>
<script>

input.onblur = function() { 
if (this.value > 200 || this.value < 50) { // введено не число 
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
if (this.value > 200 || this.value < 50) { // введено не число 
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
if (this.value > 200 || this.value < 50) { // введено не число 
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
if (this.value > 200 || this.value < 1 || (this.value > 12 && this.value < 100))  { // введено не число 
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
if (this.value > 20 || this.value < 0) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Введенное число должно быть в интервале от 0 до 20.' 
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

</script>

  
 <script>
 
 function result() {
 
  
 
var ukr=document.getElementById("input").value;
var matan=document.getElementById("input2").value;
var dopoln=document.getElementById("input1").value;
var atestat=document.getElementById("input4").value;
var cours=document.getElementById("input7").value;


if (ukr =="") creat(form.input.from,"");	
if (matan =="") creat(form.input2.from,"");	
if (atestat =="") creat(form.input4.from,"");
if (dopoln =="") creat(form.input4.from,"");



if(atestat < 100)
{
	if(atestat <= 2)
		atestat = 100;
	else
		atestat = 80 + (atestat * 10);
	
}

var place1Info = 0;
var place2Info = 0;
var place1PM = 0;
var place2PM = 0;

var place_of_all = 0;


var all_sum15;
all_sum15 = (ukr * 0.2) + (matan * 0.5) + (dopoln * 0.2) + ( cours * 0.05) + (atestat * 0.1);
var all_sum16;
all_sum16 = (ukr * 0.2) + (matan * 0.45) + (dopoln * 0.2) + ( cours * 0.05) + (atestat * 0.1);




var year2015Info = [ 182.84, 182.09, 181.8, 177.64, 176.85, 175.82, 174.88, 173.58, 171.52, 169.56, 165.51, 158.33, 148.96, 148.16, 148.11, 110.7];
var year2016Info = [ 182.85, 178.1, 170.5, 164.55, 164.2, 161.35, 158.25, 157.95, 157.75, 156.4, 150.9, 131.3, 128.8, 127.3, 125.2, 124.9, 123.8, 122.75, 106.15];

var year2015PM = [ 178.13, 160.21, 142.44, 125.49];
var year2016PM = [ 180.95, 164.35, 156.65, 129.05, 124.5, 114.55];
for (var i = 0; i < year2015Info.length; i++) 
{

if (year2015Info[i] > all_sum15)
{
	place1Info = i;

}
}

for (var i = 0; i < year2015PM.length; i++) 
{

if (year2015PM[i] > all_sum15)
{
	place1PM = i;
	
}

}


for (var i = 0; i < year2016Info.length; i++) 
{

if (year2015Info[i] > all_sum16)
{
	place2Info = i;
	
}
}
for (var i = 0; i < year2016PM.length; i++) 
{

if (year2016PM[i] > all_sum16)
{
	place2PM = i;
	
}

}

if( place1Info <= 10)
{
place1Info = 1;
}
if( place1Info >= 10 && place1Info <= 20)
{
place1Info = 2;
}
if( place1Info > 20 )
{
place1Info=3;
}


if( place2Info <= 10)
{
place2Info = 1;
}
if( place2Info >= 10 && place2Info <= 20)
{
place2Info = 2;
}
if( place2Info > 20 )
{
place2Info = 3;
}


if( place1PM <= 10)
{
place1PM = 1;
}
if( place1PM >= 10 && place1PM <= 20)
{
place1PM = 2;
}
if( place1PM > 20 )
{
place1PM=3;
}


if( place2PM <= 10)
{
place2PM = 1;
}
if( place2PM >= 10 && place2PM <= 20)
{
place2PM = 2;
}
if( place2PM > 20 )
{
place2PM = 3;
}
var name = "<?php echo $_SESSION['NowLang']; ?>";
if(name == "ru"){
		
	
	if(atestat < 12)
		alert("Ваш средний балл аттестата был введён в 12-бальной системе.\n При переводе Вашего среднего балла аттестата в 200-бальную систему получилось  " + atestat);
	alert ("Ваш конкурсный балл для 2016 года: " + all_sum16 + "\nВаш конкурсный балл для 2015 года - " + all_sum15);
	alert(" В 2015 году Ваше место:\n Информатика: в " + place1Info + "-й десятке. Всего заявок: 198\n Прикладная математика: в " + place1PM + "-й десятке. Всего заявок: 41");
	if(all_sum16 < 152){	
		alert(" В 2016 году Ваше место:\n Компьютерные науки и информационные технологии: в " + place2Info + "-й десятке. Всего заявок: 198. К сожалению, Ваш конкурсный балл недостаточен для поступления на бюджет для данной специальности" + "\n Прикладная математика: в " + place2PM + "-й десятке. Всего заявок: 41. К сожалению, Ваш конкурсный балл недостаточен для поступления на бюджет для данной специальности");
	}
	else if(all_sum16 < 153){
		alert(" В 2016 году Ваше место:\n Компьютерные науки и информационные технологии: в " + place2Info + "-й десятке. Всего заявок: 198\n Прикладная математика: в " + place2PM + "-й десятке.  Всего заявок: 41. К сожалению, Ваш конкурсный балл недостаточен для поступления на бюджет для данной специальности" );
	}
	else {
		alert(" В 2016 году Ваше место:\n Компьютерные науки и информационные технологии: в " + place2Info + "-й десятке. Всего заявок: 198\n Прикладная математика: в " + place2PM + "-й десятке.  Всего заявок: 41");
	}
}

else if(name == "en"){
	{ 
	if(atestat < 12)
		alert("Your average score of the certificate was entered in the 12-point system. Converting your average score of the certificate in the 200-point system it turned out " + atestat); 
	alert ("Your competitive score for 2016 year: " + all_sum16 + "\n Your competitive score for 2015 year - " + all_sum15); 
	alert("In 2015 your position:\n Informatics: in " + place1Info + "-th ten. In total applications: 198\n Applied Mathematics: in " + place1PM + "-th ten. In total applications: 41"); 
	if(all_sum16 < 152){ 
		alert("In 2016 your position:\n Computer Science and Information Technologies: in " + place2Info + "-th ten. In total applications: 198. Unfortunately, your competitive score is insufficient for admission to the budget for this specialty " + "\n Applied Mathematics: in " + place2PM + "-th ten. In total applications: 41. Unfortunately, your competitive score is insufficient for admission to the budget for this specialty "); 
	} 
	else if(all_sum16 < 153){ 
		alert("In 2016 your position:\n Computer Science and Information Technologies: in " + place2Info + "-th ten. In total applications: 198\n Applied Mathematics: in " + place2PM + "-th ten. In total applications: 41. Unfortunately, your competitive score is insufficient for admission to the budget for this specialty " ); 
	} 
	else { 
		alert("In 2016 your position:\n Computer Science and Information Technologies: in " + place2Info + "-th ten. In total applications: 198\n Applied Mathematics: in " + place2PM + "-th ten. In total applications: 41"); 
	} 
	}
}
else if( name == "ua"){
	if(atestat < 12)
		alert("Ваш середній бал аттестату був уведен в 12-бальній системі. Під час переводу Вашего среднього балу атестату в 200-бальну систему вийшло  " + atestat);
	alert ("Ваш конкурсний бал для 2016 року: " + all_sum16 + "\nВаш конкурсний балл для 2015 року - " + all_sum15);
	alert(" У 2015 році Ваше місце:\n Інформатика: в " + place1Info + "-й десятці. Всього заявок: 198\n Прикладна математика: в " + place1PM + "-й десятці. Всього заявок: 41");
	if(all_sum16 < 152){	
		alert("У 2016 році Ваше місце:\n Комп`ютерні науки та інформаційні технології: в " + place2Info + "-й десятке. Всего заявок: 198. Нажаль, Вашого конкурсного балу недостатньо для вступу на бюджет для даної спеціальності" + "\n Прикладна математика: в " + place2PM + "-й десятці. Всього заявок: 41. Нажаль, Вашого конкурсного балу недостатньо для вступу на бюджет для даної спеціальності");
	}
	else if(all_sum16 < 153){
		alert(" У 2016 році Ваше місце:\n Комп`ютерні науки та інформаційні технології: в " + place2Info + "-й десятці. Всього заявок: 198\n Прикладна математика: в " + place2PM + "-й десятці.  Всього заявок: 41. Нажаль, Вашого конкурсного балу недостатньо для вступу на бюджет для даної спеціальності" );
	}
	else {
		alert(" У 2016 році Ваше місце:\n Комп`ютерні науки та інформаційні технології: в " + place2Info + "-й десятці. Всього заявок: 198\n Прикладна математика: в " + place2PM + "-й десятці.  Всього заявок: 41.");
	}
}

place_of_all = year2013.length;
place1_of_all = year2014.length;
place2_of_all = year2015.length;


}

</script>
</body>