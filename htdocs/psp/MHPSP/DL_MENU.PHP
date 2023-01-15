<?php header('Content-Type: charset=Shift_JIS'); 
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=Shift-JIS">
<!--
<GAME-STYLE>
	"MOUSE=OFF",
	"SCROLL=OFF",
	"TITLE=OFF",
	"BACK=ON:DL_TOP.PHP",
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


<?php
	$max_page = 19;
	if (isset($_GET['pg_no'])) {
		//echo $_GET['pg_no'];
	    $pg_no = $_GET['pg_no'];
	} else {
		//echo 'NONO';
	    $pg_no = 1;
	}
	if(!is_numeric($pg_no)){
		$pg_no = 1;
	}
	$pg_prev = $pg_no - 1;
	$pg_next = $pg_no + 1;
	if($pg_prev < 1)
		$pg_prev = $max_page;
	if($pg_next > $max_page)
		$pg_next = 1;
	$quest_location = 'QUEST/m600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT) .'.mib';
?>
<img src=PNG/LOGO1.PNG width=240 height=50><img src=PNG/LOGO2.PNG width=240 height=50><br>

<table width=480 height=201 cellspacing=2 border=0>
<tr>

	<td width=15>
	</td>
	<!--Seems GIF is not Supported!!-->
	<td width=210>
	<table width=210 cellspacing=0 cellpadding=0>
<td>
	<?php
	echo 'Download ' . 'm600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT);
	if(file_exists('TEXT/'. 'm600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT) .'/NAME.txt')){
		$title = file_get_contents('TEXT/'. 'm600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT) .'/NAME.txt');
	}else{
		$title = 'NO TITLE';
	}
	?>
	<p><a href="<?= $quest_location ?>" download><font color=orange><?=$title?></font></a></p>
	<a href="DL_MENU.PHP?pg_no=<?= $pg_prev ?>"><font color=green>PREV</font></a>
	<a href="DL_MENU.PHP?pg_no=<?= $pg_next ?>"><font color=green>NEXT</font></a>
</td>
	</table>
	</td>
	<td width=244>
	<table width=244 bgcolor=black height=187 border=2 bordercolor=#1C64FE cellspacing=0>
		<tr>
			<td valign=top>
				<B>
				<center>
				<font color=red>■イベントクエスト■</font><br>
				</center>
				<?php
					if(file_exists('TEXT/'. 'm600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT) .'/NAME.txt')){
						echo '<font color=orange>';
						include	'TEXT/'. 'm600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT) .'/NAME.txt';
						echo '</font><br>';
					}else{
							echo '<font color=orange>';
							echo 'NO TITLE';
							echo '</font><br>';
					}
					if(file_exists('TEXT/'. 'm600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT) .'/TEXT.txt'))
						include	'TEXT/'. 'm600' . str_pad($pg_no, 2 , "0", STR_PAD_LEFT) .'/TEXT.txt';
					else{
						echo 'NO TITLE';
					}
				?>
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


</body>
</html>