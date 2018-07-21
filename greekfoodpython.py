$a = 1;
	echo '<table><tr>';
	while($row = mysql_fetch_assoc($image)){    
	if($a <= 3){ //number of cells in row    
	echo '<td>'.$row['image'].'</td>';  
 	$a++;
	}    
	else {    
	echo '</tr>\n<tr>'.'<td>'.$row['image'].'</td>';
$a = 1; 
    }
}
echo '</tr></table>';