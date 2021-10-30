<?php
 if(isset($_POST['btn'])){
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $operator = $_POST['operator'];

    function calculator($num1,$num2,$operator){
      if($operator == "add"){
        $answer = $num1+$num2;
        //return $answer;
      }elseif ($operator == "subtract") {
        $answer = $num1-$num2;
        //return $answer;
      }elseif ($operator == "divide") {
        $answer = $num1/$num2;
        //return $answer;
      }else{
        $answer = $num1*$num2;
      //  return $answer;
      }
      return $answer;
    }
    echo calculator($num1,$num2,$operator);
 }

 ?>
<div class="container">
  <form class="form-control" action="page.php" method="POST">
     <h3>Simple Calculator</h3>
     <hr>
    <div class="">
        <input type="number" name="num1" value="" class="form-control" placeholder="Enter First Number">
    </div>
    <div class="">
      <input type="number" name="num2" value="" class="form-control" placeholder="Enter Second Number">
    </div>
    <div class="">
      <select class="" name="operator">
        <option value="add" class="op">Add</option>
        <option value="subtract" class="op">Subtract</option>
        <option value="divide" class="op">Divide</option>
        <option value="multiply" class="op">Multiply</option>
      </select>
    </div>
    <div class="">
      <button type="submit" name="btn" class="btn btn-primary btn-lg ">Submit</button>
    </div>
  </form>
</div>
<style media="screen">
  input{
    width: 300px;
    font-family: sans-serif;
    margin: 20px;
    margin-left: 90px;
    padding: 5px;
    border-radius: 6px;
  }
  select {
    width: 300px;
    font-family: sans-serif;
    margin: 20px;
    padding: 5px;
    border-radius: 6px;
    margin-left: 90px;
  }
  button{
    margin: 20px;
    padding: 5px;
    width: 150px;
    text-align: center;
    margin-left: 160px;
    background-color: black;
    color: white;
    border-radius: 10px;
  }
  form{
    justify-content: center;

  }
  h3{
    align-items: center;
    font-weight: 200;
    font-family: fantasy;
    margin-left: 160px;
    margin-top: 40px;
  }
  .container{
    max-width: 500px;
    margin-top: 100px;
    margin-left: 450px;
    justify-content: center;
    border: 1px solid black;
    border-radius: 10px;
    background-color: grey;
  }
</style>
