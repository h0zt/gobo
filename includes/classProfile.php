<?php
class Profile{
    //database connection
   
    public function editProfile($username,$contact,$address,$id){
        $dbconnect = mysqli_connect('localhost','root', '','gobo');
        $query="UPDATE users SET username='$username',
            location='$address',
            contact='$contact'
            WHERE id='$id' ";
        if(mysqli_query($dbconnect,$query)){
            echo "sampled";
        }
    }


    public function addSkill($name,$id){
        $dbconnect = mysqli_connect('localhost','root', '','gobo');
        $query="UPDATE users SET username='$name'
            WHERE id='$id' ";
        if(mysqli_query($dbconnect,$query)){
            echo "changed data";
        }
    }



    public function addWork($work,$filename,$id){
        $dbconnect = mysqli_connect('localhost','root', '','gobo');
        $query="UPDATE users SET username='$work', password='$filename'
            WHERE id='$id' ";
        $path ="upload/".$filename;
        $tmp = $_FILES['file']['tmp_name'];
        //insert images
        if(move_uploaded_file($tmp,$path)){
            mysqli_query($dbconnect,$query);
        }
    }


    public function fetchWork(){
        $dbconnect = mysqli_connect('localhost','root', '','gobo');
        $query = "SELECT * FROM users";
        $result = mysqli_query($dbconnect, $query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $data['data'][] = array(
                    'username'=>$row['username'],
                    'contact'=>$row['contact'],
                    'password'=>$row['password'],
                    'firstname'=>$row['firstname'],
                    'lastname'=>$row['lastname']
                );
            }
        }
        echo json_encode($data);
    }

   
}



?>