<?php 
session_start();
if (isset($_SESSION["mulai_waktu"])) {
	$telah_berlalu=time() - $_SESSION["mulai_waktu"];
}
?>
<script type="text/javascript" src="js/jquery-1.5.1.js">
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<div id="tempat_timer">
<span id="timer">00 : 00 : 00</span>
</div>
<script type="text/javascript">
function waktuHabis(){
 alert("selesai dikerjakan ......");
 }
function hampirHabis(periods){
 if($.countdown.periodsToSeconds(periods) == 60){
 $(this).css({color:"red"});
 }
 }
$(function(){
 var waktu = 180; // 3 menit
 var sisa_waktu = waktu - <?php echo $telah_berlalu ?>;
 var longWayOff = sisa_waktu;
 $("#timer").countdown({
 until: longWayOff,
 compact:true,
 onExpiry:waktuHabis,
 onTick: hampirHabis
 });
 })
</script>
<style>
#tempat_timer{
 margin:0 auto;
 text-align:center;
 }
#timer{
 border-radius:7px;
 border:2px solid gray;
 padding:7px;
 font-size:2em;
 font-weight:bolder;
 }
</style>