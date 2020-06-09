
class setCookies{

    constructor(puntos,creditos){

        this.puntos = puntos;
        this.creditos = creditos;
        this.nivel = nivel;

    }

    setCookiePoints(){
        document.cookie = `userpoints=${this.puntos}; path=/`;
    }

    setCookieCredits(){
        document.cookie = `usercredits=${this.creditos}; path=/`;
    }
   

}

class upCookiesLevel{

    constructor(nivel){        
        this.nivel = nivel;
    }    
    
    upCookieLevel(){        
        document.cookie = `userlevel= ${this.nivel}; path=/`;
    }

}
