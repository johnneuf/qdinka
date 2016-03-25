<?php
use includes\database\DatabaseUtilClass.php;

class RetrieveBuyerReviewsClass{
  function __construct()
     {
     }

     $noRowsMsg = "No reviews were found for this user";
    //  $errorMsg = "An error occurred";

  function getReviews($userId){
    $databaseUtilCls = new DatabaseUtil();
    $reqSchema = "qdinka";
    $queryStmt = "SELECT * FROM ProductReviews WHERE ownID = :userId";
    $valuesArr = array(':userId'=>$userId);
    $queryResult = $databaseUtilCls->query($reqSchema,$queryStmt,$valuesArr);
    switch (gettype($queryResult)){
      case "boolean":
        if ($queryResult == true){
          //No rows were found: inform user
          return $noRowsMsg;
        }
        else {
          //RECORD ERROR
          return false;
        }
        break;
      case "array":
        //result rows were found: return result
        return $queryResult;
      case "NULL":
        //error occured: HAVE TO HANDLE ERROR
        return false;
    }
  }
}
 ?>
