function design(x){
    document.getElementById(x).style.borderBottomColor ="#05324488";

}

function normal(x){
    document.getElementById(x).style.borderBottomColor ="#0fa8e488";

}

function resetImg(){
    document.getElementById("profile-img").src="img/blank-profile-picture-973460__340.webp";
    document.getElementById("img-profile").src="img/blank-profile-picture-973460__340.webp";
}

function performClick(elemId,name) {
    var elem = document.getElementById(elemId);
    if(elem && document.createEvent) {
        var evt = document.createEvent("MouseEvents");
        evt.initEvent("click", true, false);
        elem.dispatchEvent(evt);
        document.getElementById("img-profile").src=name;
        document.getElementById("profile-img").src=name;
    }
}