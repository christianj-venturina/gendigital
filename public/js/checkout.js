$(document).ready(function () {
    let grand_total = 0;

    $(".total").each(function () {
        grand_total += Number(
            $(this).text().replaceAll(",", "").replaceAll("₱", "")
        );
    });

    $("#gt_amount").text(grand_total.toLocaleString());

    $(".quantity").blur(function () {
        let id_number = $(this).prop("id").replace("quantity_", "");
        let quantity = $("#quantity_" + id_number).val();
        let price = $("#price_" + id_number).text();
        let total =
            quantity * Number(price.replaceAll(",", "").replaceAll("₱", ""));
        $("#total_" + id_number).text("₱" + total.toLocaleString());

        grand_total = 0;

        $(".total").each(function () {
            grand_total += Number(
                $(this).text().replaceAll(",", "").replaceAll("₱", "")
            );
        });

        $("#gt_amount").text(grand_total.toLocaleString());
    });
});
