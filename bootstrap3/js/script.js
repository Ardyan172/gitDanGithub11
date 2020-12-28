
// jquery jalankan halaman ketika siap lalu jalankan fungsi berikut
    $(".halaman-scroll").on("click", function(e) {
    // jquery cari class .halaman-scroll kalau ketemu lakukan event click lalu jalankan fungsi berikut :

        let tujuan = $(this).attr("href");
        // jadi this itu adalah a href yang kita klik saja
        // kan a href itu ada 4
        // jquery cari element yang bersangkutan lalu saya ambil attribut a href
        // kalau di cetak di console contoh hasilnya #about
        // karena href tujuannya ke section

        let elementTujuan = $(tujuan);
        // // let elementTujuan isinya section yang bersangkutan
        // // contoh section#about.about

        // // console.log(elementTujuan.offset().top);
        // // offset itu megukur jarak, sementara top itu atas
        // // jadi ukur jarak section yang bersangkutan ke atas sekali

        // // console.log($('body').scrollTop());
        // // scroll top sama seperti offset namun ketika halaman nya di scroll maka ukurannya akan berubah ubah

        // pindahkan
        $("body").animate({
        // animate = animasi
            scrollTop: elementTujuan.offset().top - 50
        });
    });


    // efek parallax
    $(window).scroll(function() {
    // JQuery panggil element window lalu ketika di scroll jalankan fungsi berikut
        let gambar =  $(this).scrollTop();
        // JQuery panggil window yang bersangkutan lalu ukur jarak ketika discroll

        // class jumbotron
        $('.jumbotron h1').css({
            'transform' : 'translate('+gambar/6 +'%, 0px)',
            // ketika window di scroll h1 bergeser secara horizontal ke kanan
            // var gambar dibungkus dengan kutip agar jadi variabel
            // tanda + untuk penggabung string
        });

        $('.jumbotron p').css({
            'transform' : 'translate(0px, '+ gambar*2 +'%)'
        });


        // class portfolio
        // kita terapkan efek parallax LANDING ELEMENT
        // LANDING ELEMENT adalah element yang muncul ketika scroll nya pada ketinggian tertentu
        if( gambar > $('.portfolio').offset().top - 150 ) {
            // jika window scroll lebih besar dari tinggi  class portfolio
            // .offset().top itu mengukur jarak keatas
            // misalnya ketinggian class portfolio 400 
            $('.portfolio .thumbnail').each(function(i) {
            // class thumbnail ada 6 lalu setiap class punya element gambar
            // nanti saya akan berikan fungsi kepada tiap tiap element di dalamnya
            // fungsinya yaitu menambahkan class muncul tapi menambahkannya saya akan kasik waktu
            // misalnya saya kasi ke element pertama setelah itu tunggu sekian detik menculkan element yang kedua dan seterusnya
            // EACH itu untuk setiap element
            // jadi setiap element milik class thumbnail kita kasi fungsi

                setTimeout(function() {
                // setTimeout adalah kita akan menjalankan sesuatu tapi nunggu dulu beberapa detik tergantung kita kasi nya berapa detik
                    $('.portfolio .thumbnail').eq(i).addClass('muncul');
                    // pada saat ketinggian tertentu JQUERY panggil class thumbnail lalu tambahkan class muncul untuk CSS
                    // eq itu element yang keberapa dari class thumbnail, saya mau satu satu jadi element 1 dulu baru 2 dan seterusnya
                }, 300 * (i+1));
                // 300 itu 0.3 detik
                // jadi tunggu dulu 0.3 detik setelah itu tampilkan gambar satu persatu
                // indeks itu dimulai dari 0
            });
        };
    });