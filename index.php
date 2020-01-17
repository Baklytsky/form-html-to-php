<?php

if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['sex']) && !empty($_POST['age'])&& !empty($_POST['email'])) {
    $dt = date('Y-m-d H:i:s');
    $name = htmlspecialchars(trim($_POST['name']));
    $surname = htmlspecialchars(trim($_POST['surname']));
    $sex = ($_POST['sex']);
    $age = number_format($_POST['age']);
    $bday = htmlspecialchars(trim($_POST['bday']));
    $status = htmlspecialchars(trim($_POST['status']));
    $social = htmlspecialchars(trim($_POST['social']));
    $address = htmlspecialchars(trim($_POST['address']));
    $format = htmlspecialchars(trim($_POST['format']));
    $comment = htmlspecialchars(trim($_POST['comment']));
    $enteredBefore = htmlspecialchars(trim($_POST['entered-before']));
    $email = htmlspecialchars(trim($_POST['email']));
    $task = htmlspecialchars(trim($_POST['task']));

    if (isset($_POST['hobby'])) {
        $hobby = $_POST['hobby'];
       foreach ($hobby as $check) {
           $hobbyArray = implode("<br>",$hobby);
        }

    } else {
        $hobbyArray = '';
    }

    if (isset($_POST['books'])) {
        $books = $_POST['books'];
        foreach ($books as $check) {
            $booksArray = implode("<br>",$books);
        }

    } else {
        $booksArray = '';
    }

    if (isset($_POST['position'])) {
        $position = $_POST['position'];
        foreach ($position as $check) {
            $positionArray = implode("<br>",$position);
        }

    } else {
        $positionArray = '';
    }

    if (isset($_POST['spam-category'])) {
        $spamCategory = $_POST['spam-category'];
        foreach ($spamCategory as $check) {
            $spamCategoryArray = implode("<br>",$spamCategory);
        }

    } else {
        $spamCategoryArray = '';
    }

    if ((strlen($name) > 2) && (strlen($surname) > 2) && (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))) {
        echo 'Your form submitted';
        echo ('<table>');
        echo ('<thead>');
        echo "<tr>
                <th>Date</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Sex</th>
                <th>Age</th>
                <th>B-day</th>
                <th>Status</th>
                <th>Social</th>
                <th>Address</th>
                <th>Hobby</th>
                <th>Book format</th>
                <th>Books readed</th>
                <th>Comment</th>
                <th>Position</th>
                <th>Entered before</th>
                <th>Email</th>
                <th>Spam category</th>
                <th>Task</th>
              </tr>";
        echo ('</thead>');
        echo "<tr>
                <td>$dt</td>
                <td>$name</td>
                <td>$surname</td>
                <td>$sex</td>
                <td>$age</td>
                <td>$bday</td>
                <td>$status</td>
                <td>$social</td>
                <td>$address</td>
                <td>$hobbyArray</td>
                <td>$format</td>
                <td>$booksArray</td>
                <td>$comment</td>
                <td>$positionArray</td>
                <td>$enteredBefore</td>
                <td>$email</td>
                <td>$spamCategoryArray</td>
                <td>$task</td>
              </tr>";
        echo ('</table>');
    } else {
        echo 'Not correct form';
    }
}
else {
    $name = '';
    $surname = '';
    $sex = '';
    $age = '';
    $bday = '';
    $status = '';
    $social = '';
    $address = '';
    $format = '';
    $comment = '';
    $email = '';
    $task = '';
    echo 'Not correct form';
}
?>
<style>
    table, th, td {
        font-size: 0.85em;
        border: 1px solid #000;
        border-collapse: collapse;
        padding: 5px;
    }
</style>