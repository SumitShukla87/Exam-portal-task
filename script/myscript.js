function checklogin(){
    tlen = document.userindex.username.value;
    if(tlen<1){
        alert("Please Enter User Name");
        document.userindex.username.focus;
        return false;
    }
    plen = document.userindex.password.value;
    if(plen<1){
        alert("Please Enter Password");
        document.userindex.password.focus;
        return false;
    }
    return true;
}