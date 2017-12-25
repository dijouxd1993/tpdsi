<?php
$bg_color;
$err_text;
$resume = $_REQUEST['oneLiner'];
$resume = substr($resume,0,40);
switch ($_REQUEST['priority']){
    case '5':
        $bg_color="tab_bg_red";
		$err_text="Très urgente";
		
        break;
    case '4':
        $bg_color="tab_bg_orange";
		$err_text="Urgente";
        break;
    case '3':
        $bg_color="tab_bg_yellow";
		$err_text="Moyenne";
        break;
    case '2':
        $bg_color="tab_bg_blue";
		$err_text="Faible";
        break;        
    case '1':
        $bg_color="tab_bg_green";
		$err_text="Trés faible";
        break;
}
?>
<html lang="fr" >
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <link rel="stylesheet" href="../styles/styles.css" type="text/css" media="screen">
  <title>Saisie Anomalie</title>
  <style>
	.tab_bg_green {
	background-color: green;
	}
	.tab_bg_blue {
	background-color: blue;
	}

  </style>
</head>
<body>
<span style="font-style: italic;">(Demande
envoy&eacute;e par l'adresse IP&nbsp; <?php echo $_SERVER['REMOTE_ADDR'] ?>)</span><br />

<table id="buglist" border="1" cellspacing="1">

  <tbody>
    <tr>
      <th>Application</th>
      <th>Priorit&eacute;</th>

      <th>Type</th>

      <th>Date</th>

      <th>R&eacute;sum&eacute;</th>

      <th>Description</th>

    </tr>

    <tr class="<?php echo $bg_color ?>">

      <td class="center"><?php echo $_REQUEST['applicationOther']?></td>

      <td class="center"><?php echo $err_text ?></td>

      <td class="center"><?php echo $_REQUEST['type']?></td>

      <td class="center">01/01/0001</td>

      <td class="left"><?php echo $resume ?></td>

      <td class="left"><?php echo $_REQUEST['contents'] ?></td>

    </tr>

  </tbody>
</table>
<body>
</html>