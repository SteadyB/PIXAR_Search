  <?php
$nameSearch = '';
$nameSearch = $_POST['nameSearch'];
$movie = '';
$movie = $_POST['movie'];



$findNemo = ["Nemo","Dory","Marlin","Gill","Bloat","Peach","Gurgle","Bubbles","Jaques","Nigel","Crush","Coral","Squirt","Mr Ray"];
$findDory = ["Nemo","Dory","Marlin","Hank","Destiny","Bailey","Jenny","Charlie","Fluke","Rudder","Mr Ray"];
$toyStory = ["Buzz","Zurg","Woody","ZigZag","Mr Potato Head","Slinky Dog","Rex","Hamm","Bo peep","Andy","Sid","Ms Davis","Sergeant","Hannah","Aliens","Mr Spell","Lenny"];
$wallE = ["Wall-E","EVE","Mary","Shelby Forthright","AUTO"];
$monster1 = ["Sulivan","Mike","Boo","Randall","Waternoose","Celia"];
$all = array_merge($findNemo, $findDory, $toyStory, $wallE, $monster1);
var_dump($_POST);
//var_dump($all);
$nameSearch;
$movie;
?>
