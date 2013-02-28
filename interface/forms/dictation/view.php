<!-- Forms generated from formsWiz -->
<?php
include_once("../../globals.php");
$returnurl = $GLOBALS['concurrent_layout'] ? 'encounter_top.php' : 'patient_encounter.php';
?>
<html><head>
<?php html_header_show();?>
<link rel="stylesheet" href="<?php echo $css_header;?>" type="text/css">
</head>
<body class="body_top">
<?php
include_once("$srcdir/api.inc");
$obj = formFetch("form_dictation", $_GET["id"]);
?>
<form method=post action="<?php echo $rootdir?>/forms/dictation/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><?php xl('Speech Dictation','e'); ?></span><Br><br>
<span class=text><?php xl('Dictation: ','e'); ?></span><br><textarea cols=80 rows=24 wrap=virtual name="dictation" ><?php echo stripslashes($obj{"dictation"});?></textarea><br>
<span class=text><?php xl('Additional Notes: ','e'); ?></span><br><textarea cols=80 rows=8 wrap=virtual name="additional_notes" ><?php echo stripslashes($obj{"additional_notes"});?></textarea><br>
<br>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[<?php xl('Save','e'); ?>]</a>
<br>
<a href="<?php echo "$rootdir/patient_file/encounter/$returnurl";?>" class="link"
 onclick="top.restoreSession()">[<?php xl('Don\'t Save Changes','e'); ?>]</a>
</form>
<?php
formFooter();
?>
