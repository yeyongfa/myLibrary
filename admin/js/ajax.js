function MyLibrary(){

    var getHTTPObject=function(){
      var xhr=false;
      if(window.XMLHttpRequest){
        xhr=new XMLHttpRequest();
      }else if(window.ActiveXObject){
        try{
          xhr=new ActiveXObject('Msxml2.XMLHTTP');
        }catch(e){
          try{
            xhr=new ActiveXObject('Microsoft.XMLHTTP');
          }catch(e){
            xhr=false;
          }
        }
      }
    return xhr;
    };

    var displayResponse=function(request,canvas){
          if(request.readyState==4){
          if(request.status==200||request.status==304){
              if(canvas!=''){
                  canvas.innerHTML=request.responseText;
              }else{
                eval(request.responseText);
              }
          
           
          }else{
              alert(request.status);
          }
      }
    };

    this.grabFileGet=function(file,canvas){
        var request=getHTTPObject();
        if(request){
          
          request.onreadystatechange=function(){
            displayResponse(request,canvas);
          };
          request.open('GET',file,true);
          request.send(null);
        }        
    };

    this.grabFilePost=function(file,canvas,data){
      var request=getHTTPObject();
      if(request){
        request.onreadystatechange=function(){
          displayResponse(request,canvas);
        };
        request.open('POST',file,true);
        request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        request.send(data);
        return true;
      }else{
        return false;
      }
    };

}