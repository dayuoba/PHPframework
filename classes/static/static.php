<?php 
class Handle{
	function handler(){
		$funchandler=new FuncHandle();
		$classhandler=new ClassHandle();
	    $datahandler=new DataHandle("localhost","root","");
		$viewhandler=new ViewHandle();
		$routeshandler=new RoutesHandle();

		$url=$routeshandler->getUrl();
		/*$con=$datahandler->connect();
		$sql="insert into users (id,name) values('11224227434','大于d') ";
		$res=$datahandler->query("testdb",$sql,$con);*/
		$result=$routeshandler->handleUrl($url);
		return $result;
	}
}
class FuncHandle{
	function foo(){
		echo("funchanlde");
	}
}
class ClassHandle{

}
class FileHandle{
	function scandir($pathname){
	        foreach( glob($pathname) as $filename ){
	 
	            if(is_dir($filename)){
	            	myscandir($filename.'/*');
	            }else{
	                echo(iconv('gbk', 'utf-8',$filename).'<br/>');
	            }
	        }
	    }
}
class DataHandle{
	var $host,$usr,$psw;
	public function __construct($host,$usr,$psw){
		$this->host=$host;
		$this->usr=$usr;
		$this->psw=$psw;
	}
	function connect(){
		$con=mysql_connect($this->host,$this->usr,$this->psw);
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
  		return $con;
	}
	function createDB($dbname,$con){
		if (mysql_query("CREATE DATABASE ".$dbname,$con))
  		{
  			//echo "Database created";
  		}
		else
  		{
  			echo "Error creating database: " . mysql_error();
  		}
  			mysql_close($con);
	}
	function query($dbname,$sql,$con){
		mysql_select_db($dbname, $con);
		mysql_query('set names utf8');
	    if(!mysql_query($sql,$con)){
	    	echo(mysql_error());
	    }
  		mysql_close($con);
	}
}
class ViewHandle{
	function display($result){
		if ($result==="default") {
			$GLOBALS['TEMP'] = "default";
			require_once("views/index.php");
		}else{
			$GLOBALS['TEMP'] = $result['tmp'].".php";
			//echo($GLOBALS['TEMP']);
			require_once("views/index.php");
		}
	}
	function render($result){
		echo($result);
	}
}
class RoutesHandle{    
	function getUrl(){
		$url=$_SERVER['REQUEST_URI'];
		return $url;
	}
	function handleUrl($url){
		$result=parse_url($url,PHP_URL_QUERY);
		$result=explode("&", $result);
		for ($i=0; $i <count($result) ; $i++) { 
			$c=explode("=", $result[$i]);
			$b[$c[0]]=$c[1];
		}
		return $b;
	}
	function foo(){
		echo("routeshandle");
	}
}

class App{
	function run(){
		$hdl=new Handle();
		$view=new ViewHandle();
		$result=$hdl->handler();
		if (!$result['tmp']) {
			$view->display("default");
		}else{
			$view->display($result);
		}
		
	}
}
function init(){
	//echo("init");
}
 ?>