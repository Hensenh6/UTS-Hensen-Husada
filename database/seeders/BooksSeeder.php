<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books') -> insert(
            [
                'book_id' => 'BK001',
                'publisher_id' => 'PB001',
                'title' => 'Novel Autumn In Paris',
                'author' => 'Ilana Tan',
                'year' => 2021,
                'synopsis' => 'Tara Dupont menyukai Paris dan musim gugur. Ia mengira sudah memiliki segalanya dalam hidup… sampai ia bertemu Tatsuya Fujisawa yang susah ditebak dan selalu membangkitkan rasa penasarannya sejak awal. Tatsuya Fujisawa benci Paris dan musim gugur. Ia datang ke Paris untuk mencari orang yang menghancurkan hidupnya. Namun ia tidak menduga akan terpesona pada Tara Dupont, gadis yang cerewet tapi bisa menenangkan jiwa dan pikirannya... juga mengubah dunianya. Tara maupun Tatsuya sama sekali tidak menyadari benang yang menghubungkan mereka dengan masa lalu, adanya rahasia yang menghancurkan segala harapan, perasaan, dan keyakinan. Ketika kebenaran terungkap, tersingkap pula arti putus asa... arti tak berdaya... Kenyataan juga begitu menyakitkan hingga mendorong salah satu dari mereka ingin mengakhiri hidup.',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786020655802_Autumn_in_Paris_cov.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK002',
                'publisher_id' => 'PB001',
                'title' => 'Gadis Kretek (cover baru 2019)',
                'author' => 'Ratih Kumala',
                'year' => 2019,
                'synopsis' => 'Pak Raja sekarat. Dalam menanti ajal, ia memanggil satu nama perempuan yang bukan istrinya; Jeng Yah. Tiga anaknya, pewaris Kretek Djagad Raja, dimakan gundah. Sang ibu pun terbakar cemburu terlebih karena permintaan terakhir suaminya ingin bertemu Jeng Yah. Maka berpacu dengan malaikat maut, Lebas, Karim, dan Tegar, pergi ke pelosok Jawa untuk mencari Jeng Yah, sebelum ajal menjemput sang Ayah. Perjalanan itu bagai napak tilas bisnis dan rahasia keluarga. Lebas, Karim, dan Tegar bertemu dengan pelinting tua dan menguak asal-usul Kretek Djagad Raja hingga menjadi kretek nomor 1 di Indonesia. Lebih dari itu, ketiganya juga mengetahui kisah cinta ayah mereka dengar; Jeng Yah, yang ternyata adalah pemilik Kretek Gadis, kretek lokal Kota M yang terkenal pada zamannya. Apakah Lebas, Karim, dan Tegar akhirnya berhasil menemukan Jeng Yah? Gadis Kretek tidak sekadar bercerita tentang cinta dan pencarian jati diri para tokohnya. Dengan latar Kota M, Kudus, Jakarta, dari periode penjajahan Belanda hingga kemerdekaan, Gadis Kretek akan membawa pembaca berkenalan dengan perkembangan industri kretek di Indonesia. Kaya akan wangi tembakau. Sarat dengan aroma cinta.',
                'image' => 'https://cdn.gramedia.com/uploads/items/9789792281415_Gadis_Kretek_.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK003',
                'publisher_id' => 'PB001',
                'title' => 'Book Fair TSM - I Want Us',
                'author' => 'Astrid Tito',
                'year' => 2022,
                'synopsis' => '“Dia itu seperti gelombang yang menelanku bulat-bulat. Tapi, hei, salahkah? Aku cuma ingin memuntahkan dendam sepiku. Jadi, jawab pertanyaanku sekarang: Apa itu cinta?”—catatan harian Dara; coach, trainer, psikolog, founder DD Consulting “For me, love is just like the wind. We can’t see it, but we can feel it.”—perasaan Tio, facility inspector oil and gas company “Bagaimana kalau cinta nggak bisa dimiliki? Cuma rindu yang gigit jari? Sampai kapan? Sampai mati suri?”—catatan Abi, pemilik 2 restoran dan 9 waralaba “Cinta itu pelabuhan penat. Sesimpel itu.”—hati Aya, pemilik butik “Gue tetap percaya, cinta pertama nggak akan pernah mati. Sampai kapan pun. First love is true love.”—keyakinan Riana, HES representative oil and gas company “Love is sharing my lazy Sunday morning coffee with her. My missing piece of puzzle. She is the love. Yes, she is.”—desah Rico, direktur perusahaan “Cinta itu petualangan. Tahu ’kan rasanya bertualang? Adrenaline goes!”—pikiran Lando, pengacara Ini adalah kisah tentang persahabatan, percintaan, dan perselingkuhan. Ketika sudut mimpi hampir patah karena kegagalan, keegoisan, dan nafsu, tapi semua mampu dipersatukan kembali oleh cinta.',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786020361321_i-want-us_oBRk5OE.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK004',
                'publisher_id' => 'PB002',
                'title' => 'Angel Dares',
                'author' => 'Joss Stirling',
                'year' => 2021,
                'synopsis' => '“Angel—gadis periang dan hiperaktif yang terkadang ceroboh, mengikuti festival terbesar tahun ini bersama Seventh Edition. Menjadi penampil sebagai vokalis dan pemain biola, sekaligus menjalankan misi untuk membantu Will mencari pasangan jiwanya. Angel sangat senang karena itu artinya dia bisa bertemu dengan vokalis Gifted—Kurt Voss. Saat sedang menjalankan misi, dia bertemu dengan salah satu anggota band Black Belt—Marcus Cohen. Entah bagaimana, Angel menyukainya dan menduga bahwa Marcus adalah pasangan jiwanya. Namun, berkali-kali dia mencoba telepati, Marcus selalu menolak bahkan membencinya. Menganggap bahwa Angel hanyalah penggemar yang tidak waras. Hingga suatu ketika, seseorang anti-Savant hadir dan mengetahui keberadaan Angel. Menculiknya dan menenggelamkannya di lautan untuk menunjukkan talentanya. Dan untuk kesekian kalinya Angel mencoba telepati dengan Marcus untuk meminta tolong. Akankah Marcus menjawab telepatinya? Akankah Marcus menolong Angel saat band-nya sudah harus tampil?',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786230404825_Angel_Dares.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK005',
                'publisher_id' => 'PB002',
                'title' => 'Seri Komik Klasik Samkok 3: Seluruh Negeri Dalam Kekacauan',
                'author' => 'Yi Mun Yol',
                'year' => 2015,
                'synopsis' => '“Setelah kematian ayahnya, Sun Ce bertekad untuk meneruskan impian ayahnya. Dia pun berhasil menguasai wilayah Jiangdong. Sementara itu, Cao Cao yang digempur musuhnya harus merelakan kepergian Dian Wei. Dian Wei tewas demi melindungi Cao Cao. Yuan Shu yang berambisi untuk menjadi kaisar, namun sifatnya yang boros dan seenaknya menjadi bumerang baginya. Hidupnya berakhir dengan menyedihkan. Dengan banyaknya yang berambisi untuk menjadi penguasa, seluruh negeri pun berada dalam kekacauan. Siapakah yang akhirnya menjadi penguasa?',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786022499176_Seri-Komik-Kl.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK006',
                'publisher_id' => 'PB002',
                'title' => 'Kenya',
                'author' => 'Kincirmainan',
                'year' => 2019,
                'synopsis' => '“Menahan cinta menahun kepada Delta, Kenya pun akhirnya memberanikan diri untuk menyatakan cintanya kepada lelaki pujaannya itu pada pesta malam tahun baru. Namun siapa sangka, pada saat yang bersamaan, Delta justru mengumumkan pertunangannya dengan Bella, sahabat Kenya. Ia kecewa bukan main. Kekecewaan dan kemarahannya itu pun ia lampiaskan bersama Data, adik Delta. Dan mereka pun akhirnya menjalani hubungan dengan status friend with benefit. Meski dalam hati Kenya sesungguhnya ia ragu, bagaimana jika suatu hari jalan cintanya kepada Delta terbuka kembali, sementara dia sudah menjalin hubungan dengan Data?',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786232160644_Kenya.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK007',
                'publisher_id' => 'PB003',
                'title' => 'Beautiful Mining Expert',
                'author' => 'Nurul Izzati',
                'year' => 2020,
                'synopsis' => 'Kalila, seorang karyawan sebuah perusahaan tambang di Kalimantan. Kehidupan kerja terasa menyenangkan baginya, sampai suatu hari dia dikirim untuk dinas ke Jakarta oleh Revan, atasannya. Di masa awal dinasnya di Jakarta dia bertemu Al, sosok yang membuatnya jengkel setengah mati. Nahas, Kalila harus terus bertemu dengan Al sampai beberapa bulan ke depan. Al memang bukan pria baik hati. Dia tidak pernah serius dengan wanita sampai ia bertemu Kalila. Gadis mungil itu membuatnya jatuh hati. Sial, gadis itu tidak jatuh dengan mudah ke pelukannya. Baru kali ini dia kesulitan menaklukkan seorang gadis! Bukan hanya itu, perjuangan Al dipersulit dengan datangnya ‘saingan’ lama – dan sebuah rahasia yang coba ditutupi Kalila.',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786230020285_cover_beautiful_mining_expert_front.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK008',
                'publisher_id' => 'PB003',
                'title' => 'Legend of The Dragon Horn',
                'author' => 'Joseph Hengky H',
                'year' => 2014,
                'synopsis' => '“Wahai makhluk fana, ini adalah kedatanganku yang terakhir. Jika kalian berkehendak mendapatkan sesuatu yang akan menjadikan kalian melebihi makhluk fana manapun, bahkan keabadian, berikanlah apa yang layak kalian berikan padaku.” Demikianlah, tanduk naga itu menyimpan legenda. Menyimpan kisah duka dan selalu mengundang pertikaian... Siapakah sebenarnya yang berhak dan layak untuk memiliki tanduk naga yang legendaris ini?',
                'image' => 'https://cdn.gramedia.com/uploads/items/ID_EMK2014MTH07LOTDH_C.jpg'
            ]);
            DB::table('books') -> insert(
            [
                'book_id' => 'BK009',
                'publisher_id' => 'PB003',
                'title' => 'Where The Crawdads Sing',
                'author' => 'Delia Owens',
                'year' => 2022,
                'synopsis' => 'Selama bertahun-tahun, desas-desus tentang "Gadis Rawa" menghantui Barkley Cove, sebuah desa nelayan yang tenang. Kya Clark bertelanjang kaki dan liar; tidak layak untuk masyarakat yang sopan. Jadi pada akhir 1969, ketika Chase Andrews yang populer ditemukan tewas, penduduk setempat segera mencurigainya. Tapi Kya tidak seperti yang mereka katakan. Seorang naturalis terlahir hanya dengan satu hari sekolah, ia mengambil pelajaran hidup dari tanah itu, mempelajari cara-cara nyata dunia dari sinyal kunang-kunang yang tidak jujur. Tetapi sementara dia memiliki keterampilan untuk hidup dalam kesendirian, saatnya tiba ketika dia mendambakan untuk disentuh dan dicintai. Tertarik pada dua pemuda dari kota, yang masing-masing tertarik pada kecantikannya yang liar, Kya membuka dirinya ke dunia yang baru dan mengejutkan—sampai hal yang tidak terpikirkan terjadi.',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786230033742_cover_Where_The_Crawdads_Sing.jpg'
            ]);

    }
}
