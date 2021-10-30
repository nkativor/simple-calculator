<?php
/**
 *
 */
class Book
{
  var $title;
  var $author;
  var $pages;

  function __construct($aTitle,$aAuthor,$aPages){
    $this->title = $aTitle;
    $this->author = $aAuthor;
    $this->pages = $aPages;
  }

}
$book1 = new Book("Harry Porter","JK Rowlin",300);
//$book1->title = "Harry Porter";
//$book1->author = "JK Rowlin";
//$book1->pages = 250;

echo $book1->author;

/**
 *
 */
class Student
{
  public $name;
  public $course;
  public $gpa;

  function __construct($name,$course,$gpa)
  {
    $this->name = $name;
    $this->course = $course;
    $this->gpa = $gpa;
  }

  public function hasHonors(){
    if($this->gpa > 3.5){
      return "true";
    }
    return "false";
  }

}

$student1 = new Student("Nelson","Civil Engineering","3.6");
$student2 = new Student("Cebo","Civil Engineering","3.65");
 echo $student1->hasHonors();
 ?>
