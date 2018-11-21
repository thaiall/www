<html><head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head><body>
<?php
$ar = file("index.html");
// header
echo "<textarea rows=5 cols=80 wrap=off>";
for($i=0;$i<26;$i++) {
$ar[$i] = str_replace("web,2.0",$_GET["keywords"],$ar[$i]);
$ar[$i] = str_replace("เว็บสองจุดศูนย์ (Web 2.0)",$_GET["title"],$ar[$i]);
$ar[$i] = str_replace("เว็บ 2.0 คือ รูปแบบของเว็บไซต์รุ่นที่สอง ที่เน้นการนำเข้าเนื้อหาจากผู้เขียนที่หลากหลาย นำไปแสดงในเว็บไซต์ได้มากมาย เกิดเครือข่ายสังคม ด้วยรูปแบบที่ดูง่าย และน่าตื่นตาตื่นใจ",$_GET["description"],$ar[$i]);
$ar[$i] = str_replace("เว็บสองจุดศูนย์",$_GET["gkey"],$ar[$i]);
echo $ar[$i];
}
echo "</textarea>";
?>
<div style="width:100%">Top header</div>
<div style="width:100%">
<textarea rows=5 cols=80 wrap=off>
<table cellspacing="0" cellpadding="0" style="width:760px;background-color:white;margin-left:auto;margin-right:auto;">
<tr><td style="width:15px" rowspan="2" valign="top"><img alt="ขอบซ้าย" src="w2el.gif" /></td><td colspan="2" valign="top"><img alt="ขอบบน" src="w2et.gif" /></td></tr><tr><td style="width:745px" valign="top">
<div style="font-size:30pt">Web 2.0</div>
</td></tr></table>
</textarea>
</div>
<hr/>
<div style="width:100%">Block1</div>
<div style="width:100%">
<textarea rows=5 cols=80 wrap=off>
<!-- block 1 -->
<table cellspacing="0" cellpadding="0" style="width:760px;background-color:white;margin-left:auto;margin-right:auto;">
<tr style="height:5px;background-color:#3B5998;"><td> </td><td> </td></tr><tr style="height:2px;background-color:#888888;"><td> </td><td> </td></tr>
<tr><td>
body
</td></tr>
<tr style="height:2px;background-color:#888888;"><td> </td><td> </td></tr>
<tr style="height:5px;background-color:#3B5998;"><td> </td><td> </td></tr>
</table>
</textarea>
</div>
<hr/>
<div style="width:100%">Footer</div>
<div style="width:100%">
<textarea rows=5 cols=80 wrap=off>
<!-- footer -->
<table class="m_still" style="background-color:#dddddd;"><tr><td>
<script>(function(e){var t="DIV_YNG_"+e+"_"+parseInt(Math.random()*1e3); document.write('<div id="'+t+'" class="yengo-block yengo-block-'+e+'"></div>'); if("undefined"===typeof loaded_blocks_yengo){loaded_blocks_yengo=[]; function n(){var e=loaded_blocks_yengo.shift(); var t=e.adp_id; var r=e.div; var i=document.createElement("script"); i.type="text/javascript"; i.async=true; i.charset="windows-1251"; i.src="//code.yengo.com/data/"+t+".js?async=1&div="+r+"&t="+Math.random(); var s=document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]; s.appendChild(i); var o=setInterval(function(){if(document.getElementById(r).innerHTML&&loaded_blocks_yengo.length){n(); clearInterval(o)}},50)} setTimeout(n)}loaded_blocks_yengo.push({adp_id:e,div:t})})(144983)</script>
<a href="http://www.thaiall.com/me"><img src="rspsocial.gif" width="100%" /></a>
<script type="text/javascript">
loadTime = new Date().getTime() - clockStart;
document.write("<div style='text-align:center;'><b>Load Time</b> = " + loadTime + " milliseconds" + " <b>Height</b> = "+document.body.clientHeight+" <b>Width</b> = "+document.body.clientWidth+"</div>");
</script>
</td></tr></table>
<table class="m_hidden_footer" style="background-color:black;margin-left:auto;margin-right:auto;">
<tr style="height:20px;background-image:url(rspbar.png);color:white;text-align:center;font-family:TLWGTypewriter;font-size:16px;"><td>
"<span style="font-weight:bold;">Imagination is more important than knowledge</span>" - Albert Einstein
</td></tr></table>
<table style="margin-left:auto;margin-right:auto;" class="m_still_footer"><tr>
<td style="width:144px;">
<table>
<tr><td><a href="http://www.thaiall.com" class="foot_text"><span style="color:yellow;font-weight:bold;">Home</a></span></td></tr>
<tr><td><a href="http://www.thaiabc.com" class="foot_text">Thaiabc.com</a></td></tr>
<tr><td><a href="http://www.thainame.net" class="foot_text">Thainame.net</a></td></tr>
<tr><td><a href="http://www.lampang.net" class="foot_text">Lampang.net</a></td></tr> 
<tr><td><a href="http://www.nation.ac.th" class="foot_text">Nation University</a></td></tr>
</table>
</td><td style="width:1px;background-color:#444444;margin:0px 0px 0px 0px;padding:0px;border-spacing:0px;"></td>
<td  class="m_hidden_footer" style="width:144px;">
<table>
<tr><td><a href="http://www.thaiall.com/php/indexo.html" class="foot_text">PHP</a></td></tr>
<tr><td><a href="http://www.thaiall.com/mysql/indexo.html" class="foot_text">MySQL</a></td></tr>
<tr><td><a href="http://www.thaiall.com/html/indexo.html" class="foot_text">HTML</a></td></tr>
<tr><td><a href="http://www.thaiall.com/class/indexo.html" class="foot_text">JAVA</a></td></tr>
<tr><td><a href="http://www.thaiall.com/article/teachpro.htm" class="foot_text">Teach Pro.</a></td></tr>
</table>
</td><td style="width:1px;background-color:#444444" class="m_hidden_footer"></td>
<td  class="m_hidden_footer" style="width:144px;">
<table>
<tr><td><a href="http://www.thaiall.com/quiz/indexo.html" class="foot_text">Online quiz</a></td></tr>
<tr><td><a href="http://www.thaiall.com/computingscience/" class="foot_text">Computing Sci.</a></td></tr>
<tr><td><a href="http://www.thaiall.com/research/indexo.html" class="foot_text">Research</a></td></tr>
<tr><td><a href="http://www.thaiall.com/flowchart/indexo.html" class="foot_text">Flowchart</a></td></tr>
<tr><td><a href="http://www.thaiall.com/spss/" class="foot_text">SPSS</a></td></tr>
</table>
</td><td style="width:1px;background-color:#444444" class="m_hidden_footer"></td>
<td  class="m_hidden_footer" style="width:144px;">
<table>
<tr><td><a href="http://www.thaiall.com/blog" class="foot_text">Blog : IT & Media</a></td></tr>
<tr><td><a href="http://www.thaiall.com/blogacla" class="foot_text" title="acronym">Blog : ACLA</a></td></tr>
<tr><td><a href="http://www.thaiall.com/km/indexo.html" class="foot_text">KM</a></td></tr>
<tr><td><a href="http://www.thaiall.com/datastructure" class="foot_text">Datastructure</a></td></tr>
<tr><td><a href="http://www.thaiall.com/isinthai/index.php" class="foot_text">Linux</a></td></tr>
</table>
</td><td style="width:1px;background-color:#444444" class="m_hidden_footer"></td>
<td  style="width:144px;">
<table>
<tr><td><a href="http://www.thaiall.com/me" class="foot_text">About us</a></td></tr>
<tr><td><a href="http://www.thaiall.com/me/dream.htm" class="foot_text">Objectives</a></td></tr>
<tr><td><a href="https://github.com/thaiall/" class="foot_text">Github.com</a></td></tr>
<tr><td><a href="http://www.facebook.com/thaiall" class="foot_text">Facebook.com</a></td></tr>
<tr><td><a href="http://www.thaiall.com/sponsor/" class="foot_text"><span style="color:yellow;font-weight:bold;">Sponsor</span></a></td></tr>
</table>
</td></tr></table>
<div style="margin-top:auto;margin-left:auto;text-align:center;">&nbsp;
<script type="text/javascript">
//<![CDATA[
page="web2"
url=document.location.href.substr(7,11)
if(url == "www.thaiall") document.write("<script language=javascript1.1 src=http://hits1.truehits.net/data/c0001941.js><" + "/script>")
if(url == "www.thaiabc") document.write("<script language=javascript1.1 src=http://hits1.truehits.net/data/h0014200.js><" + "/script>")
//]]>
</script></div>
</body></html>
</textarea>
</div>
</body></html>