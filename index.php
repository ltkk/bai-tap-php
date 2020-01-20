<?php 

    Class Book{
        public $isBn;
        public $title;
        public $author;
        public $availabel;
        
        public function __construct(int $isBn, string $title, string $author, int $availabel = 0)
        {
            $this->isBn      = $isBn;
            $this->title     = $title;
            $this->author    = $author;
            $this->availabel = $availabel;
        }
        public function getCopy(){
            if($this->availabel > 0){
                echo('Done copy');
            }
            else{
                echo('no Coppy');
            }
        }
        
        public function __toString()
        {
            return $this->title. ' --- ' .$this->author;
        }
    }

     $harryPoster = new Book(999,'Harrry poster','Huy 4', 9);

     echo$harryPoster;