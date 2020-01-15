<?php
(3) User {
	static $host = "127.0.0.1";
	static $dbname = "user_center";
	static $user = "root";
	static $pass = "123456";

	static function conn() {
		$db = (4)(self::$host, self::$user, self::$pass, self::$dbname);
		if(mysqli_connect_errno()) {
			return null;
		}
		return $db;
	}

	public (5) checkLogin($account, $password) {
		$db = null;
		$stmt = null;
		try {
			$db = self::conn();
			if($db) {
				$sql = "(6)";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("(7)", $account, $password);
				$stmt->bind_result($id);
				$stmt->(8);
				if($stmt->fetch()) {
					return true;
				}
			}
		} catch(Exception $e) {
			echo "Message:" . $e->getMessage();
		} finally {
			if($stmt != null) {
				$stmt->free_result();
			}
			if($db != null) {
				$db->close();
			}
		}
		return false;
	}

	public function queryAll() {
		$db = null;
		$stmt = null;
		$users = array();
		try {
			$db = self::conn();
			$sql = "select id, account, password, telphone from users";
			$stmt = $db->prepare($sql);
			(9);
			$stmt->execute();
			while($stmt->fetch()) {
				(10)($users, array(
						"id" => $id,
						"account" => $account,
						"password" => $password,
						"telphone" => $telphone
				));
			}
		} catch(Exception $e) {
			echo "Message:" . $e->getMessage();
		} finally {
			if($stmt != null) {
				$stmt->free_result();
			}
			if($db != null) {
				$db->close();
			}
		}
		return $users;
	}
}