<?php header('Content-Type: charset=Shift_JIS'); 
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=Shift-JIS">
<!--
	<GAME-STYLE>
		"MOUSE=OFF",
		"SCROLL=OFF",
		"TITLE=OFF",
		"BACK=OFF",
		"FORWARD=OFF",
		"CANCEL=OFF",
		"RELOAD=OFF",
		"CHOICE_MV=OFF",
		"LINK_U=OFF",
		"FRONT_LABEL=ON:1",
	</GAME-STYLE>
-->
<body background=PNG/BG.PNG text=white link=white vlink=white bgcolor=black>

<basefont size=2>
<B>


<img src=PNG/LOGO1.PNG width=240 height=50><img src=PNG/LOGO2.PNG width=240 height=50><br>

<table width=480 height=201 cellspacing=2 border=0>
<tr>

	<td width=15>
	</td>

	<!--
	Seems GIF is not Supported!!
	-->
	<td width=210>
	<table width=210 cellspacing=0 cellpadding=0>
		<form action="DL_MENU.PHP" method=get><tr><td>
		 <input type=image src="PNG/DOWNLOAD.png"    name=submit width=210 height=50 alt="Quest">
		 <input type=hidden name=pg_no value=1>
		</td></tr></form>
		<form action="DB_INFO.PHP" method=get><tr><td>
		 <input type=image src="PNG/INFORMATION.png" name=submit width=210 height=50 alt="Information"></a>
		 <input type=hidden name=pg_no value=1>
		</td></tr></form>
		<!--
		<img src=PNG/y20070222.png width=200 height=96><BR>
		-->
	</table>
	</td>

	<td width=244>
	<table width=244 bgcolor=black height=187 border=2 bordercolor=#1C64FE cellspacing=0>
		<tr>
			<td valign=top>
				<B>
				<center>
				<font color=orange>■お知らせ■</font><br>
				</center>
<BR>
イベントクエストの<BR>
ダウンロードサービスは、<BR>
２０１４年９月３０日をもって<BR>
終了いたしました。<BR>
<BR>
長らくのご愛顧<BR>
誠にありがとうございました。<BR>
<BR>
				</B>
			</td>
		</tr>
	</table>
	</td>

	<td width=3>
	</td>

</tr>
</table>


<img src=PNG/B_START.PNG width=17 height=17>:オンラインの終了


<!--adjust--><table cellspacing=0 height=4><tr><td></table>


<!--previously load other png-->
<br><br><br><br><br><br><br>
<img src=PNG/B_X.PNG>
<img src=PNG/B_REC.PNG>
<img src=PNG/B_TRI.PNG>
<img src=PNG/BOARD.PNG>
<img src=PNG/T_RED.PNG>
<img src=PNG/T_GRN.PNG>
<BR>
</body>
</html>