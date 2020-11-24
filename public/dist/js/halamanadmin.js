var nim = 0;
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#ktmverifikasi").dataTable({
        // searching: false,
        paging: false,
        order: [[2, "asc"]],
        columnDefs: [{ orderable: false, targets: 5 }],
    });
    $(".liatKtm").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr("href"),
            dataType: "json",
            success: function (ntap) {
                $(".ktmmodal").html(ntap[0]);
                $(".ktmmodalfooter").html(ntap[1]);
            },
        });
        $("#ktm").modal("show");
    });
    $(".hapusPemilih").submit(function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Anda Yakin?",
            text: "Anda tidak bisa mengembalikan lagi",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yap!",
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "DELETE",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success: function (msg) {
                        if (msg == "Sukses") {
                            Swal.fire(
                                "Berhasil!",
                                "Data Pemilih sudah di hapus!",
                                "success"
                            ).then((result) => {
                                if (result.value) {
                                    window.location.href = $(location).attr(
                                        "href"
                                    );
                                }
                            });
                        } else {
                            Swal.fire(
                                "Gagal",
                                "Data pemilih gagal di hapus",
                                "error"
                            );
                        }
                    },
                });
            }
        });
    });
    ubahwaktu();
    $(".waktu1").click(function () {
        var ok = $(this).val().split("_");
        nim = ok[1];
        $(".waktuh" + nim).val(ok[0]);
    });
    $(".waktu2").click(function () {
        var ok = $(this).val().split("_");
        nim = ok[1];
        $(".waktuh" + nim).val(ok[0]);
    });
    $(".waktu3").click(function () {
        var ok = $(this).val().split("_");
        nim = ok[1];
        $(".waktuh" + nim).val(ok[0]);
    });
    $(".waktumilih").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            dataType: "html",
            success: function (data) {
                $(".waktuvotingnih" + nim).val(data);
                ubahwaktu();
            },
        });
    });
});
function ubahwaktu() {
    var waktu = $(".waktuvotingnih" + nim).val();
    if (waktu == 1) {
        $(".waktu1" + nim)
            .removeClass("btn-outline-primary")
            .addClass("btn-primary");
        $(".waktu1" + nim).attr("disabled", "disabled");
        $(".waktu2" + nim)
            .removeClass("btn-primary")
            .addClass("btn-outline-primary");
        $(".waktu2" + nim).removeAttr("disabled");
        $(".waktu3" + nim)
            .removeClass("btn-primary")
            .addClass("btn-outline-primary");
        $(".waktu3" + nim).removeAttr("disabled");
    } else if (waktu == 2) {
        $(".waktu2" + nim)
            .removeClass("btn-outline-primary")
            .addClass("btn-primary");
        $(".waktu2" + nim).attr("disabled", "disabled");
        $(".waktu1" + nim)
            .removeClass("btn-primary")
            .addClass("btn-outline-primary");
        $(".waktu1" + nim).removeAttr("disabled");
        $(".waktu3" + nim)
            .removeClass("btn-primary")
            .addClass("btn-outline-primary");
        $(".waktu3" + nim).removeAttr("disabled");
    } else if (waktu == 3) {
        $(".waktu3" + nim)
            .removeClass("btn-outline-primary")
            .addClass("btn-primary");
        $(".waktu3" + nim).attr("disabled", "disabled");
        $(".waktu2" + nim)
            .removeClass("btn-primary")
            .addClass("btn-outline-primary");
        $(".waktu2" + nim).removeAttr("disabled");
        $(".waktu1" + nim)
            .removeClass("btn-primary")
            .addClass("btn-outline-primary");
        $(".waktu1" + nim).removeAttr("disabled");
    }
}
function bukti() {
    $(".konfirm").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "PATCH",
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function (msg) {
                if (msg == "Sukses") {
                    Swal.fire(
                        "Sukses",
                        "KTM/KRM Berhasil di Ubah Status",
                        "success"
                    ).then((result) => {
                        if (result.value) {
                            window.location.href = $(location).attr("href");
                        }
                    });
                } else {
                    Swal.fire("Gagal", "KTM/KRM Gagal di Konfirmasi", "error");
                }
            },
        });
    });
}
