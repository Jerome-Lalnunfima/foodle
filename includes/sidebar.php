<?php 
$min = $_GET['min'];
$max = $_GET['max'];
$sort = $_GET['sort'];
?>
<form action="/" method="GET" class="col-2 pt-4">
	<div class="foodle--sidebar">
		<div class="sidebar-filter">
			<div class="text-center font-weight-bold">
				Sort
			</div>
			<div class="filter-container d-flex justify-content-center">
                <select id="sort" name="sort">
                    <option value="none" <?php echo ($sort == "") ? "selected" : "" ?>>None</option>
                    <option value="phl" <?php echo ($sort == "phl") ? "selected" : "" ?>>Price: High to Low</option>
                    <option value="plh" <?php echo ($sort == "plh") ? "selected" : "" ?>>Price: Low to High</option>
                </select>
			</div>
			<div class="text-center mt-4">
				<button type="submit" class="btn btn-sm btn-light filter-go-button">
					Filter
				</button>
			</div>
		</div>
	</div>
</form>
