<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMAH SINGGAH</title>
    <link rel="stylesheet" href="Bootstrap 5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
</head>
<body>
    <div class="container-fluid">
        <section class="header-section">
            <div class="container">
                <section class="navigation-section">
                    <nav class="navbar navbar-expand-lg justify-content-end ">
                        <div class="container fixed-position p-0" > 
                            <a class="navbar-brand nav-position ms-2" href="#" style="margin-right: 100px;"><img src="img/logopilem.jpg" alt="Logo" ></a>
   
                            <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                                <ul class="navbar-nav nav ms-auto navbar-right">
                                    <li class="nav-item ms-4">
                                        <a class="nav-link nav-position" href="../index.html">Beranda</a>
                                    </li>
                                    <li class="nav-item ms-4">
                                        <a class="nav-link nav-position" href="#why-us-section">Rekomendasi</a>
                                    </li>
                                    <li class="nav-item ms-4">
                                        <a class="nav-link nav-position" href="#testimony-section">Blog</a>
                                    </li>
                                    <li class="nav-item ms-4">
                                        <a class="nav-link nav-position" href="#faq-section">FAQ</a>
                                    </li>
                                    <li class="nav-item ms-4">
                                        <a class="nav-link nav-position p-0" href="#"><button
                                                class="btn-register">Halaman Utama</button></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </section>
                <div class="video-container">
                    <h2>Video Favorit Kami</h2>
                    <iframe
                    frameborder="0"  
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oi3XOuFADXU?si=aYEtY_i9U1IoN1SJ" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; 
                web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="sinopsis" id="sinopsis">
                    <h2>
                        Sinopsis
                    </h2>
                    <p>mengisahkan Seorang laki laki yang mempunyai teman baru di lingkungan rumahnya, persahabatan mereka 
                        dimulai sejak Tari memberikan sebuah kopi buatan nya kepada Dika dan waktu berlalu akhirnya mereka semakin dekat dan Dika harus jatuh hati
                        kepada Lestari, namun karna Dika adalah tipikal Cowo yang gugupan, dia selalu tak bisa mengatakan apa yang ia rasakan, 
                        hingga beberapa hal yang tidak mengenakan pun muncul dan membuat Dika semakin sulit untuk memiliki Hati Lestari
                    </p>
                </div>

            </div>
        </section> 

        <section class="why-us-section" id="why-us-section">
            <h2>Pemain</h2>
            <p>Beberapa pemain dari Film Rumah Singgah</p>
        
            <!-- Kontainer pemain -->
            <div class="row player-container" id="player-container">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/reva.jfif" class="player-image" alt="24">
                        <p>reva</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/mahardika.jfif" class="player-image" alt="24">
                        <p>mahardika</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/vianrar.jpg" class="player-image" alt="24">
                        <p>vianrar</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/imajinasihin.jpg" class="player-image" alt="24">
                        <p>imajinasihin</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/reva.jfif" class="player-image" alt="24">
                        <p>reva</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/mahardika.jfif" class="player-image" alt="24">
                        <p>mahardika</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/vianrar.jpg" class="player-image" alt="24">
                        <p>vianrar</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="img/mahardika.jfif" class="player-image" alt="24">
                        <p>mahardika</p>
                    </div>
                </div>
            </div>
        </section>
        
        

        <section class="comments-section">
            <h2>Komentar</h2>
            <div class="comment-container">
            <?php
                // Memasukkan atau memanggil koneksi database
                include "koneksi.php";

                // Mengambil komentar dan database 
                $result = $conn->query("SELECT name, comment, created_ad FROM comments ORDER BY created_ad DESC");

                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="comment">';
                            echo '<p class="comment-author"><strong>' . htmlspecialchars($row['name']) . '</strong></p>';
                            echo '<p class="comment-text">' . htmlspecialchars($row['comment']) . '</p>';
                            echo '</div>'; 
                        }
                    } else {
                        echo '<p>Tidak Ada Komentar</p>';
                    }
                } else {
                    echo '<p>Error fetching comments: ' . htmlspecialchars($conn->error) . '</p>';
                }

                $conn->close();
                ?>
                
                <div class="comment">
                    <p class="comment-author">Rahma Icha</p>
                    <p class="comment-text">Terimakasih!</p>
                </div>
                <!-- Tambahkan komentar lain di sini -->
            </div>
        
            <div class="comment-form">
                <h3>Tambahkan Komentar</h3>
                <form method="POST" action="submit_comment.php">
                    <input type="text" placeholder="Nama" name="name"required>
                    <textarea placeholder="Komentar" name="comment"required></textarea>
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </section>
        
        <section class="why-us-section" id="why-us-section">
            <h2>Rilis</h2>
            <p>Tahun 2022</p>
    
            <h2>Sutradara</h2>
            <p>Iqbal Habibur</p>
            <h2>Perusahaan Produksi</h2>
            <p>Falcon Picturs Starvicion</p>
        </section>