<?



function disp_begin($dbh,$idcookie,$myurl,$myprivl,$cssloc,$jsfile)
{

if (!$myprivl == 2 or !$myprivl == 3)
 {$myprivl = 1;}

	if (isset($_GET['searchname'])) {
	    $searchname = $_GET['searchname'];
      $title = "[$searchname]'s Plan";
  } else {
      $title = "Plans 2.5";
  }  
?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOARCHIVE">
<title><?php echo $title ?></title>  
<link rel=stylesheet
href="<?=$cssloc?>">
<?
if ( !is_null( $jsfile ) )
    echo "<script language=\"javascript\" type=\"text/javascript\" src=\"$jsfile\"></script>";
?>

<?php
include('/var/www/html/april-fools.php');
?> 


</head>
<body>
<div id="april">

<table width="100%" cellspacing="0" cellpadding="0"
class="main">
<tr>
<td valign="top" align="left" class="left" width="12%">
<table class="mainpanel"><tr><td>
<p class="logo">&nbsp;</p>
<Form action="read.php" method="get">
<input name="searchname" type="text"><br>
<input type="hidden" name="myprivl" value="<? echo $myprivl; ?>">
<input type="submit" value="Read"></form>

<table class="lowerpanel"><tr>
<td><p class="imagelev1">&nbsp;</p></td><td></td><td></td>
<td><a href="edit.php?myprivl=<? echo $myprivl;?>" class="main">edit 
plan</a></td>
</tr>

<tr>
<td><p class="imagelev1">&nbsp;</p></td><td></td><td></td>
<td><a href="search.php?myprivl=<? echo $myprivl;?>"
class="main">search plans</a></td>
</tr>

<tr>
<td><p class="imagelev1">&nbsp;</p></td><td></td><td></td>
<td><a href="customize.php?myprivl=<? echo $myprivl;?>"
class="main">preferences</a></td>
</tr>
<?


$buf = '<td><p class="imagelev1">&nbsp;</p></td><td></td><td></td>';

show_opt_links($idcookie, $buf);


?>


<tr>
<td><p class="imagelev1">&nbsp;</p></td><td></td><td></td>
<td><a href="index.php?logout=1" class="main">log out</a></td>
</tr>

<tr><td><br></td><td><br></td><td><br></td><td><br></td></tr>

<tr><td><p class="imagelev1">&nbsp;</p></td><td></td><td></td>
<td><p class="main">auto read list</p></td>
</tr>

<?
autoread_list ($myurl, $idcookie, $myprivl);
/*
//get autoread list
if (ereg("index.php", $myurl)) // if has ? but not privl
{$myurl = ereg_replace("index.php", "blank.php", $myurl);}


if (!($myprivl == 1))
{priority_link($myurl, 1);
if (!($myprivl == 2))
{priority_link($myurl, 2);}
}

echo "<tr><td></td><td><p
class=\"imagelev2\">&nbsp;</p></td><td></td><td><p 
class=\"lev2\">level " . $myprivl . "</p></td></tr>";


$privarray = mysql_query("Select autofinger.interest,accounts.username
From autofinger, accounts where owner = '$idcookie' and priority =
'$myprivl' and updated = '1' and autofinger.interest=accounts.userid");

    while($new_row = mysql_fetch_row($privarray)) {
      $autoreadlist[] = $new_row;
    }

$o=0;
while ($autoreadlist[$o][0])
{
echo "<tr><td></td><td></td><td><p class=\"imagelev3\">&nbsp;</p></td>";
echo "<td><a href=\"read.php?searchname=" .
$autoreadlist[$o][1] . "\" class=\"lev3\">" .
$autoreadlist[$o][1] . "</a></td></tr>\n";

 $o++;}

if (!($myprivl == 3))
 {if (!($myprivl == 2))
 {priority_link($myurl, 2);}
 priority_link($myurl, 3);
}
*/

?>



</table>
</td></tr></table>
</td>
<td valign="top">

<br />

<table>

<tr><td>

<?

} 


function priority_link($myurl, $notprivl)
{

if (ereg("myprivl", $myurl))
{$myurlx = ereg_replace("myprivl=[0-9]{0,1}", "myprivl=" . $notprivl,
$myurl);
}//if already has privl
else { //if doesn't already have privl
if (ereg("\?", $myurl)) // if has ? but not privl
{$myurlx = $myurl . "&myprivl=" . $notprivl;}
else  //must add on extra info
{$myurlx= $myurl . "?myprivl=" . $notprivl;}
}//else, if doesn't already have privl
 
echo "<tr><td></td><td><p class=\"imagelev2\">&nbsp;</p></td><td></td>";  
echo "<td><a href=\"http://" . $myurlx . "\" class=\"lev2\">level " .
$notprivl .
"</a></td></tr>";
}//function priority_link



function mdisp_end($dbh,$idcookie,$myurl,$myprivl)
{echo "</td></tr></table></td></tr></table>";
footer();
?>
</body>



</html>

<?php
}

?>
