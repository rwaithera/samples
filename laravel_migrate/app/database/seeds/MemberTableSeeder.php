<?php
  class MemberTableSeeder extends Seeder{
    public function run(){
      DB::table('member')->insert(array(
        array('id'=>1, 'fname'=>'Ruth', 'lname'=>'Waithera', 'dob'=>'1991-04-12', 'gender'=>'F', 'created_at'=>new DateTime, 'updated_at'=>new DateTime),
        array('id'=>2, 'fname'=>'John', 'lname'=>'Doe', 'dob'=>'1993-06-17', 'gender'=>'M', 'created_at'=>new DateTime, 'updated_at'=>new DateTime),
        array('id'=>3, 'fname'=>'Jane', 'lname'=>'Doe', 'dob'=>'1989-01-29', 'gender'=>'F', 'created_at'=>new DateTime, 'updated_at'=>new DateTime),
        array('id'=>4, 'fname'=>'Mary', 'lname'=>'Ann', 'dob'=>'1978-09-08', 'gender'=>'F', 'created_at'=>new DateTime, 'updated_at'=>new DateTime),
        array('id'=>5, 'fname'=>'Lewis', 'lname'=>'Brown', 'dob'=>'1985-07-15', 'gender'=>'M', 'created_at'=>new DateTime, 'updated_at'=>new DateTime)
      ));
    }
  }
?>
