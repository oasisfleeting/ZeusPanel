<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	</HEAD>
	
	<BODY>
		<DIV ID="IPBAR">123.123.123 Server IP</DIV>
		<DIV ID="LOGOUT"><img src="logOut.png" /></DIV>
		<DIV ID="ZEUSPANEL_LEFT">
			<DIV CLASS="sideItem"><a href='javascript:document.getElementById("mainpanel").src="../global/pma"'>PhpMyAdmin</a></DIV>
			<DIV CLASS="sideItem"><a href='javascript:document.getElementById("mainpanel").src="mysql.php"'>MySQL Databases</a></DIV>
		</DIV>
		<DIV ID="CONTENT"><iframe id="mainpanel" src=""></iframe></DIV>
	</BODY>
</HTML>