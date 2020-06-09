class imgRightIncorrect{

    constructor(imgRight,imgIncorrect){

        this.imgRight = imgRight;
        this.imgIncorrect = imgIncorrect;       
    }

    imgShowRight(){

        this.imgIncorrect.style.display = "none";
        this.imgRight.style.display = "block";
        
    }

    imgShowIncorrect(){

        this.imgRight.style.display = "none";
        this.imgIncorrect.style.display = "block";

    }

}