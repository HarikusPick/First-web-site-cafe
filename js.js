function ac_ul_1() {
        if(document.getElementById("ul_1").style.display=="block"){
            document.getElementById("ul_1").style.display="none";
        }else{
            document.getElementById("ul_1").style.display="block";
    }
}
function ac_ul_2() {
    if(document.getElementById("ul_2").style.display=="block"){
        document.getElementById("ul_2").style.display="none";
    }else{
        document.getElementById("ul_2").style.display="block";
    }
}
function ac_ul_3() {
    if(document.getElementById("ul_3").style.display=="block"){
        document.getElementById("ul_3").style.display="none";
    }else{
        document.getElementById("ul_3").style.display="block";
    }
}
function ac_ul_4() {
    if(document.getElementById("ul_4").style.display=="block"){
        document.getElementById("ul_4").style.display="none";
    }else{
        document.getElementById("ul_4").style.display="block";
    }
}
function ac_ul_5() {
    if(document.getElementById("ul_5").style.display=="block"){
        document.getElementById("ul_5").style.display="none";
    }else{
        document.getElementById("ul_5").style.display="block";
    }
}
function buton() {
    if(document.getElementById("jpg_ul").style.display=="block"){
        document.getElementById("jpg_ul").style.display="none";
        document.getElementById("buton").innerHTML="Fotoğrafları Göster";
        document.getElementById("foto_galeri").style.color='#CC5735';
    }else{
        document.getElementById("jpg_ul").style.display="block";
        document.getElementById("buton").innerHTML="Fotoğrafları Gizle";
        document.getElementById("foto_galeri").style.color='red';
    }
}