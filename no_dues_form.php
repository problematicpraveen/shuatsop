<?php

include('configs/functions.inc.php');

validateAccss();

$capi = 'https://'.$_SERVER['HTTP_HOST'].'/api/getStudentInfo?pid='.$_GET['pid'];
$chad[] = 'User-Agent: VIORO UA 1.0';
$process = curl_init($capi); 
curl_setopt($process, CURLOPT_HTTPHEADER, $chad); 
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_ENCODING, '');
curl_setopt($process, CURLOPT_TIMEOUT, 10); 
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1); 
$crap = curl_exec($process); 
curl_close($process); 
$cyj = json_decode($crap, true);
if(!empty($cyj))
{
    if($cyj['status'] !== "success")
    {
        http_response_code(404);
        exit('No Dues Form Not Available !!');
    }
    $stud = $cyj['data'];
}
else
{
    http_response_code(404);
    exit('No Dues Form Not Available');
}

?>

<!DOCTYPE html>
<html>
<head>
<title>SHUATS : Students No Dues Form | Created By @ProblematicPraveen</title>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<div align="center">

<table border="0" width="74%" id="table1" style="border-collapse: collapse">
	<tr>
		<td width="14">&nbsp;</td>
		<td>
		
<table width="700"><tr><td>
<div class="Section1">
	<p class="MsoNormal" align="center" style="text-align: center; background: white">
	<font face="Arial">
	<b>
	<span lang="EN-GB" style="font-size:arial;
  color:black;letter-spacing:-.35pt">Sam 
	Higginbottom University of Agriculture, Technology and Sciences</span></b></font></p>
	<p class="MsoNormal" style="text-indent: -16.55pt; line-height: 13.45pt; margin-left: 215.5pt; margin-right: 155.5pt; margin-top: 0in; margin-bottom: .0001pt; background: white">
	<font face="Arial">
	<b>
	<span lang="EN-GB" style="font-size:arial;color:black;letter-spacing:.55pt">
	Allahabad-211007</span></b></font></p>
	<p class="MsoNormal" style="margin-left: 175.9pt; margin-right: 0in; margin-top: 15.1pt; margin-bottom: 14.15pt; background: white">
	<b>
	<span lang="EN-GB" style="color:black;letter-spacing:-.25pt">
	<font style="font-size: arial" face="Arial">NO DUES PROFORMA</font></span></b></p>
	<table border="0" width="100%" id="table6" style="border-collapse: collapse">
		<tr>
			<td width="520">
	<p class="MsoNormal" style="margin:0 0in; background: white">
	<font face="Arial">
	<span lang="EN-GB" style="font-size:arial">ID. No. &nbsp;:&nbsp; <b>   <?php print(strtoupper($stud['pid'])); ?> </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name &nbsp;:&nbsp;<b> <?php print(strtoupper($stud['name'])); ?> </b></span></font></p>
	<p class="MsoNormal" style="margin:0 0in; background: white">
	<font face="Arial">
	<span lang="EN-GB" style="font-size:arial">Father's Name &nbsp;:&nbsp;  <?php print(strtoupper($stud['father_name'])); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></font></p>
	<p class="MsoNormal" style="margin:0 0in; background: white">
	<font face="Arial">
	<span lang="EN-GB" style="font-size:arial">Programme <b><?php print($stud['programme']); ?></b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></font></p>
			<p class="MsoNormal" style="margin:0 0in; background: white">
	<font face="Arial">
	<span lang="EN-GB" style="font-size:arial">Semester . . . . . . 
	. . . . . . . . . . . . . </span></font></p>
			<p class="MsoNormal" style="margin:0 0in; background: white">
	<font face="Arial">
	<span lang="EN-GB" style="font-size:arial">Day Scholar/ Hosteller. . . . . . 
	. . . . . . . . . . . . . <br>
&nbsp;</span></font></p>
			</td>
			<td>
			<p align="center">
			

<font face="Arial" color="#000000" size="4">
			
				<img src="<?php print($stud['image']); ?>" width="65" height="87" align="left" ></font></td>
		</tr>
	</table>
	<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="673" style="width: 504.75pt; border-collapse: collapse; margin-left: 4.65pt" id="table1" height="233">
		<tr style="height: 38.05pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 40px; border: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white" align="center">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<b>
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.35pt">
			SI. No.</span></b></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 40px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white" align="center">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<b><span lang="EN-GB" style="font-size: arial; color: black">
			Institute/College/School/Dept./Office/Store etc.</span></b></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 40px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white" align="center">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<b>
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.2pt">
			Dues/ No Dues</span></b></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 40px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white" align="center">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<b>
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: .05pt">
			Signature</span></b></font></td>
		</tr>
		<tr style="height: 32.9pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 22px; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black">1</span></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 22px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.4pt">
			HoD (For PG Students Only)</span></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 22px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 22px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
		</tr>
		<tr style="height: 32.9pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 27px; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black">2</span></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 27px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.35pt">
			Dean (For UG Students Only)</span></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 27px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 27px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
		</tr>
		<tr style="height: 26.15pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 28px; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black">3</span></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 28px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.35pt">
			Central Library</span></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 28px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 28px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
		</tr>
		<tr style="height: 28.85pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 29px; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black">4</span></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 29px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.35pt">
			Departmental Library</span></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 29px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 29px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
		</tr>
		<tr style="height: 32.0pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 32px; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black">5</span></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 32px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.35pt">
			Men's / Women's Hostel*</span></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 32px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 32px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
		</tr>
		<tr style="height: 31.1pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 28px; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black">6</span></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 28px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.55pt">
			Mess*</span></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 28px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 28px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
		</tr>
		<tr style="height: 32.9pt">
			<td width="71" valign="top" style="width: 53.45pt; height: 27px; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" align="center" style="text-align: center; text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black">7</span></font></td>
			<td width="404" valign="top" style="width: 302.8pt; height: 27px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial">
			<span lang="EN-GB" style="font-size: arial; color: black; letter-spacing: -.4pt">
			Cooperative Store</span></font></td>
			<td width="96" valign="top" style="width: 1.0in; height: 27px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
			<td width="102" valign="top" style="width: 76.5pt; height: 27px; border-left: medium none; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0in; padding-bottom: 0in; background: white">
			<p class="MsoNormal" style="text-autospace: ideograph-numeric ideograph-other">
			<font face="Arial"><span style="font-size: arial" lang="EN-GB">&nbsp;</span></font></td>
		</tr>
	</table>
	</div>
<div class="Section3">
	<table border="0" width="97%" id="table5" style="border-collapse: collapse">
		<tr>
			<td><font face="Arial"><span style="font-size: arial">* Day scholars need not to take clearance from Hostel and Mess<br>
			<br>
			To,<br>
			Dean / Head of the Department<br>
			SHUATS.<br>
			Certified that I have obtained &quot;No Dues&quot; from above mentioned 
			Institute/College/School Department/ Office/ Store etc.<br>
&nbsp;</span></font></td>
		</tr>
		<tr>
			<td><font face="Arial"><span style="font-size: arial" lang="EN-GB">Date: 
			</span><b>
	<span lang="EN-GB" style="font-size:arial">. . . . . . . . . . . . . . . . 
	. . . .&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b>
			<span style="font-size: arial" lang="EN-GB">Signature of student:&nbsp; 
			</span><b>
	<span lang="EN-GB" style="font-size:arial">. . . . . . . . . . . . . . . . 
	. . . .</span></b></font></td>
		</tr>
		<tr>
			<td><font face="Arial"><u>
	<span lang="EN-GB" style="font-size:arial;color:black;letter-spacing:
-.4pt"><br>
			For Office Use Only</span></u></font></td>
		</tr>
	</table>

	<table border="0" width="97%" id="table4" style="border-collapse: collapse">
		<tr>
			<td width="214">
			<font face="Arial">
			<span lang="EN-GB" style="font-size:arial;color:black;letter-spacing:-.35pt">
			Admit Card Issued</span></font></td>
			<td width="166">
			<p class="MsoNormal" style="margin-top: 7.7pt; background: white">
			<font face="Arial">
			<span lang="EN-GB" style="font-size:arial;color:black;letter-spacing:-.35pt">&nbsp;
			</span></font><span lang="EN-GB" style="font-size: 12.0pt"><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
 coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
 filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="Picture_x0020_1" o:spid="_x0000_s1026" type="#_x0000_t75"
 style='width:37.5pt;height:30pt;visibility:visible'>
 <v:imagedata src="NoDueform_files/image001.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=50 height=40
src="https://cdn.statically.io/img/i.postimg.cc/nhzP0pSQ/image002.jpg" v:shapes="Picture_x0020_1"><![endif]></span></p>
			</td>
			<td width="184">
			<font face="Arial">
			<span lang="EN-GB" style="font-size:arial;color:black;letter-spacing:-.5pt">
			Not Issued</span></font></td>
			<td><span lang="EN-GB" style="font-size: 12.0pt"><!--[if gte vml 1]><v:shape
 id="_x0000_s1025" type="#_x0000_t75" style='width:37.5pt;height:30pt;
 visibility:visible'>
 <v:imagedata src="NoDueform_files/image001.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=50 height=40
src="https://cdn.statically.io/img/i.postimg.cc/nhzP0pSQ/image002.jpg" v:shapes="_x0000_s1025"><![endif]></span></td>
		</tr>
		<tr>
			<td width="214" height="27">
			<font face="Arial">
			<span lang="EN-GB" style="font-size:arial;color:black;
letter-spacing:-.35pt">Signature of verifying clerk </span></font></td>
			<td width="166" height="27">&nbsp;</td>
			<td width="184" height="27"><font face="Arial"><span style="font-size: arial">Office Assistant</span></font></td>
			<td height="27">&nbsp;</td>
		</tr>
		<tr>
			<td width="214">
			<font face="Arial">
			<span lang="EN-GB" style="font-size:arial;color:black;letter-spacing:-.6pt">
			Date:&nbsp; </span><b><span lang="EN-GB" style="font-size:arial">. . . . 
			. . . . . . . . . . .. . </span></b></font></td>
			<td width="166">&nbsp;</td>
			<td width="184"><font face="Arial"><span style="font-size: arial">Dean / HoD Office</span></font></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</div>
</td></tr></table>		
		
		
		</td>
		<td width="4">&nbsp;</td>
	</tr>
	<tr>
		<td width="14">&nbsp;</td>
		<td>
		<p align="center">
			<input type="button" name="btnPrint" value=" Print Now " onclick="doprint()"></td>
		<td width="4">&nbsp;</td>
	</tr>
	</table>

</div>
<script src="/jquery.min.js"></script>
<script>
    function doprint()
    {
        window.setTimeout(function(){
            window.print();
        }, 1500);
    }
</script>
</body>

</html>