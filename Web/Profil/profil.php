<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Twitter profile view">
    <meta name="keywords" content="Twitter Clone, Sosial Media, Postingan, Follower">
    <meta name="author" content="M. Sulthan Mahir Fadha">

    <title>Twitter Kw</title>
    <!-- Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="profil.css">
</head>

<body>
    <!-- SideBar -->
    <div class="sidebar">
        <div class="iconx">
            <i class="fab fa-x-twitter" style="color: white;font-size: 30px; text-align: center;"></i>
        </div>

        <div class="sidebarOption" style="color: white;">
            <span class="material-symbols-outlined" style="font-size: 31px; width: 34px; text-align: center;">
                home
            </span>
        </div>

        <div class="sidebarOption" style="color: white;">
            <span class="material-symbols-outlined" style="font-size: 32px; width: 30px; text-align: center;">
                search
            </span>
        </div>

        <div class=" sidebarOption" style="color: white;">
            <span class="material-symbols-outlined" style="font-size: 35px; width: 30px; text-align: center;">
                notifications
            </span>
        </div>

        <div class="sidebarOption" style="color: white;">
            <span class="material-symbols-outlined" style="font-size: 30px; width: 35px; text-align: center;">
                mail
            </span>
        </div>

        <div class="sidebarOption" style="color: white;">
            <img src="image/icongrok.png" alt="Grok Logo" width="31px" height="30px">
        </div>

        <div class="sidebarOption" style="color: white;">
            <span class="material-symbols-outlined" style="font-size: 30px; width: 32px; text-align: center;">
                group
            </span>
        </div>

        <div class="sidebarOption" style="color: white;">
            <span class="material-symbols-outlined" style="font-size: 30px; width: 32px; text-align: center;">
                person
            </span>
        </div>

        <div class="sidebarOption" style="color: white;">
            <span class="material-symbols-outlined" style="font-size: 33px; width: 30px; text-align: center;">
                more_horiz
            </span>
        </div>

        <div class="sidebarOption" style="color: white;">
            <img src="image/iconpost.png" alt="Grok Logo" width="35px" height="35px" onclick="openPost()">
        </div>

            <div class="profil">
                <img src="image/bernard.jpg" alt="Profil">
            </div>
        </div>
    <!-- Sidebar -->
    <div id="overlay" class="modal-overlay">
        <div class="modal">
            <header>
                <span class="title">New Post</span>
                <button onclick="closePost()" style="background:none;border:none;color:#fff;font-size:1.2em;">✕</button>
            </header>
            <main>
                <textarea id="content" placeholder="Apa yang sedang terjadi?"></textarea>
            </main>
            <footer>
                <button id="postBtn" class="btn-post" disabled>Post</button>
            </footer>
        </div>
        </div>
    <!-- Profil -->
    <div class="profilutama">
        <div class="profilheader">
            <i class="fas fa-arrow-left" style="color: rgb(255, 255, 255);"></i>
            <div class="namaprofilheader">
                <span class="nama" style="color: white;"><strong>M. Sulthan Mahir Fadha</strong></span>
                <p class="postcount" style="color: gray;">0 posts</p>
            </div>
        </div>

        <div class="background">
            <img src="image/bernard-bear-bg.jpg" alt="Background">
        </div>

        <div class="profilinfo">
            <img src="image/bernard.jpg" alt="Profil">
            <button class="btn_edit"><span>Edit profile</span></button>
            <h3>M. Sulthan Mahir Fadha</h3>
            <p>@mahir_fadha</p>
            <p><i class="fas fa-calendar-alt"></i> Joined June 2005</p>
            <p><strong>1000</strong> Followers <strong> 0</strong> Following</p>
        </div>

        <div class="pilihanprofil">
            <span class="aktif">Posts</span>
            <span>Replies</span>
            <span>Highlights</span>
            <span>Articles</span>
            <span>Media</span>
            <span>Likes</span>
        </div>

        <?php
        // Koneksi ke database
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=postgres', 'postgres', 'Mahir');

        // Query ambil semua post terbaru
        $stmt = $pdo->query("SELECT username, content, created_at FROM post ORDER BY created_at DESC");

        // Tampilkan satu per satu
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="componentPostingan" style="display: flex;padding-left: 20px;padding-right: 20px; padding-top: 14px;border-bottom: 0.2px solid rgb(69, 69, 69)">';
            echo '<div class="ppPostingan">';
            echo '<img src="image/bernard.jpg" alt="Foto Profil" style="width: 42px; height: 42px;border-radius: 100px;margin-bottom:40px">';
            echo '</div>';
            echo '<div class="postingan" style="padding-left:10px">';
            echo '<div class="headerPostingan" style="display: flex;  align-items: center; align-content: space-between;">';
            echo '<strong style="font-size:15px;color: white;">M. Sulthan Mahir Fadha</strong>';
            echo '<small style="padding-left:4px;font-size:15px;color: gray;">@'.($row['username']).'</small>';
            echo '<small style="padding-left: 4px;font-size:15px;color: gray">'.($row['created_at']).'</small>';
            echo '</div>';
            echo '<div class="midPostingan" style="display: flex;color:white">';
            echo '<p style="font-size:15px;margin-top:8px">'.($row['content']).'</p>';
            echo '</div>';
            echo '<div class="footerPos" style="display: flex;">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>

        <div class="rekomendasifollower">
            <h4>Who to Follow</h4>
            <div class="saran">
                <div class="pp">
                    <img src="image/agus.jpeg" alt="Agus">
                </div>
                <div class="usernameRekomendasi">
                    <h5>Ki.Agus</h5>
                    <p>@agussangraja</p>
                </div>
                <div class="btnFollowRekomendasi">
                    <button>Follow</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Profil -->

    <!-- Last -->
    <div class="widget">
        <div class="search" style="color: white;">
            <span class="material-symbols-outlined search-icon">
                search
            </span>
            <input type="text" placeholder="Search">
        </div>

        <div class="mightlike">
            <h3>You might like</h3>
            <div class="profil-saran">
                <img src="image/agus.jpeg" alt="Agus">
                <div class="profilmight">
                    <h5>Ki.Agus</h5>
                    <p>@agussangraja</p>
                </div>
                <button>Follow</button>
            </div>
            <div class="profil-saran">
                <img src="image/agus.jpeg" alt="Edi">
                <div class="profilmight">
                    <h5>EdiSusanto</h5>
                    <p>@edisus</p>
                </div>
                <button>Follow</button>
            </div>
            <div class="profil-saran">
                <img src="image/agus.jpeg" alt="Edi">
                <div class="profilmight">
                    <h5>BasukiCahaya</h5>
                    <p>@BasCah</p>
                </div>
                <button>Follow</button>
            </div>
            <div class="showmore">
                <h5>Show more</h5>
            </div>
        </div>
        <div class="whathappening">
            <h3>What's happening</h3>
            <div class="pertama">
                <div class="textPertama">
                    <p>Trending in Indonesia</p>
                    <h6>Mobile Legends</h6>
                    <p>100k posts</p>
                </div>
                <span class="material-symbols-outlined material-symbols-outlined-more"
                    style="width: 30px; text-align: center;">
                    more_horiz
                </span>
            </div>

            <div class="kedua">
                <div class="teksKedua">
                    <p>Trending in Indonesxia</p>
                    <h6>Indonesia Gelap</h6>
                    <p>2.564 posts</p>
                </div>
                <span class="material-symbols-outlined material-symbols-outlined-more"
                    style="width: 30px; text-align: center;">
                    more_horiz
                </span>
            </div>
                <div class="ketiga">
                    <div class="teksKetiga">
                        <p>Trending in Indonesia</p>
                        <h6>Fufufafa</h6>
                        <p>1.777 posts</p>
                    </div>
                <span class="material-symbols-outlined material-symbols-outlined-more"
                    style="width: 30px; text-align: center;">
                    more_horiz
                </span>
            </div>
        </div>
    </div>
    <!-- Last -->

</body>
<script>
    const overlay = document.getElementById('overlay');
    const textarea = document.getElementById('content');
    const btn = document.getElementById('postBtn');

    function openPost() {
      overlay.classList.add('active');
      textarea.focus();
    }

    function closePost() {
        overlay.classList.remove('active');
        textarea.value = '';
        btn.disabled = true;
    }

    textarea.addEventListener('input', () => {
      btn.disabled = textarea.value.trim() === '';
    });
</script>
</html>