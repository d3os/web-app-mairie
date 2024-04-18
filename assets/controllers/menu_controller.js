import { Controller } from '@hotwired/stimulus';

/* 
* element with a data-controller="menu" attribute will execute
* menu_controller.js -> "menu"
*/ 
export default class extends Controller {

    mainHtmlContent;
    mainRefObject;    

    initialize(){ 
    }
    connect() {
        this.mainRefObject = document.getElementsByTagName("main")[0];
    }
    
    
    extractMain(){
        this.mainHtmlContent = this.mainRefObject.innerHTML;
    }

    setMainToMenu(){
        this.extractMain();
        this.mainRefObject.innerHTML = "<twig:Menu />";
    }

    setMainToContent(){
        this.mainRefObject.innerHTML = this.mainHtmlContent;
    }

}