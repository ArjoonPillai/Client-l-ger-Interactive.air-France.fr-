<?php

class Controller{
    public
        $titleUnivers,
        $descriptionUnivers,
        $labelUnivers,
        $titleMedias,
        $descriptionMedias,
        $linkMedias,
        $ageMedias;

    public function database(){
        require_once "database/database.php";
    }
    public function takeUnivers(){
        $this->database();
        $this->titleUnivers = "test";
        $this->descriptionUnivers = "123...";
        $this->labelUnivers = "NEW";

        echo $this->titleUnivers;
        echo $this->labelUnivers;
        echo $this->descriptionUnivers;
    }
    public function takeMedias(){
        $this->database();
        $this->titleMedias = "test";
        $this->descriptionMedias = "test";
        $this->linkMedias = "test";
        $this->ageMedias = "test";

    }
    //
    public function Univers(){
        $this->viewUnivers();
    }
    public function Medias(){
        echo "test";
    }
    //
    public function viewUnivers(){
        $this->takeUnivers();
    }
    public function viewMedias(){
        $this->takeMedias();
    }
}
