<!DOCTYPE html>
 <html> 
	<body> 
		<table border="1px" cellspacing="0px" width="270px">
			<?php
			for($r=1;$r<=8;$r++)
			{
				echo "<tr>";
				for($column=1;$column<=8;$column++)
				{
					$t=$r+$column;
					if($t%2==0)
					{
						echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
					}
					else
					{
						echo "<td height=30px width=30px bgcolor=#000000></td>";
					}
				}
				echo "</tr>";
			}
			?>
		</table>
	</body>
</html>