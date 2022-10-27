
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
    document.getElementById("result").innerHTML = result;
    switch(true){
        case (result < 15):
            document.getElementById("note").innerHTML = "Very severe weight loss";
         break;
    
        case (result <16):
            document.getElementById("note").innerHTML = "Severe weight loss";
         break;
    
         case (result < 18.5):
            document.getElementById("note").innerHTML = "Weight loss";
         break;

         case (result < 25):
             document.getElementById("note").innerHTML = "normal weight";
          break;

          case (result < 30):
              document.getElementById("note").innerHTML = "Increase in weight";
           break;

           case (result < 35):
               document.getElementById("note").innerHTML = "first degree obesity";
            break;

            case (result < 40):
                document.getElementById("note").innerHTML = "second degree obesity";
             break;

             case (result > 40):
                 document.getElementById("note").innerHTML = "Too obese";
              break;
        }
}