<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */
//column name=field, entered data=value same prosidure everywhere u must follow
//

class Admin extends Main
{
	protected $id;

	public function __construct()
	{
		//$this->id = $_SESSION['admin'];
		parent::__construct();
	}

	public function loginAdmin($table,$name,$password)
	{
		try{
			$stmnt=$this->conn->prepare("SELECT * from `adminmaster` where name='$name' AND password='$password'");
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $this->conn->lastInsertId();
			// $id = $res['id'];
			if($count){
				$_SESSION['aid']= $res['advocateid'];
				$_SESSION['admin']= $res['name'];
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
    }

    public function loginSubAdmin($table,$name,$password)
	{
		try{
			$stmnt=$this->conn->prepare("SELECT * from `subadmin` where name='$name' AND password='$password'");
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $this->conn->lastInsertId();
			$id = $res['advocate_id'];
			if($count){
				$_SESSION['sid']= $res['advocate_id'];
				$_SESSION['sadmin']= $res['name'];
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
    }

    public function loginUser($table,$name,$password)
	{
		try{
			$stmnt=$this->conn->prepare("SELECT * from `user` where name='$name' AND password='$password'");
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $this->conn->lastInsertId();
			$id = $res['u_id'];
			if($count){
				$_SESSION['uid']= $res['u_id'];
				$_SESSION['user']= $res['name'];
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
    }
    //login user 
 //    public function loginUser($table,$field1,$name,$field2,$password)
	// {
	// 	try{
	// 		$stmnt=$this->conn->prepare("SELECT * from ".$table." where ".$field1."=".$name." AND ".$field2."=".$password);
	// 		$stmnt->execute();
	// 		$count=$stmnt->rowCount();
	// 		$res=$stmnt->fetch(PDO::FETCH_ASSOC);
	// 		$id = $this->conn->lastInsertId();
	// 		//$id = $res['id'];
	// 		if($count){
	// 			$_SESSION['user']= $id;
	// 			return true;
	// 		}else{
	// 			return false;
	// 		}

	// 	}catch(PDOException $e) {
	// 		echo $e->getMessage();
	// 		return false;
	// 	}
 //    }
    		// Create Update Delete Code
	public function showall($table){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//show data by id
	public function show_id($table,$field,$id){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table." where ".$field."=".$id);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//Show by comaparing 1 column value
	public function show_value1($table,$field1,$value1){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table." where ".$field1."=".$value1);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//Show by comaparing 2 column value
	public function show_value2($table,$field1,$field2,$value1,$value2){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table." where ".$field1."=".$value1." and ".$field1."=".$value1);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//Show by comaparing 3 column value
	public function show_value3($table,$field1,$field2,$field3,$value1,$value2,$value3){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table." where ".$field1."=".$value1." and ".$field2."=".$value2." and ".$field3."=".$value3);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//simple inner join 2 table
	public function inner_join2($table1,$table2,$field){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table1." inner join ".$table2." on ".$table1.".".$field."=".$table2.".".$field);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//simple innerjoin for 3 table 
	public function inner_join3($table1,$table2,$table3,$field){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table1." inner join ".$table2." inner join ".$table3." where ".$table1.".".$field."=".$table2.".".$field." and ".$table1.".".$field."=".$table3.".".$field);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//show with inner join 2 table by id maintable table1 id
	public function show_join2($table1,$table2,$field,$fieldid,$id){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table1." inner join ".$table2." on ".$table1.".".$field."=".$table2.".".$field." and ".$table1.".".$fieldid."=".$id);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}


	public function ret($stmt){
		$stmt = $this->conn->prepare($stmt);
		$stmt->execute();
			return $stmt;	
	}

	//show innerjoin for 3 table  by id maintable table1 id
	public function show_join3($table1,$table2,$table3,$field,$fieldid,$id){
		 	try {
				$stmt = $this->conn->prepare("SELECT * from ".$table1." inner join ".$table2." inner join ".$table3."  on ".$table1.".".$field."=".$table2.".".$field." and ".$table3.".".$field."=".$table1.".".$field." and ".$table1.".".$fieldid."=".$id);
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//Searching using ajax with 1 parameter
	public function Search1($table,$field1,$value1){
		 	try {
				$stmt = $this->conn->prepare("SELECT * FROM ".$table." where ".$field1."  like '".$value1."%'");
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
	//Searching using ajax with 2 parameter
	public function Search2($table,$field1,$field2,$value1){
		 	try {
				$stmt = $this->conn->prepare("SELECT * FROM ".$table." where ".$field1." like '".$value1."%' or ".$field2."  like '".$value1."%' ");
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Empty Records!!";
				return false;
			}
	}
    //DELETE row
	public function delete($table,$idfield,$id){
		 	try {
				$stmt = $this->conn->prepare("DELETE from ".$table." where ".$idfield."=".$id);
				$stmt->execute();

				//$_SESSION['success_message'] = "Successfully deleted!!";
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				//$_SESSION['error_message'] = "Something went wrong!!";
				return false;
			}
	}
	//adding 1 column
	public function add_data1($table,$field1,$value1){
		try {
		     $stmt = $this->conn->prepare("INSERT INTO ".$table."(".$field1.") VALUES(:value1)");
		 		   $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);

			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";
			return false;
		}
	} 
	//adding 2 columns
	public function add_data2($table,$field1,$field2,$value1,$value2){
		try {
		     $stmt = $this->conn->prepare("INSERT INTO ".$table."(".$field1.",".$field2.") VALUES(:value1,:value2)");
		   $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//adding 3 columns
	public function add_data3($table,$field1,$field2,$field3,$value1,$value2,$value3){
		try {
		     $stmt = $this->conn->prepare("INSERT INTO ".$table."(".$field1.",".$field2.",".$field3.") VALUES(:value1,:value2,:value3)");
		  $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//adding 4 columns
	public function add_data4($table,$field1,$field2,$field3,$field4,$value1,$value2,$value3,$value4){
		try {
		     $stmt = $this->conn->prepare("INSERT INTO ".$table."(".$field1.",".$field2.",".$field3.",".$field4.") VALUES(:value1,:value2,:value3,:value4)");
		     $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		      // $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//adding 5 columns
	public function add_data5($table,$field1,$field2,$field3,$field4,$field5,$value1,$value2,$value3,$value4,$value5){
		try {
		     $stmt = $this->conn->prepare("INSERT INTO ".$table."(".$field1.",".$field2.",".$field3.",".$field4.",".$field5.") VALUES(:value1,:value2,:value3,:value4,:value5)");
			$stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       //$stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//adding 6 columns
	public function add_data6($table,$field1,$field2,$field3,$field4,$field5,$field6,$value1,$value2,$value3,$value4,$value5,$value6){
		try {
		     $stmt = $this->conn->prepare("INSERT INTO ".$table."(".$field1.",".$field2.",".$field3.",".$field4.",".$field5.",".$field6.") VALUES(:value1,:value2,:value3,:value4,:value5,:value6)");
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		      // $stmt->bindParam(':value7', $value7, PDO::PARAM_STR);
			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//adding 7 columns
	public function add_data7($table,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$value1,$value2,$value3,$value4,$value5,$value6,$value7){
		try {
		       $stmt = $this->conn->prepare("INSERT INTO ".$table." (".$field1.",".$field2.",".$field3.",".$field4.",".$field5.",".$field6.",".$field7.") VALUES (:value1,:value2,:value3,:value4,:value5,:value6,:value7)");
		        $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		       $stmt->bindParam(':value7', $value7, PDO::PARAM_STR);
		       //$stmt->bindParam(':value8', $value8, PDO::PARAM_STR);
			
			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//adding 8 columns

	public function add_data8($table,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8){
		try {
		       $stmt = $this->conn->prepare("INSERT INTO ".$table." (".$field1.",".$field2.",".$field3.",".$field4.",".$field5.",".$field6.",".$field7.",".$field8.") VALUES (:value1,:value2,:value3,:value4,:value5,:value6,:value7,:value8)");
		       // or die(mysqli_error($conn));
		        $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		       $stmt->bindParam(':value7', $value7, PDO::PARAM_STR);
		       $stmt->bindParam(':value8', $value8, PDO::PARAM_STR);
		
			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	// inserting individual 9 columns
	public function add_data9($table,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$field9,$value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$value9){
		try {
		     $stmt = $this->conn->prepare("INSERT INTO ".$table."(".$field1.",".$field2.",".$field3.",".$field4.",".$field5.",".$field6.",".$field7.",".$field8.",".$field9.") VALUES(:value1,:value2,:value3,:value4,:value5,:value6,:value7,:value8,:value9)");
		     $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		       $stmt->bindParam(':value7', $value7, PDO::PARAM_STR);
		       $stmt->bindParam(':value8', $value8, PDO::PARAM_STR);
		       $stmt->bindParam(':value9', $value9, PDO::PARAM_STR);

			$stmt->execute();
			return true ;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//update 1 column value
	public function edit_data1($table,$field1,$value1,$idfield,$id){
			try {
				$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1 where ".$idfield."=:id");
				
				 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
   		        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

				$stmt->execute();
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				$_SESSION['error_message'] = "Something went wrong!!";

				return false;
			}
		}
	//update 2 columns
	public function edit_data2($table,$field1,$field2,$value1,$value2,$idfield,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2 where ".$idfield."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
	         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
	        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	
	//update 3 columns
	public function edit_data3($table,$field1,$field2,$field3,$value1,$value2,$value3,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2,".$field3."=:value3 where ".$id."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
   		        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//update 4 columns
	public function edit_data4($table,$field1,$field2,$field3,$field4,$value1,$value2,$value3,$value4,$idfield,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2,".$field3."=:value3,".$field4."=:value4 where ".$idfield."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
   		        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//update 5 columns
	public function edit_data5($table,$field1,$field2,$field3,$field4,$field5,$value1,$value2,$value3,$value4,$value5,$idfield,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2,".$field3."=:value3,".$field4."=:value4,".$field5."=:value5 where ".$idfield."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
 		        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	//update 6 columns
	public function edit_data6($table,$field1,$field2,$field3,$field4,$field5,$field6,$value1,$value2,$value3,$value4,$value5,$value6,$idfield,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2,".$field3."=:value3,".$field4."=:value4,".$field5."=:value5,".$field6."=:value6 where ".$idfield."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
		
	//update 7 columns
	public function edit_data7($table,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$value1,$value2,$value3,$value4,$value5,$value6,$value7,$fieldid,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2,".$field3."=:value3,".$field4."=:value4,".$field5."=:value5,".$field6."=:value6,".$field7."=:value7 where ".$fieldid."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		       $stmt->bindParam(':value7', $value7, PDO::PARAM_STR);
		       
		        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
		
	//update 8 columns
	public function edit_data8($table,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$idfield,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2,".$field3."=:value3,".$field4."=:value4,".$field5."=:value5,".$field6."=:value6,".$field7."=:value7,".$field8."=:value8 where ".$idfield."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		       $stmt->bindParam(':value7', $value7, PDO::PARAM_STR);
		       $stmt->bindParam(':value8', $value8, PDO::PARAM_STR);
		        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	
	//update 9 columns
	public function edit_data9($table,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$field9,$value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$value9,$idfield,$id){
		try {
			$stmt = $this->conn->prepare("UPDATE ".$table." SET ".$field1."=:value1,".$field2."=:value2,".$field3."=:value3,".$field4."=:value4,".$field5."=:value5,".$field6."=:value6,".$field7."=:value7,".$field8."=:value8,".$field9."=:value9 where ".$idfield."=:id");
			
			 $stmt->bindParam(':value1', $value1, PDO::PARAM_STR);
		         $stmt->bindParam(':value2', $value2, PDO::PARAM_STR);
		         $stmt->bindParam(':value3', $value3, PDO::PARAM_STR);
		        $stmt->bindParam(':value4', $value4, PDO::PARAM_STR);
		       $stmt->bindParam(':value5', $value5, PDO::PARAM_STR);
		       $stmt->bindParam(':value6', $value6, PDO::PARAM_STR);
		       $stmt->bindParam(':value7', $value7, PDO::PARAM_STR);
		       $stmt->bindParam(':value8', $value8, PDO::PARAM_STR);
		       $stmt->bindParam(':value9', $value9, PDO::PARAM_STR);
		       $stmt->bindParam(':id', $id, PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Something went wrong!!";

			return false;
		}
	}
	// public function edit(){
	// 	$str="UPDATE ".$table." SET";
	// 	for($i=0;)
	// }	
	
}