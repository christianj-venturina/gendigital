$(document).ready(function () {
    $(".view").click(function () {
        let p_id = $(this).prop("id");
        let c_id = $(this).closest("td").prop("id");

        if (c_id == 1) {
            window.location.href = "/admin/mobile/view/" + p_id;
        } else if (c_id == 2) {
            window.location.href = "/admin/audio/view/" + p_id;
        } else {
            window.location.href = "/admin/laptop/view/" + p_id;
        }
    });

    $(".edit").click(function () {
        let p_id = $(this).prop("id");
        let c_id = $(this).closest("td").prop("id");

        if (c_id == 1) {
            window.location.href = "/admin/mobile/edit/" + p_id;
        } else if (c_id == 2) {
            window.location.href = "/admin/audio/edit/" + p_id;
        } else {
            window.location.href = "/admin/laptop/edit/" + p_id;
        }
    });
});
