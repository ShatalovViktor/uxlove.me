<?php

//echo '<pre>'; print_r($arUser); echo '</pre>';
$userName=$arUser['name'];
$userSurname=$arUser['surname'];
?>
<form name="edit_profile" method="post">
    <label for="userName"> Ваше имя </label>
    <input id="userName" name="userName" type="text" value="<?=$userName?>" />
    <br />
    <label for="userSurname"> Ваше фамилия </label>
    <input id="userSurname" name="userSurname" type="text" value="<?=$userSurname?>" />
     <br />
    <input name="edit_profile" type="submit" value="Сохранить" />
</form>