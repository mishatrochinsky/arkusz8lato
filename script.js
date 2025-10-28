function show(show1){
    var a=document.getElementById("a");
    var b=document.getElementById("b");
    var c=document.getElementById("c");
    var one=document.getElementById("one");
    var two=document.getElementById("two");
    var three=document.getElementById("three");
    if(show1=='olo'){
        two.style.display="none";
        one.style.display="block";
        three.style.display="none";
        a.style.backgroundColor = "MistyRose";
        b.style.backgroundColor = "#FFAEA5";
        c.style.backgroundColor = "#FFAEA5";
        
    }
    if(show1=='wow'){
        two.style.display="block";
        one.style.display="none";
        three.style.display="none";
        a.style.backgroundColor = "#FFAEA5";
        b.style.backgroundColor = "MistyRose";
        c.style.backgroundColor = "#FFAEA5";
        
    }
     
    if(show1=='ala'){
        two.style.display="none";
        one.style.display="none";
        three.style.display="block";
        a.style.backgroundColor = "#FFAEA5";
        b.style.backgroundColor = "#FFAEA5";
        c.style.backgroundColor = "MistyRose";
        
    }
}