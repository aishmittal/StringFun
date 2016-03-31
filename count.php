<?php
			if(isset($_POST['input']))
			{
				$string=trim($_POST['input']);
				$string = preg_replace('/\s+/', '', $string);
				$total=0;
				if(!empty($string))
					{
						echo "<table class='table table-bordered table-hover w3-card-2' style='width:50%;'>";
						echo "<tr><th> Letter </th> <th> Count </th>";
					$array = count_chars($string, 1);
					foreach ($array as $key => $value)
						{
						$char = chr($key);
						echo "<tr> <td>",$char,"</td> <td>",$value,"</td></tr>";
						$total+=$value;
						}
						echo "<tr class='light-blue-d1'><td> Total </td> <td>",$total,"</td></tr>";
						echo "</table>";
					}
			}
		?>