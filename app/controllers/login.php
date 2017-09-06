<?php
class Login extends Controller
{
    public function index()
    {
        $this->view('login');
    }

    public function checkData()
    {
        $db = new PDO('mysql:host=localhost;dbname=aspiriadev', 'root', 'root');

        $query = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ? ");
        $query->execute(array($_POST['username'],$_POST['password']));
        if($query->rowCount()){
            echo $query->fetchAll();
        } else {
            return json_encode(["error"=>"not found"]);
        }
    }
}
?>