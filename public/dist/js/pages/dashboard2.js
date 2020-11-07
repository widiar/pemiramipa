$(document).ready(function () {
    $(".prev").hide();
    $(".prodi").hide();
    var klik = 0;
    $(".next").click(function () {
        if ($('input[name="calonbem"]:checked').length == 1) { //jika sudah di pilih
            Swal.fire({
                    title: "Anda Yakin?",
                    text:
                        "Anda tidak bisa pindah ke lain hati lagi jika sudah memilih",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yap!",
                }).then((result) => {
                    if(result.value){
                        $(".bem").hide(300);
                        $(".prodi").show(300);
                        $(".prev").show(300);
                        $(this).removeAttr("type").attr("type", "submit");
                        $(this).html("Submit");
                        if (klik < 2) klik++;
                    }
                })
        } else {
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.options.closeDuration = 100;
            toastr.error(
                "Silahkan Memilih Calon BEM untuk melanjutkan.",
                "JANGAN GOLPUT!"
            );
        }
        console.log(klik);
    });
    $(".prev").click(function () {
        $(".prodi").hide(300);
        $(".bem").show(300);
        $(this).hide();
        $(".next").removeAttr("type").attr("type", "button");
        $(".next").html("Next");
        klik = 0;
    });
    $(".masukoke").submit(function (e) {
        e.preventDefault();
        if (klik == 2) {
            if ($('input[name="calonhima"]:checked').length == 1) {
                Swal.fire({
                    title: "Anda Yakin?",
                    text:
                        "Anda tidak bisa pindah ke lain hati lagi jika sudah memilih",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yap!",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: $(this).attr("method"),
                            url: $(this).attr("action"),
                            data: $(this).serialize(),
                            success: function (msg) {
                                if (msg == "Sukses") {
                                    Swal.fire(
                                        "Berhasil!",
                                        "Anda telah berhasil memilih!",
                                        "success"
                                    ).then((result) => {
                                        if (result.value) {
                                            window.location.href = $(
                                                location
                                            ).attr("href");
                                        }
                                    });
                                } else {
                                    Swal.fire(
                                        "Gagal",
                                        "Terjadi kesalahan",
                                        "error"
                                    );
                                }
                            },
                        });
                    }
                });
            } else {
                toastr.options.closeButton = true;
                toastr.options.progressBar = true;
                toastr.options.closeDuration = 100;
                toastr.error(
                    "Silahkan Memilih Calon HIMA untuk melanjutkan.",
                    "JANGAN GOLPUT DONG!"
                );
            }
        }
    });
    $(".logout").click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: "LogOut",
            text: "Anda yakin ingin logout?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Yoi",
        }).then((result) => {
            if (result.value) {
                window.location.href = $(this).attr("href");
            }
        });
    });
    //countdown
    $("#clock").countdown("2020/11/29 16:00:00", function (event) {
        var $this = $(this).html(
            event.strftime(
                "" +
                    "<div><span>%n</span><span>Hari</span></div>" +
                    "<div><span>%H</span><span>Jam</span></div>" +
                    "<div><span>%M</span><span>Menit</span></div>" +
                    "<div><span>%S</span><span>Detik</span></div>"
            )
        );
    });
});
