<!DOCTYPE html>
<html>

<head>
    <title>MultiCubeUK | Vanilla Creative</title>
    <link rel="stylesheet" type="text/css" href="../Menu/MultiCubeUKMenuLayout.css">
    <link rel="stylesheet" type="text/css" href="../Footer/MultiCubeUKFooterLayout.css">
    <link rel="stylesheet" type="text/css" href="MultiCubeUKServersLayout.css">
    
</head>

<style>
</style>

<body>
<!-- Menu -->
<?php include("../Menu/MultiCubeUKMenu.php"); ?>

<!-- Big Logo -->
<div class="multicube-top"><img src="../root/BigLogo20161.png" alt="MulticubeUK Logo" /></div>

<!-- Flux Server Information -->
<div class="server">
    <div class="server-header">
        <h1><strong>Vanilla </strong>Creative</h1>
    </div>
    <div class="server-info">
        <p><span style="color: #ffffff;">If you feel like building the MultiCubeUK Vanilla Creative Server is the place to be! 
        Pick your blocks, get a nice spot and impress your friends with the most amazing builds!</span></p>
    </div>
</div>

<!-- Flux Server Status -->
<?php
require('../api/MulticraftAPI.php');
$api = new MulticraftAPI('http://multicraft.multicube.co/api.php ', 'Sander', 'e35cbba78574b71346b5');
$a = serialize($api->getServerStatus(23));
if ($a[77] == "f") {
    $serverOutput = "<strong>Server</strong> Offline";
} else if ($a[111] != '"') {
    $aa = $a[110].$a[111];
    $playerCount = $aa / 40 * 100;
    $serverOutput = $aa."/".$a[137].$a[138]." "."<strong>Players</strong> Online";
} else {
    $playerCount = $a[110] / 30 * 100;
    $serverOutput = $a[110]."/".$a[136].$a[137]." "."<strong>Players</strong> Online";
}?>
<div class="server">
    <div class="server-header">
        <h1><strong>Server </strong>Status</h1>
    </div>
    <div class="server-status">
        <p class="status-title">MultiCubeUK - Vanilla Creative</p>
        <span style="font-size:15px;color:#337ab7;">hub.multicube.co/creative.multicube.co</span>
        
        <div class="container">
            <br/>
            <div class="progress" style="width:83%;text-align:center;">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $playerCount; ?>%;">
                    <?php echo $serverOutput; ?>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Footer -->
<?php include("../Footer/MultiCubeUKFooter.php"); ?>
</body>

</html>