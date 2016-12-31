<?php
// For make the connections to the database
require('inc/conn.php');
?><html lang="en-US" style="height: 100%;">
<head>
<title>Loading Values with AJAX and PHP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="">
<meta name="Description" content="">
<script src="js/ajax.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>

    <h3><strong style="text-decoration:underline;">Loading Values with AJAX and PHP</strong></h3>

    <br>
    
    <span><img id="lgif_id" name="lgif_id" class="" src="img/dot.png" width="16" /></span> &nbsp; 
    
    <?php $lopt = 'list_airports'; ?>
    <a href="#" title="click to select value"
       onclick="
            // populate the global select box using AJAX
            gen_ajax_opt('<?php echo $lopt; ?>');
        "
    >
        <span class="fw_b">Load Airports</span>
    </a>
    <br><br>
    

    <table style="width:100%">
        <thead class="fw_b">
            <tr>
                <td width="5%">SN</td>
                <td width="10%">CODE</td>
                <td width="10%">IATA</td>
                <td>Airport Name</td>
                <td>City</td>
                <td>Country</td>
            </tr>
        </thead>
        <tbody id="g_res_box" name="g_res_box">
        </tbody>
    </table>
    <br><br>
    
    
    <br><br><br>
    
    
    <hr>
    &copy; BlinkWIki
    
</body>
</html>