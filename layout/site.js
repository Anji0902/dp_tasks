// asimple function that trigger alert box
function hello(){
alert("Welcome to my website");
}
//simple function to add 2 numbers 
function add(){
    document.write(5+6);
}
//document.getElementById(id)


// display or like echo 
// document.write 
// 



//function to change the background color of the page
function changeColor(where,newColor){
    if (where == "background"){
        document.body.style.backgroundColor = newColor;
    }
}

function changeFcolor(){
    let fcolor=document.getElementById('fcolor').value;
    document.body.style.color=fcolor;
}



function validateform(){  

    //validating name
    let name=document.myform.name.value;  
    // to check if name is empty of not  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
    // to check if name has atleast 5 characters
    else if(name.length<5){  
        alert("Name can't less than 5 characters");  
        return false;  
      }
    // // to ensure name cannot be more than 5 characters
    else if(name.length>15){  
        alert("Name can't more than 15 characters");  
        return false;  
      }
    }
/*function crud(){
let fName=(document.form1.fName.value).trim();
if(fName.len<5){
    alert("First Name must have atleast 5 character");
    return false;
}


}

function fnameVal(){
    let fName=(document.form1.fName.value).trim();
    if(fName.len<5){
        alert("First Name must have atleast 5 character");
        return false;

}}

