<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////


$emploee="Mr A";
$salaries=200;
$emploee2="Mr b";
$salaries2=300;

echo "salaries for " . $emploee . "is". $salaries ;
echo "salaries for " . $emploee2 . "is". $salaries2 ;





/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( 
                "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

echo "<ul>"
for ($i=0 ; $countries<0 ; $i++) {
    echo "city".$countries[key]."Capital".$countries[value]
}

echo "</ul>"

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/
$count=""
for ($count=0; $count<0 ; $count++){
    echo "*"
    if($count<=5){
        $count--
        echo "*"
    }
    
}

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days*/

$d1=<input name="day">;
$d2=<input name="day">;
 
$out=($d1-$d2)

echo $out ;
/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>q5</title>
</head>
<body>
    <?php

        <form>
        $name = <input type="text" name="name" >;
        <input type="submit" value="Submit">
        </form> 
   
        echo  $name ;
    ?>
</body>
</html>

?>