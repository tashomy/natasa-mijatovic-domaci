<?php

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('/', $fileType);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'svg');

if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        if ($fileSize < 5242880) {
            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = 'uploads/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            echo "Fajl je prevelik. ";
        }
    } else {
        echo "Greska prilikom upload-ovanja fajla. ";
    }
} else {
    echo "Fajlovi sa ovom ekstenzijom nisu dozvoljeni. ";
}

function isEmpty($input)
{
    if (!isset($input) || empty($input) || is_null($input)) {
        return true;
    }
    return false;
}

if (isEmpty($_POST['name-surname'])) {
    echo 'Morate unijeti ime i prezime. ';
} else {
    nameValidation();
}

if (isEmpty($_POST['email'])) {
    echo 'Morate unijeti email. ';
} else {
    emailValidation();
}

if (isEmpty($_POST['phone-number'])) {
    echo 'Morate unijeti broj telefona. ';
} else {
    phoneNumberValidation();
}

function nameValidation()
{
    $name = $_POST['name-surname'];
    if (strlen($name) > 50 || !strpbrk($name, ' ')) {
        echo 'Unesite ispravno ime i prezime. ';
    }
}

function emailValidation()
{
    $email = $_POST['email'];
    if (!strpbrk($email, '@') || !strpbrk($email, '.com')) {
        echo 'Unesite ispravan email. ';
    }
}

function phoneNumberValidation()
{
    $phoneNumber = $_POST['phone-number'];
    if (!preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{3}/', $phoneNumber) && !preg_match('/[+0-9]{3}[0-9]{2}[0-9]{3}[0-9]{3}/', $phoneNumber) && !preg_match('/[0-9]{3}[0-9]{3}[0-9]{3}/', $phoneNumber) && !preg_match('/[+0-9]{3}[0-9]{2}-[0-9]{3}-[0-9]{3}/', $phoneNumber)) {
        echo 'Unesite ispravan broj telefona. ';
    }
}
