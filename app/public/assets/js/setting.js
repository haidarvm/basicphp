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

function showSwal(alert, status) {
    swal("", alert, status);
}

jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$(".btn").click(function(event) {
    var d = $(this).attr("data-num");
    var form = $('.form' + d);
    var formData = $(".form" + d).serialize();

    var setting_id = ($('input[type=hidden]').val()) ? '&setting_id=' + $('input[type=hidden]').val() : '';
    // console.log(form.valid());
    if (form.valid() == false) {

    } else {
        formData += setting_id;
        // console.log(formData);
        $.post(URL + "json/formdata", formData, function(response) {
            if (!isNaN(response)) {
                console.log(response);
                $("input[name*='setting_id']").val(response);
            }
            // console.log(response);
            const obj = JSON.parse(response);
            // console.log(obj.status);
            if (obj.status) {
                showSwal("Success Updated", 'success');
            } else {
                showSwal("Error!", 'error');
            }

            $(".result").html(response);
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