
function design(x){
    document.getElementById(x).style.borderBottomColor ="#05324488";

}

function normal(x){
    document.getElementById(x).style.borderBottomColor ="#0fa8e488";

}

function calc(){
    let height=document.getElementById("height").value;
    let weight=document.getElementById("weight").value;
    let result =(weight/((height/100)*(height/100))) ;
    document.getElementById("other-cont").style.opacity="1";
    document.getElementById("result").innerHTML = result;

    switch(true){
        case (result < 15):
            document.getElementById("note").innerHTML = "Your Body State: Very severe weight loss";
        break;
    
        case (result <16):
            document.getElementById("note").innerHTML = "Your Body State: Severe weight loss";
        break;
    
        case (result < 18.5):
            document.getElementById("note").innerHTML = "Your Body State: Weight loss";
        break;

        case (result < 25):
            document.getElementById("note").innerHTML = "Your Body State: normal weight";
        break;

        case (result < 30):
            document.getElementById("note").innerHTML = "Your Body State: Increase in weight";
        break;

        case (result < 35):
            document.getElementById("note").innerHTML = "Your Body State: first degree obesity";
            break;

            case (result < 40):
                document.getElementById("note").innerHTML = "Your Body State: second degree obesity";
            break;

            case (result > 40):
                document.getElementById("note").innerHTML = "Your Body State: Too obese";
            break;
        }
}