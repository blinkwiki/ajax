<?php

    // get the connection
	require('conn.php');

	$result = '';
	
    // the list option action command
	$lopt = mysql_real_escape_string($_GET['lopt']);
    
		switch ($lopt)
        {
            case 'list_airports':

                {
                    
    // build the read query
    $sql = 'SELECT * FROM `tbl_airports` WHERE 1';

    // submit the query to generate rows
    $rs = mysql_query($sql, $conn) or die(mysql_error());

    // fetch the first row
    $row = mysql_fetch_assoc($rs);

    // calculate total rows
    $total_rows = mysql_num_rows($rs);

    // initialise the html result
    $html = '';

    for ($i=0; $i<$total_rows; $i++)
    {
        // append the row 
        $html .= '<tr valign="top">'
                .'<td>'.($i+1).'</td>'
                .'<td>'.$row['airport_code'].'</td>'
                .'<td>'.$row['airport_iata_code'].'</td>'
                .'<td>'.utf8_encode($row['airport_desc']).'</td>'
                .'<td>'.utf8_encode($row['airport_city']).'</td>'
                .'<td>'.$row['airport_notes'].'</td>'
            .'</tr>'
        ;

        // load the next row
        $row = mysql_fetch_assoc($rs);

    }
                    $result = $html;
                }
                break;
			default:
				$result = 'No resource was returned!';
		}
    
	// show the result
    echo $result;

?>
