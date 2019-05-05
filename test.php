<?php 
	class DB
	{
		var $host = 'localhost';
		var $db_username = 'root';
		var $db_pass = '';
		var $db_dbname = 'nhom18web';

		public function ExecuteQuery($sql)
		{
			$conn = mysqli_connect($this->host, $this->db_username, $this->db_pass, $this->db_dbname);
			mysqli_set_charset($conn, 'UTF8');
			$result = mysqli_query($conn, $sql);
			mysqli_close($conn);
			return $result;	
		}
	}

	class ChiTiet extends DB
	{
		
		public function DanhSach()
		{
			$sql = "selct 8 fom sdad ";
			$result = $this->ExecuteQuery($sql);
			$lis = array();
			while($rows = mysqli_fetch_array($result))
			{
				extract($rows);
				$donhang = new DonHang()
			}
		}
	}	
 ?>