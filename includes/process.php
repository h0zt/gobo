<?php
    include('classProfile.php');
    $profile = new Profile();


    if(isset($_POST['username'])){
        $profile->editProfile(
            $_POST['username'],
            $_POST['contact'],
            $_POST['address'],
            $_POST['id']
        );
    }


    if(isset($_POST['skill'])){
        $profile->addSkill($_POST['name'],$_POST['id']);
    }



    if(isset($_POST['work'])){
        $profile->addWork(
            $_POST['work'],
            $_FILES['file']['name'],
            $_POST['id']
        );
    }



    if(isset($_POST['action'])){
        $profile->fetchWork();
    }
    

?>

