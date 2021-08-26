function lentry(){
    document.getElementById('idback').style.display='block';
    document.getElementById('idcform').style.display='block';
    document.getElementById('idclose').style.display='block';
}
function newInput(){
    document.getElementById('idback').style.display='block';
    document.getElementById('newidform').style.display='block';
    document.getElementById('idclose').style.display='block';
}
function lexit(){
    document.getElementById('idback').style.display='block';
    document.getElementById('exidform').style.display='block';
    document.getElementById('idclose').style.display='block';

}

function bclose(){
    document.getElementById('idback').style.display='none';
    document.getElementById('idclose').style.display='none';
    document.getElementById('idcform').style.display='none';
    document.getElementById('exidform').style.display='none';
    document.getElementById('newidform').style.display='none';
    
}

function openNav(){
    document.getElementById('mySidebar').style.display='block';
    document.getElementById('main').style.display='none';
    
}
function closeNav(){
    document.getElementById('mySidebar').style.display='none';
    document.getElementById('main').style.display='block';
    
}
function  exitConfirm(id, date, time){
        var ask = window.confirm("Are you sure you want to delete this Material?");
        if (ask) {
            window.location.href = "delete.php?pc=" + id + "&sno=" + date + "&boq=" + time;
        } else {
            window.location.href = "rateAnalysisEdit.php?varname=" + id;
        }
}
