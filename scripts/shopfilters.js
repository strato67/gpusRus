const className = document.getElementsByClassName("shop-container");
function shopFilter(selection){
    
    if(selection==='all'){
        //className[0].style.display = "block";
        //className[0].getElementsByClassName("amd")[1].style.display = "block";
        visible();
        
        
    }else{
        //className[0].style.display = "none";
        //className[0].getElementsByClassName("amd")[0].style.display = "none";
        
        cardSelect(selection);
        
        //visible(selection);
    }
}
function visible(){
    className[0].style.visibility = "visible";
    var amdArray =  className[0].getElementsByClassName("amd");
    var nArray =  className[0].getElementsByClassName("nvidia");
    for(let i = 0;i<amdArray.length;i++){
        amdArray[i].style.display="block";
    }
    for(let i = 0;i<nArray.length;i++){
        nArray[i].style.display="block";
    }
    
}

function cardSelect(card){
    var amdArray =  className[0].getElementsByClassName("amd");
    var nArray =  className[0].getElementsByClassName("nvidia");
    if(card==='amd'){
        visible();
        for(let i = 0;i<nArray.length;i++){
            nArray[i].style.display="none";
        }
    
    }else{
        visible();
        for(let i = 0;i<amdArray.length;i++){
            amdArray[i].style.display="none";
        }
    } 
        
}