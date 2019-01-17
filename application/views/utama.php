<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WELCOME</title>
<!-- <script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script> -->
</head>

<link rel="stylesheet" href="<?=base_url() ?>assets/utama.css">

<body onLoad="waktu()">
  <div class="welcome"><center><h1>WELCOME</h1></center></div>
  <br>

    <!-- <center><div id="jam-digital">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div></center> -->
       <div class="welcome"><center><h2 id="pos">BDC Tour</h2></center></div>
    <div id="start">
    <a href="<?=base_url() ?>index.php/welcome/beranda">Let's Start </a>
    </div>

</body>
</html>
