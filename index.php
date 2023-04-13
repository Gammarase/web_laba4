<?php
class Singletone
{
    private static $instances = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance()
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }
}

class Get extends Singletone
{
    public function __get($name)
    {
        return $_GET[$name]??false;
    }
}

class Post extends Singletone
{
    public function __get($name)
    {
        return $_POST[$name]??false;
    }
}

$postInfo = Post::getInstance();
if($postInfo->name){
    setcookie('user', strip_tags( $postInfo->name));
    setcookie('email', strip_tags( $postInfo->email));
}

$getInfo = Get::getInstance();
$my_page =$getInfo->page;
$avaible_pages = ['main', 'about_us', 'portfolio', 'contacts', 'form'];
include("header.php");
if (in_array($my_page, $avaible_pages)){
    echo file_get_contents("$my_page.html");
}elseif($my_page === false){
    echo file_get_contents("main.html");
}
else{
    echo file_get_contents("error.html");
}
echo file_get_contents("footer.html");

?>