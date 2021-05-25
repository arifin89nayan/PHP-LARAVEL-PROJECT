<?php
class Database{
   
    protected $dbHost = 'localhost';
    protected $dbUsername = 'root';
    protected $dbPassword = 'rimon123';
    protected $database = 'test';
    protected $dbConnection;

    public function __construct()
    {
       $dbObject = new mysqli(
           $this->dbHost,
           $this->dbUsername, 
           $this->dbPassword, 
           $this->database
        );
        $this->dbConnection = $dbObject;
      
    }
    public function selectdata(){
        $selectQury="select * from products";
        $result=$this->dbConnection->query($selectQury);
        $data=$result->fetch_all(MYSQLI_ASSOC);
        echo "<pre>";
        print_r($data);
    }
    public function insertdata(){
        $insertQuery="INSERT INTO products (product_name,product_price,product_description,product_quntity)
                      VALUES('Samsung-m10', 800,'samsung glaxy',20)";
        $result=$this->dbConnection->query($insertQuery);
        if($result) {
            echo "data inserted";
        }else{
            echo "Smonthing is wrong!";
        }             

    }
    public function updateData()
    {
        $updateQuery = "UPDATE products SET product_name='Samsungm21', product_price=6000 WHERE id=3";
        $result = $this->dbConnection->query($updateQuery);
        if($result){
            echo "Data Updated";
        }else{
            echo "Data is not Updated";
        }
    }
    public function deleteData(){
        $deleteQuery = "DELETE FROM products WHERE id=2";    
        $result = $this->dbConnection->query($deleteQuery);
        if($result){
            echo "Data Deleted Successfully";
        }else{
            echo "Data is not Deleted Successfully";
        }
    }
    

}
$objDatabase =new Database;
$objDatabase->selectdata();
$objDatabase->insertdata();
$objDatabase->updateData();
$objDatabase->deleteData();

?>