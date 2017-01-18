﻿function yearmore()
{
	var drop_year=curr_year-2002;
	for (count=1; count<=drop_year; count=count+1)
		{
		seal=seal+5;
		kin=kin+105;
		tone++;
		if (tone==14) 
			{
			tone=1;
			}
		if (seal>=20)
			{
			seal=4;
			}
		if (kin>260)
			{
			kin=kin-260;
			}
		}	
}
function dropyear()
{
	seal=seal-5;
	tone=tone-1;
	kin=kin-105;
	if (kin<=2)
		{
		kin=kin+260;
		}
	if (tone<=0)
		{
		tone=13;
		}
	if (seal<=3)
		{
		seal=19;
		}			
}

var moons=new Array(14)
	moons[0]="errorincode";
	moons[1]="Magnetic Moon";
	moons[2]="Lunar Moon";
	moons[3]="Electric Moon";
	moons[4]="Self-Existing Moon";
	moons[5]="Overtone Moon";
	moons[6]="Rhythmic Moon";
	moons[7]="Resonant Moon";
	moons[8]="Galactic Moon";
	moons[9]="Solar Moon";
	moons[10]="Planetary Moon";
	moons[11]="Spectral Moon";
	moons[12]="Crystal Moon";
	moons[13]="Cosmic Moon";

var moon_days=new Array(29)
	moon_days[0]="0";
	moon_days[1]="Dali 1";
	moon_days[2]="Seli 2";
	moon_days[3]="Gamma 3";
	moon_days[4]="Kali 4";
	moon_days[5]="Alpha 5";
	moon_days[6]="Limi 6";
	moon_days[7]="Silio 7";
	moon_days[8]="Dali 8";
	moon_days[9]="Seli 9";
	moon_days[10]="Gamma 10";
	moon_days[11]="Kali 11";
	moon_days[12]="Alpha 12";
	moon_days[13]="Limi 13";
	moon_days[14]="Silio 14";
	moon_days[15]="Dali 15";
	moon_days[16]="Seli 16";
	moon_days[17]="Gamma 17";
	moon_days[18]="Kali 18";
	moon_days[19]="Alpha 19";
	moon_days[20]="Limi 20";
	moon_days[21]="Silio 21";
	moon_days[22]="Dali 22";
	moon_days[23]="Seli 23";
	moon_days[24]="Gamma 24";
	moon_days[25]="Kali 25";
	moon_days[26]="Alpha 26";
	moon_days[27]="Limi 27";
	moon_days[28]="Silio 28";	

var months=new Array(13)
	months[0]="0";
	months[1]="31";
	months[2]="28";
	months[3]="31";
	months[4]="30";
	months[5]="31";
	months[6]="30";
	months[7]="31";
	months[8]="31";
	months[9]="30";
	months[10]="31";
	months[11]="30";
	months[12]="31";
var sol_seals=new Array(20)
	sol_seals[0]="Sun";
	sol_seals[1]="Dragon";
	sol_seals[2]="Wind";
	sol_seals[3]="Night";
	sol_seals[4]="Seed";
	sol_seals[5]="Serpent";
	sol_seals[6]="Worldbridger";
	sol_seals[7]="Hand";
	sol_seals[8]="Star";
	sol_seals[9]="Moon";
	sol_seals[10]="Dog";
	sol_seals[11]="Monkey";
	sol_seals[12]="Human";
	sol_seals[13]="Skywalker";
	sol_seals[14]="Wizard";
	sol_seals[15]="Eagle";
	sol_seals[16]="Warrior";
	sol_seals[17]="Earth";
	sol_seals[18]="Mirror";
	sol_seals[19]="Storm";
var seal_color=new Array(20)
	seal_color[0]="Yellow";
	seal_color[1]="Red";
	seal_color[2]="White";
	seal_color[3]="Blue";
	seal_color[4]="Yellow";
	seal_color[5]="Red";
	seal_color[6]="White";
	seal_color[7]="Blue";
	seal_color[8]="Yellow";
	seal_color[9]="Red";
	seal_color[10]="White";
	seal_color[11]="Blue";
	seal_color[12]="Yellow";
	seal_color[13]="Red";
	seal_color[14]="White";
	seal_color[15]="Blue";
	seal_color[16]="Yellow";
	seal_color[17]="Red";
	seal_color[18]="White";
	seal_color[19]="Blue";
var gal_tones=new Array(14)
	gal_tones[0]="errorincode";
	gal_tones[1]="Magnetic";
	gal_tones[2]="Lunar";
	gal_tones[3]="Electric";
	gal_tones[4]="Self-Existing";
	gal_tones[5]="Overtone";
	gal_tones[6]="Rhythmic";
	gal_tones[7]="Resonant";
	gal_tones[8]="Galactic";
	gal_tones[9]="Solar";
	gal_tones[10]="Planetary";
	gal_tones[11]="Spectral";
	gal_tones[12]="Crystal";
	gal_tones[13]="Cosmic";
	
	
	
var d = new Date();
var start_year = 10;
var seal=9;
var tone=10;
var kin=49;
var moon_of_13=1;
var day_of_28=1;
var curr_date = d.getDate();
var curr_month = d.getMonth();
var weekday=new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
var month_name = new Array("January", "February", "March","April", "May", "June", "July", "August", "September", "October", "November","December");
curr_month++;
var curr_year = d.getFullYear();
var xx = 7;
var xy = 26;
var moon=1;
var mday=1;
var wday=1;
var week=1;


console.log(	
	curr_month + "." +
	curr_date + "." +
	curr_year
)

if (curr_year>2002) yearmore();
if (curr_month<7) dropyear();
if ((curr_month==7) && (curr_date<26)) dropyear();



while ((xx!=curr_month) || (xy!=curr_date))
	{
	kin++;
	xy++;
	seal++;
	tone++;
	mday++;
	wday++;
	if (wday>7)
		{
		wday=1;
		week++;
		}
	if (mday>28)
		{
		mday=1;
		moon++;
		}
	if (seal==20)
		{
		seal=0;
		}
	if (tone==14)
		{
		tone=1;
		}
	if (kin==261)
		{
		kin=1;
		}			
	if (xy>months[xx])
		{
		xx++;
		xy=1;
		if (xx==13)
			{
			xx=1;
			}
		}
//console.log(kin);			
	}	