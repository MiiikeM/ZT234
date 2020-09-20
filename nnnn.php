<?php

/**
 * @author Michal Mestak
 * trida string Mestak
 * nadefinovani jednotlivych promennych
 */
class stringMestak {
    // substr vypise kus retezce
    static public function substrMestak($retezec,$odkudsezacne) {
        return substr($retezec, $odkudsezacne);
}
//v retezci vlozi na prislusne misto string
static public function substr__replaceMestak($text,$cochcinahradit,$zacatek) {
   return substr_replace($text, $cochcinahradit, $zacatek);
}
//nahradi slovo v retezci
static public function strtrMestak($veta,$conahrazuji,$cimnahrazuji) {
    return strtr($veta, $conahrazuji, $cimnahrazuji);
}
//vsechny pismena v rezezci pujdou velka
static public function strtoupperMestak($vsechnovelke) {
    return strtoupper($vsechnovelke);
}
//vsechny pismena budou malym
static public function strtolowerMestak($vsechnomale) {
    return strtolower($vsechnomale);
}
//v retezci najde pozadovany retezec posledni moznost
static public function strrposMestak($odkudhledam,$cohledam) {
    return strrpos($odkudhledam, $cohledam);
}
//hleda presne zadany string v retezci
static public function strriposMestak($odkudhledam,$presnecohledam) {
   return strripos($odkudhledam, $presnecohledam); 
}
//najde v retezci prvni shodu toho co hledam
static public function strposMestak($odkudhledam,$cohledam) {
    return strpos($odkudhledam, $cohledam);
}
//vypise delku retezce
static public function strlenMestak($reknidelku) {
    return strlen($reknidelku);
}
//najde co hledam
static public function strchrMestak($odkudhledam,$cohledam) {
    return strchr($odkudhledam, $cohledam);
}
// vyjme/nahradi proměné v poli
static public function str_replace($samohlasky,$vtomhlerozmezi,$here) {
   return str_replace($samohlasky, $vtomhlerozmezi, $here);
}
// zasifruje slovo
static public function md5Mestak($zprava) {
    return md5($zprava);
}
//vlozi do pole neco
static public function implodeMestakk($co,$kam) {
    return implode($co, $kam);
}
//rozdeli na substringy
static public function explodeMestak($hranice,$stringveta) {
    return explode($hranice, $stringveta);
}
//pridaslash pred charaktery
static public function addcslashesMestak($vtomhleretezci,$rozmezi) {
    return addcslashes($vtomhleretezci, $rozmezi);
}
//vlozi backslah do vety
static public function addslashMestak($stringveta) {
    return addslashes($stringveta);
}
// odebere nevhodne vei z retezce
static public function trimMmestak($odsud,$topryc) {
    return trim($odsud, $topryc);
}
//prvni pismeno ve vete velke
static public function ucfirstMestak($veta) {
    return ucfirst($veta);
}
//vsechny slova zacnou velkym pismenem
static public function ucwordsMestak($veta) {
    return ucwords($veta);
}

}
//nadefinovani vsech promennych ktere jsem pouzil v kodu
$retezec = "sdvkjbsvjsbaflsdvkj";
$odkudsezacne =5;
$text="Petr chtel domu, ale srazilo ho auto";
$cochcinahradit="ryhle";
$zacatek= 10;
$veta="normalni opice zerou maso";
$conahrazuji ="opice";
$cimnahrazuji="lide";
$vsechnovelke="pepa rad hraje fotbal";
$vsechnomale="TOMAS RAD PIJE PIVO";
$odkudhledam ="1A23s456d789s";
$cohledam= "1a2";
$presnecohledam="a23S";
$reknidelku= "Uz me nebavi sedet porad za kompem, chci hrat fotbal";
$samohlasky= array ('a','e','i','o','u','y');
$vtomhlerozmezi="";
$here="To je ale krasny den asi pujdu behat";
$zprava= "mango";
$co=",";
$kam= array ('orientace','pohlavi','narodnost','nabozenstvi');
$hranice = '""';
$stringveta="opice simpanz orangutan";
$vtomhleretezci="Ahoj ja jsem Jakub";
$rozmezi= 'A..z';
$odsud="\a\aAhoj svete tady Odocaki\a\a";
$topryc="\a";
//pomoci var_dump vypisu vsechny staticke funkce, ktere jsem si v class nadefinoval
var_dump(stringMestak::substrMestak($retezec, $odkudsezacne));
var_dump(stringMestak::substr__replaceMestak($text, $cochcinahradit, $zacatek));
var_dump(stringMestak::strtrMestak($veta, $conahrazuji, $cimnahrazuji));
var_dump(stringMestak::strtoupperMestak($vsechnovelke));
var_dump(stringMestak::strtolowerMestak($vsechnomale));
var_dump(stringMestak::strrposMestak($odkudhledam, $cohledam));
var_dump(stringMestak::strriposMestak($odkudhledam, $presnecohledam));
var_dump(stringMestak::strposMestak($odkudhledam, $cohledam));
var_dump(stringMestak::strlenMestak($reknidelku));
var_dump(stringMestak::strchrMestak($odkudhledam, $cohledam));
var_dump(stringMestak::str_replace($samohlasky, $vtomhlerozmezi, $here));
var_dump(stringMestak::md5Mestak($zprava));
var_dump(stringMestak::implodeMestakk($co, $kam));
var_dump(stringMestak::explodeMestak($hranice, $stringveta));
var_dump(stringMestak::addcslashesMestak($vtomhleretezci, $rozmezi));
var_dump(stringMestak::addslashMestak($stringveta));
var_dump(stringMestak::trimMmestak($odsud, $topryc));
var_dump(stringMestak::ucfirstMestak($veta));
var_dump(stringMestak::ucwordsMestak($veta));
aS
?>




