<?php


$a=array(
    "barishal" => array( "Barguna"," Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur"),
    "chittagong" => array("Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Cox's Bazar","Feni","Khagrachari","Lakshmipur","Noakhali","Rangamati"),
    "dhaka" => array("Dhaka","Faridpur","Gazipur","Gopalganj"," Kishoreganj","Madaripur","Manikganj","Munshiganj","Narayanganj","Narsingdi","Rajbari","Shariatpur","Tangail"),
    "mymensingh" => array("Mymensingh","Jamalpur","Sherpur","Netrokona"),
    "khulna" => array( " Bagerhat","Chuadanga","Jessore","Jhenaidah","Khulna","Kushtia","Magura","Meherpur","Narail","Shatkhira"),
    "rajshahi" => array("Bogra","Jaipurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajganj"),
    "rangpur" => array( "Rangpur","Nilphamari","Dinajpur","Panchagarh","Gaibandha","Kurigram","Lalmonirhat","Thakurgaon"),
    "sylhet" => array( "Habiganj","Maulvibazar","Sunamganj","Sylhet")
);

$q=$_REQUEST["q"];

$hint = "";

if ($q !== "") {
  foreach($a[$q] as $dis){
    if ($hint === "") {
      $hint = $dis;
    } 
    else{
      $hint .= ", $dis";
    }
  }

}


echo $hint;
?> 