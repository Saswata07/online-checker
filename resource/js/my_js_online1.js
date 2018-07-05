function browser_detection1(){
    var useragent = navigator.userAgent;
    if(useragent.search('Windows')){
        alert("Windows");
    }
    else if (useragent.search('Android')){
        alert("Mobile");
    }
    else if (useragent.search('iPhone')){
        alert("iPhone");
    }
    else{
        
    }
}