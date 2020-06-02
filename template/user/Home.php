	
<section class="right">
	<h2>User Pannels</h2>
	<div class="box">
	<?php
			echo '<table>';
			echo '<thead>';

			echo '<tr>';
			echo '<th>Book Name</th>';
			echo '<th>Author</th>';
			echo '<th>Quantity</th>';
			
			echo '<th style="width: 10%">&nbsp;</th>';
			echo '<th style="width: 10%">&nbsp;</th>';

			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';


			foreach ($list as $books) {
				echo '<tr>';
				echo '<td>' . $books['book_name'] . '</td>';
				echo '<td>' . $books['author_name'] . '</td>';
				echo '<td>' . $books['quantity'] . '</td>';
				echo '</tr>';
			}
				echo '</tbody>';
			
			echo '</table>';

?>
</div>
</section>

	<footer>
		&copy; Book Inventory <?php echo Date("Y");?>
	</footer>
</body>
</html>

