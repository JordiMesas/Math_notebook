class typeOperation{

    constructor(level,num1,num2){        
        this.level = level;
        this.num1 = num1;
        this.num2 = num2;
    }    
    
    setOperation(){        
        switch(this.level) {
            case 1:               
                return this.num1 + this.num2;
              
            case 2:
              return this.num1 - this.num2;
             
            case 3:
                return this.num1 * this.num2;
             
            case 4:
                return this.num1 / this.num2;
              
            default:
              return false;              
                          
          }
    }

}