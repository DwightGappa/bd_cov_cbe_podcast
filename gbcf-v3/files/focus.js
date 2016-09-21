window.onload = function() {
 // GBCF-V3 PHP CONTACT FORM IE6 FORM ELEMENT FOCUS FILE 
 // Author: Mike Cherim - http://green-beast.com 
 var objEvt = {
  input   : ["hover", "focus"],
  select  : ["hover", "focus"],
  textarea: ["hover", "focus"]
 };
 
 // spare use variables
 var temp, tempLen = 0;
 
 // hover/focus functions
 function hoverFunc  (){this.className += ' hover';}
 function unHoverFunc(){this.className = this.className.replace(' hover', '');}
 function focusFunc  (){this.className += ' focus';
  // start URL replacement
  if(navigator.appName.indexOf('Explorer')!=-1){
   if(this.value==this.defaultValue&&this.name=='url') this.value='http://';
  }
  // end URL replacement
 }
 function unFocusFunc(){this.className = this.className.replace(' focus', '');}
 
 for(var i in objEvt){
  temp = document.getElementsByTagName(i), tempLen = temp.length;
   for(var j=0; j<tempLen; j++){
    for(var k=0; k<objEvt[i].length; k++){
     if(objEvt[i][k] == 'hover'){
      temp[j].onmouseover = hoverFunc;
      temp[j].onmouseout  = unHoverFunc;
     } else if(objEvt[i][k] == 'focus'){
      temp[j].onfocus = focusFunc;
      temp[j].onblur  = unFocusFunc;
     }
    }
   }
 }
}