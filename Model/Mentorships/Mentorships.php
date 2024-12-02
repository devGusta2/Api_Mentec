<?php


class Mentorships{
    private int $id;
    private string $title;
    private string $description;
    private string $target; //publico alvo
    private string $goals;
    private string $content;
    private string $frequnecy; // semanal, diário, mensal ...
    private string $requirements;
    private string $methods;
    private string $teacher;
    private string $place;
    private string $payment;
    private string $feedback;

    private float $price;
    private DateTime $date_begin;    
    private int $duration;

    public function __construct($title,$description,$target,$goals,$content,$frequency,$requirements,
        $methods,$teacher,$place,$feedback,$price,$date_begin,$duration) {

        $this->title = $title;
        $this->description = $description;
        $this->target = $target;
        $this->goals = $goals;
        $this->content = $content;
        $this->frequency = $frequency;
        $this->requirements = $requirements;
        $this->methods = $methods;
        $this->teacher = $teacher;
        $this->place = $place;
 
        $this->feedback = $feedback;
        $this->price = 0;
        $this->date_begin = $date_begin;
        $this->duration = $duration;
    }


    public function setTitle($title){
        $this->title = $title;
    }
    public function setDesc($description){
        $this->description = $description;
    }
    public function setTarget($target){
        $this->target = $target;
    }
    public function setGoals($goals){
        $this->goals = $goals;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function setFreq($frequnecy){
        $this->frequency=$frequnecy;
    }
    public function setRequi($requirements){
        $this->requirements = $requirements;
    }
    public function setMethod($methods){
        $this->methods = $methods;
    }
    public function setTeacher($teacher){
        $this->teacher = $teacher;
    }
    public function setPlace($place){
        $this->place = $place;
    }
    public function setPayment($feedback){
        $this->feedback = $feedback;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setDate_begin($date_begin){
        $this->date_begin = $date_begin;
    }
    public function setDuration($duration){
        $this->duration = $duration;
    }

    //metodos getters
    public function getTitle(){
        return $this->title;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getTarget(){
        return $this->target;
    }
    public function getGoals(){
        return $this->goals;
    }
    public function getContent(){
        return $this->content;
    }
    public function getFreq(){
        return $this->frequency;
    }
    public function getRequi() {
        return $this->requirements;
    }

    public function getMethod() {
        return $this->methods;
    }

    public function getTeacher() {
        return $this->teacher;
    }

    public function getPlace() {
        return $this->place;
    }

    public function getFeedback() {
        return $this->feedback;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDateBegin() {
        return $this->date_begin;
    }

    public function getDuration() {
        return $this->duration;
    }
    
}


?>