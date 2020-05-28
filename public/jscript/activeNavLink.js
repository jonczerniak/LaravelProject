var resAdminLink = document.getElementById('resAdminLink');
var commAdminLink = document.getElementById('commAdminLink');
var resJobAdminLink = document.getElementById('resJobAdminLink')
var pathArray = window.location.pathname.split("/");

if(pathArray[2] == "resAdmin"){
    console.log("Res Admin")
    resAdminLink.className = "nav-link active";
    commAdminLink.className = "nav-link";
    resJobAdminLink = "nav-link";
}else if(pathArray[2] == "commAdmin"){
    console.log("Comm Admin")
    resAdminLink.className = "nav-link";
    commAdminLink.className = "nav-link active";
    resJobAdminLink.className = "nav-link";
}else if(pathArray[2] == "resJobAdmin"){
    resAdminLink.className = "nav-link";
    commAdminLink.className = "nav-link";
    resJobAdminLink.className = "nav-link active";
}
