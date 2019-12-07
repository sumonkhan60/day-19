<?php
$result = [];
$result['word_length'] = "";
$result["string_length"] = "";

require_once 'vendor/autoload.php';
//require_once 'app/classes/Character.php';
//require_once 'app/classes/Student.php';

//use app\classes\Character;
//if(isset($_POST['btn'])){
//    $character = new app\classes\Character();
//    $result = $character->findingWordCharacter($_POST);
//}

use app\classes\Student;

Student::addition();

use app\classes\Character;
if(isset($_POST['btn'])){
    $result = Character::findingWordCharacter($_POST);
}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="given_string" size="50" /></td>
        </tr>
        <tr>
            <th>Total Number of Words</th>
            <td><input type="text" name="word_length" value="<?php echo $result['word_length']; ?>" /></td>
        </tr>
        <tr>
            <th>Total Number of Characters</th>
            <td><input type="text" name="string_length" value="<?php echo $result['string_length']; ?>" /></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit" /></td>
        </tr>
    </table>
</form>
