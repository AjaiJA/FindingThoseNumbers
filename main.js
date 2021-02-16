var inputVal="";
function userType(event){
    inputVal=event.value;
}
function formSubmitNumber(event){
    var getInputVal=document.getElementsByClassName('number-value')[0].value;
    if(inputVal=="" || getInputVal==""){
        alert("Field is Empty");
        event.preventDefault();

    }
    else if(isNaN(inputVal)){
        alert("Enter Only Numbers");
        event.preventDefault();
    }
    else{
        event.action="./buttons.php";
    }
}