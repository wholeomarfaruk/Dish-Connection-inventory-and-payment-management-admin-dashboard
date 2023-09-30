// function toggle_one(data){
// var btn = data.seletor.btn;
// var toggle_tab= data.seletor.toggle_tab;
// console.log(data);

//     $(toggle_tab).slideToggle("slow"); 
// }

$(document).on('click', '.addnewarea', function () {
    var data = {
        seletor: {
            btn: ".addnewarea",
            toggle_tab: ".area_input"
        }
    };

    toggle_one(data);
}); 