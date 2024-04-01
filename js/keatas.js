
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("back-to-top").style.display = "block";
        } else {
            document.getElementById("back-to-top").style.display = "none";
        }
    }

    // JavaScript untuk kembali ke atas saat tombol diklik
    document.getElementById("back-to-top").addEventListener("click", function(event) {
        event.preventDefault();
        document.documentElement.scrollTop = 0;
        document.body.scrollTop = 0;
    });