<?
class sqBaseStairPyramid{
 # pyramid calc
 # square base hollow
 # 1m thick sandstone stairs
 function __construct(){
  $this->calcs=array();
 }
 # Get total stairs
 function ctStairs($los){
  $stairs=0;
  for($n=$los;$n>=1;$n-=2){
   $stairs+=(($los*4)-4);
  }
  $this->calcs["stairs"]=$stairs;
 }
 # Get total sandstone
 function ctSndstn($stairs){
  $pack=ceil($stairs/4);
  $sndstn=(6*$pack);
  $this->calcs["sndstn"]=$sndstn;
 }
 # Get total sand
 function ctSand($sndstn){
  $sand=($sndstn*4);
  $this->calcs["sand"]=$sand;
 }
}
$N=new sqBaseStairPyramid;
$N->ctStairs(27);
$N->ctSndstn($N->calcs["stairs"]);
$N->ctSand($N->calcs["sndstn"]);
echo "<pre>".print_r($N->calcs,true)."</pre>";
?>