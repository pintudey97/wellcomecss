<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MP3 Player || Product of wellcomecss.com</title>
<style>
.wrapper {
	width: 50%;
	height: auto;
	margin: 0 auto;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	padding-top: 100px;
}
body {
	background-color: #212122;
	color: #fff;
}
a {
	color: #fff;
	text-decoration: none;
}
#player {
	width: 100%;
	display: block;
	margin: 30px auto 50px auto;
}
.upload {
	width: 140px;
	height: 50px;
	overflow: hidden;
	position: relative;
	cursor: pointer;
	text-align: center;
	line-height: 50px;
	background-color: #f5af02;
	color: #fff;
}
.upload #file {
	opacity: 0;
	position: absolute;
	top: 0;
	width: 140px;
	height: 50px;
	cursor: pointer;
}
br {
	display: none;
}
h1 {
	margin-bottom: 0px;
}
table {
	width: 100%;
	height: auto;
	margin-top: 25px;
}
table tr td {
	padding: 5px;
}
table tr {
	transition: .3s;
	cursor: pointer;
}
table tr:hover {
	background-color: #2c2c2d;
}
table tr td b:hover {
	color: #f00;
}
audio::-webkit-media-controls-panel {
background:#1b1b1b;
}
@media(max-width:500px) {
.wrapper {
	width: 95%;
	padding-top: 30px;
}
}
</style>
</head>
<body>
<div class="wrapper">
  <h1>MP3 Player</h1>
  <p>Product of <a href="http://www.wellcomecss.com/" target="_blank">wellcomecss.com</a> || Created By Pintu Dey</p>
  <audio controls id="player" autoplay></audio>
  <br>
  <div class="upload">
    <input type="file" id="file" onchange="document.getElementById('player').src=window.URL.createObjectURL(this.files[0])" multiple>
    Upload Song </div>
  <table border="0" cellpadding="0" cellspacing="0">
  </table>
</div>
<script src="<?php echo base_url() ?>assets/js/min.js"></script>
<script>
$(document).ready(function() {
    $("#file").change(function() {
        var files = document.getElementById("file").files;
        var i = 0;
        for (i; i < files.length; i++) {
            var filesize = files[i].size;
            var kb = filesize / 1024;
            var mb = kb / 1024;
            var filetiger = $("#player").attr("src");
            $("table").append("<tr><td id='aa' datasrc=" + filetiger + ">" + files[i].name + "</td>" + "<td>" + mb.toFixed(2) + " M.B</td>" + "<td>" + files[i].type + "</td>" + "<td align='center'><b>&times;</b></td>" + "</tr>");
        }
        $("table tr td b").click(function() {
            $(this).parent().parent().fadeOut();
        });
        $("table tr td#aa").each(function() {
            $("table tr td#aa").click(function() {
                var lidata = $(this).attr("datasrc");
                $("#player").attr("src", lidata);
            });
        });
    });
});
</script>
</body>
</html>