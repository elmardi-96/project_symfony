<?php 
namespace App;

class GreetingGenerator  {

    public function  getRandomGreeting(){
        $greetings = ['hey','yo','hi'];
        $greting = $greetings[array_rand($greetings)];
        return  $greting;

    }
    public function getArray(){
       
        $cars = array
        (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
        $table = '<table style=" border-collapse: collapse;"> 
                    <tr style="color:white;">
                        <th style=" background-color: #4CAF50;">Name</th>
                        <th  style=" background-color: #4CAF50;">number</th>
                        <th  style=" background-color: #4CAF50;">number</th>
                    </tr>';
            for($i=0;$i<count($cars);$i++){
                $table = $table.'<tr style="color:red;" >';
                for($j=0;$j<count($cars[$i]);$j++){
                $table =   $table.''.'<td style=" border: 1px solid #ddd;">'.$cars[$i][$j]. '</td>';
                }
                $table = $table.'</tr>';
            }
        $table = $table. '</table>';
        return    $table;
    }
}