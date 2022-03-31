let form1 = document.getElementById("form_action1");
form1.onsubmit = function (e) {
    e.preventDefault();
    var params = '';
    for (var i = 0; i < document.getElementById("form_action1").elements.length - 1; i++) {
        var fieldName = document.getElementById("form_action1").elements[i].name;
        var fieldValue = document.getElementById("form_action1").elements[i].value;
        params += fieldName + '=' + fieldValue + '&';
    }
    console.log(params);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseXML != null) {
                    var count;
                }
            }
        }
    }
    request.open("GET", params, true);
    request.send(null);
}

let form2 = document.getElementById("form_action2");
form2.onsubmit = function (e) {
    e.preventDefault();
    var params = '';
    for (var i = 0; i < document.getElementById("form_action2").elements.length - 1; i++) {
        var fieldName = document.getElementById("form_action2").elements[i].name;
        var fieldValue = document.getElementById("form_action2").elements[i].value;
        params += fieldName + '=' + fieldValue + '&';
    }
    console.log(params);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseXML != null) {
                    var count;
                }
            }
        }
    }
    request.open("GET", params, true);
    request.send(null);
}

let form3 = document.getElementById("form_action3");
form3.onsubmit = function (e) {
    e.preventDefault();
    var params = '';
    for (var i = 0; i < document.getElementById("form_action3").elements.length - 1; i++) {
        var fieldName = document.getElementById("form_action3").elements[i].name;
        var fieldValue = document.getElementById("form_action3").elements[i].value;
        params += fieldName + '=' + fieldValue + '&';
    }
    console.log(params);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseXML != null) {
                    var count;
                }
            }
        }
    }
    request.open("GET", params, true);
    request.send(null);
}

let form4 = document.getElementById("form_action4");
form4.onsubmit = function (e) {
    e.preventDefault();
    var params = '';
    for (var i = 0; i < document.getElementById("form_action4").elements.length - 1; i++) {
        var fieldName = document.getElementById("form_action4").elements[i].name;
        var fieldValue = document.getElementById("form_action4").elements[i].value;
        params += fieldName + '=' + fieldValue + '&';
    }
    console.log(params);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseXML != null) {
                    var count;
                }
            }
        }
    }
    request.open("GET", params, true);
    request.send(null);
}