<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","sakshi2608");
		$db = mysqli_select_db($connection,"sms1");
		$query = "delete from students where roll_no = $_POST[roll_no]";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "admin_dashboard.php";
	}
	else
	{
		window.location.href = "admin_dashboard.php";
	}
</script>
