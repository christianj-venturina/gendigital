$(document).ready(function () {
    let grand_total = 0;

    $(".total").each(function () {
        let id = $(this).prop("id").replace("total_", "");
        let unit_price = $("#price_" + id)
            .text()
            .replaceAll("₱", "")
            .replaceAll(",", "");
        let quantity = $("#quantity_" + id).text();
        let total = unit_price * quantity;
        grand_total += total;
        $("#total_" + id).text("₱" + " " + total.toLocaleString());
    });

    $("#gt_amount").text(grand_total.toLocaleString());
});
