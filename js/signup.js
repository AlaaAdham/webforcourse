
function design(x){
    document.getElementById(x).style.borderBottomColor ="#05324488";

}

function normal(x){
    document.getElementById(x).style.borderBottomColor ="#0fa8e488";
  

}
function correctpass()
{
    if(document.getElementById('Password')!=document.getElementById('conPassword'))
    {
        document.getElementById('coc').style.visibility="visible";
    }
    else
    document.getElementById('conc').style.visibility="hidden";

}