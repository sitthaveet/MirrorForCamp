<?php
	class Connect {
		public $connect;
		function __construct () {
			$this->connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD, DB_NAME);
			mysqli_query($this->connect, "SET NAMES ".DB_CHAR)
			mysqli_query($this->connect, "SET NAMES utf8");
		}

		function getConnection () {
			return $this->connect;
		}
	}
?>