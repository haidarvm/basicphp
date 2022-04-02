// let form1 = document.getElementById("form_action1");
// form1.onsubmit = function (e) {
//     e.preventDefault();
//     var params = '';
//     for (var i = 0; i < document.getElementById("form_action1").elements.length - 1; i++) {
//         var fieldName = document.getElementById("form_action1").elements[i].name;
//         var fieldValue = document.getElementById("form_action1").elements[i].value;
//         params += fieldName + '=' + fieldValue + '&';
//     }
//     console.log(params);
//     var request = new XMLHttpRequest();
//     request.onreadystatechange = function () {
//         if (this.readyState == 4) {
//             if (this.status == 200) {
//                 if (this.responseXML != null) {
//                     var count;
//                 }
//             }
//         }
//     }
//     request.open("GET", params, true);
//     request.send(null);
// }

// $('form').on('submit',alert("form submit"));


jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$(".btn").click(function (event) {
    // $('.needs-validation').on('submit', function (e) {
    var d = $(this).attr("data-num");
    // alert(d);
    var form = $('.form' + d);
    var formData = $(".form" + d).serialize();

    var setting_id = ($('input[type=hidden]').val()) ? '&setting_id=' + $('input[type=hidden]').val() : '';
    // console.log(setting_id);
    console.log(form.valid());
    if (form.valid() == false) {

    } else {
        formData += setting_id;
        // console.log(formData);
        $.post(URL + "json/formdata", formData, function (response) {
            if (!isNaN(response)) {
                console.log(response);
                $("input[name*='setting_id']").val(response);
            }
            $(".result").html(response);
            // alert("Data: " + formData + "\nStatus: " + status);
        });

        event.preventDefault();
    }


});



// $(".needs-validation").submit(function (event) {
//     var str = $(".needs-validation").serialize();
//     var firstfield_value = event.currentTarget[0].value;
//     console.log(str);
//     event.preventDefault();
// });
// $("button").click(function () {
//     $.post("demo_test.asp", function (data, status) {
//         alert("Data: " + data + "\nStatus: " + status);
//     });
// });