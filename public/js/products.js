$(document).ready(function () {
    $(".col-lg-4").click(function () {
        let div_id = $(this).prop("id");
        let img = $(this).find("img");
        let category = img.prop("id");

        console.log(div_id);

        if (category == 3) {
            window.location.href = "/laptop/" + div_id;
        } else if (category == 1) {
            window.location.href = "/mobile/" + div_id;
        } else {
            window.location.href = "/audio/" + div_id;
        }
    });
});
