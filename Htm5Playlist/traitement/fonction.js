function setSon(v, id, path) {
    var y = new Array();
    var t = new Array();
    y[0] = v;
    t[0] = "titre";
    y[1] = path;
    t[1] = "path";
    y[2] = id;
    t[2] = "id";

    ajaxPost(path + "traitement/changeSong.php", y, t, id, 0);
}
function audio(player, i, path, id, total) {
    var duration = player.duration;    // Durée totale
    var time = player.currentTime; // Temps écoulé
    if (time == duration) {
        player.parentNode.removeChild(player);
        if (i < total - 1) {
            i = i + 1;
        } else {
            i = 0;
        }
        var y = new Array();
        var t = new Array();
        y[0] = i;
        t[0] = "titre";
        y[1] = path;
        t[1] = "path";
        y[2] = id;
        t[2] = "id";

        ajaxPost(path + "traitement/changeSong.php", y, t, id, 0);
    }

}
function ajaxPost(fichier, mesVar, titre, id, type) {
    var req = getXhr();
    var lnk = "", i;
    var div = document.getElementById(id);
    var player = document.getElementById(mesVar[2]);
    var load = document.getElementById('load_' + mesVar[2]);

    req.onreadystatechange = function()
    {
        if (req.readyState == 4)
        {
            if (req.status == 200)
            {
                player.style.opacity = 1;
                affiche(div, type, req.responseText);
            }


        }
        else if (req.readyState < 4) {
            load.style.display = "block";
            player.style.opacity = 0.7;
        }

    }
    ;
    req.open("POST", fichier, true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    for (i = 0; i < mesVar.length; i++) {
        mesVar[i] = encodeURIComponent(mesVar[i]);
        lnk += titre[i] + "=" + mesVar[i] + "&";
    }
    lnk = lnk.substr(0, lnk.length - 1);
    req.send(lnk);
}
function affiche(div, type, rs) {
    if (type == 0) {
        div.innerHTML = rs
    }
}
function getXhr() {
    var xhr = null;

    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }

    return xhr;
}

