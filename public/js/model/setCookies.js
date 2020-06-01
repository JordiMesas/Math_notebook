
class setCookies{

    constructor(puntos,creditos){

        this.puntos = puntos;
        this.creditos = creditos;
        this.nivel = nivel;

    }

    setCookiePuntos(){
        document.cookie = `userpoints=${this.puntos}; path=/`;
    }

    setCookieCreditos(){
        document.cookie = `usercredits=${this.creditos}; path=/`;
    }
   

}

class upCookiesLevel{

    constructor(nivel){        
        this.nivel = nivel;
    }    
    
    upCookieNivel(){        
        document.cookie = `userlevel= ${this.nivel}; path=/`;
    }

}
