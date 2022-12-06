function design(x){
    document.getElementById(x).style.borderBottomColor ="#05324488";

}

function normal(x){
    document.getElementById(x).style.borderBottomColor ="#0fa8e488";

}

function save()
{
  var uid=document.getElementById('username').value();
  localStorage.setItem('username','uid');
}
