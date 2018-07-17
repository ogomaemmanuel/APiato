

var states = [
    'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
    'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia',
    'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa',
    'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland',
    'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi',
    'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
    'New Jersey', 'New Mexico', 'New York', 'North Carolina',
    'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
    'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee',
    'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington',
    'West Virginia', 'Wisconsin', 'Wyoming'
];
//
// $(function() {
//     $("#memberautocomplete").autocomplete({
//         source:[states]
//     });
// });



$("#memberautocomplete").autocomplete({

    source: function (request, response) {

        var param = { keyword: $('#memberautocomplete').val() };

    console.log('param', 'auto complete ');
    $.ajax({
        url: "/members/search",
        data: JSON.stringify(param),
        dataType: "json",
        type: "GET",
        contentType: "application/json; charset=utf-8",
        dataFilter: function (data) {
            return data;
        },
        success: function (data) {
            response($.map(data.d, function (item) {
                console.log("Auto Complete");
                return {

                    value: item
                }
            }))
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(textStatus);
        }
    });

    },
    minLength: 2
});