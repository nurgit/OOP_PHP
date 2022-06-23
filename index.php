
<?php

include 'includes/aiutoloder.inc.php';

$info= new person('rakib',12, 'mel');
echo $info->name;

$MyName= new MyInfo();
//var_dump($MyName);
 echo $MyName->names();
//echo "Nur";
?>

<?php

$person1 = new Person('nur',22, 'mel');
echo $person1->name;
$person1->myname('oni');

echo $person1->name;


?>
