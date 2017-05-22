$(document).ready(function() {
var detik = 3;
var menit = 5;
var jam =0;
function hitung() {
setTimeout(hitung,1000);
$('#tampilkan').html( ' sisa waktu ' + jam + ' jam ' + menit + ' menit ' + detik + ' detik ');
detik --;
if(detik < 0) {
detik = 59;
menit --;
if(menit < 0) {
menit = 59;
jam --;
if(jam < 0) {
jam = 0;
menit = 0;
detik = 0;
}
}
}
}
hitung();
});