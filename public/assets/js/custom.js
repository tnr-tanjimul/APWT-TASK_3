function loadpage(url) {
    window.location = url;
}

function randomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function hideNetworkInfo(protocol) {
    if (protocol.value == "Hotspot") {
        document.getElementById("networkInfo").style.display = "none";
    } else {
        document.getElementById("networkInfo").style.display = "block";
    }
}


function toWordCapitalCase(mySentence) {
    const words = mySentence.split(" ");
    for (let i = 0; i < words.length; i++) {
        words[i] = words[i][0].toUpperCase() + words[i].substr(1);
    }
    return words.join(" ");
}

function fetchInterface(serverId) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("d_interface").innerHTML = this.responseText;
        }
    };
    var url = "app/Controller/ajaxController.php?serverId=" + serverId + "&action=interface";
    http.open("POST", url, true);
    http.send();
}

function fetchPPPoeInterface(serverId) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("d_interface").innerHTML = this.responseText;
        }
    };
    var url = "app/Controller/ajaxController.php?serverId=" + serverId + "&action=interface-pppoe";
    http.open("POST", url, true);
    http.send();
}

function fetchProfiles(serverId) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("packageId").innerHTML = this.responseText;
        }
    };
    var url = "app/Controller/ajaxController.php?serverId=" + serverId + "&action=hotspot_profiles";
    http.open("POST", url, true);
    http.send();
}

function fetchPPPoEProfiles(serverId) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("packageId").innerHTML = this.responseText;
        }
    };
    var url = "app/Controller/ajaxController.php?serverId=" + serverId + "&action=pppoe_profiles";
    http.open("POST", url, true);
    http.send();
}





scrollingElement = (document.scrollingElement || document.body)
function scrollSmoothToBottom (id) {
   $(scrollingElement).animate({
      scrollTop: document.body.scrollHeight
   }, 500);
}



