<?
function my_dump($var){
    global $USER;
    if($USER->isAdmin()){
        echo "<pre>";
        print_r($var);
        echo"</pre>";
    }

}
?>