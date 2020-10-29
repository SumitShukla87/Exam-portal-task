function checkvalidation(){
        tlen = document.topicpage.topic.value;
        if(tlen<1){
            alert("Please Enter Topic Name");
            document.topicpage.topic.focus;
            return false;
        }
        return true;
}

function check(){
    tlen = document.testform.test.value;
    if(tlen<1){
        alert("Please Enter Test Name");
        document.testform.test.focus;
        return false;
    }
    qlen = document.testform.question.value;
    if(qlen<1){
        alert("Please Enter Question Numbers");
        document.testform.question.focus;
        return false;
    }
    return true;
}

function checkall(){

    qlen = document.queform.quename.value;
    if(qlen<1){
        alert("Please Enter Question Name");
        document.queform.quename.focus;
        return false;
    }
    a1 = document.queform.ans1.value;
    if(a1<1){
        alert("Please Enter Answer1");
        document.queform.ans1.focus;
        return false;
    }
    a2 = document.queform.ans2.value;
    if(a2<1){
        alert("Please Enter Answer2");
        document.queform.ans2.focus;
        return false;
    }
    a3 = document.queform.ans3.value;
    if(a3<1){
        alert("Please Enter Answer3");
        document.queform.ans3.focus;
        return false;
    }
    a4 = document.queform.ans4.value;
    if(a4<1){
        alert("Please Enter Answer4");
        document.queform.ans4.focus;
        return false;
    }
    ta = document.queform.trueans.value;
    if(a4<1){
        alert("Please Enter True Answer");
        document.queform.trueans.focus;
        return false;
    }
    
    return true;
}

    