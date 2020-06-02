<style>
table td input[type="submit"] {margin: 0; float: right; width: auto; padding: auto;}

table {width: 100%; margin-top: 20px;}
td {padding: 5px;}
th{
	text-align: left;
  padding: 8px;
}
</style>

<section class="right">
	
		
	
	<h2>ADD Books</h2>
	<a href="index.php?page=addbooks">ADD NEW BOOKS</a>
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
				echo '<td><a href="index.php?page=addbooks&id=' . $books['book_id'] . '">Edit</a></td>';
				echo '<td><form method="post" action="index.php?page=deletebook">
				<input type="hidden" name="id" value="' . $books['book_id'] . '" />
				<input type="submit" name="delt" value="Delete" />
				</form></td>';
				echo '</tr>';
			}
				echo '</tbody>';
			
			echo '</table>';
?>
</div>
</section>