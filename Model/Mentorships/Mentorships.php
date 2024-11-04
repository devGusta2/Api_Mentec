<?php


class Mentorships{
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

    private double $price;
    private DateTime $date_begin;    
    private int $duration;


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
        $this->content = $content
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
    public function setTeacher(){
        $this->teacher = $teacher;
    }
    public function setPlace($place){
        $this->place = $place;
    }
    public function setPayment($feedback){
        $this->feedback = $feedback
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
}


?>