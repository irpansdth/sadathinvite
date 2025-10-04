<?php
// Load ucapan
$wishes = [];
if (file_exists("data/wishes.json")) {
    $json = file_get_contents("data/wishes.json");
    $wishes = json_decode($json, true);
    if (!is_array($wishes)) {
        $wishes = [];
    }
}

// Handle submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["nama"]) && !empty($_POST["kehadiran"])) {
        $nama = htmlspecialchars($_POST["nama"]);
        $kehadiran = htmlspecialchars($_POST["kehadiran"]);
        $line = "$nama,$kehadiran\n";
        file_put_contents("data/rsvp.csv", $line, FILE_APPEND);
    }

    if (!empty($_POST["ucapan"])) {
        $ucapan = htmlspecialchars($_POST["ucapan"]);
        $wishes[] = $ucapan;
        file_put_contents("data/wishes.json", json_encode($wishes, JSON_PRETTY_PRINT));
    }

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pernikahan Firman & Eva</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Great+Vibes&display=swap" rel="stylesheet">
  <!-- META SEO -->
<meta name="description" content="Undangan digital pernikahan Firman Purnama & Eva Yulianti | Minggu, 12 Oktober 2025 | Kediaman mempelai.">
<meta name="keywords" content="Undangan Pernikahan, Firman Eva, 12 Oktober 2025, Undangan Digital, Wedding Invitation">
<meta name="author" content="Irpaninvite">

<!-- OPEN GRAPH / WHATSAPP / FACEBOOK -->
<meta property="og:title" content="Undangan Pernikahan Firman & Eva">
<meta property="og:description" content="Minggu, 12 Oktober 2025 | Kediaman Mempelai. Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu.">
<meta property="og:image" content="https://sadathinvite.wuaze.com/assets/hero.jpg">
<meta property="og:type" content="website">
<meta property="og:url" content="https://sadathinvite.wuaze.com/">

<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Undangan Pernikahan Firman & Eva">
<meta name="twitter:description" content="Minggu, 12 Oktober 2025 | Kediaman Mempelai.">
<meta name="twitter:image" content="http://sadathinvite.wuaze.com/assets/hero.jpg">

<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

</head>
<body>

<!-- BACKSOUND -->
 <audio id="bg-music" autoplay loop>
    <source src="assets/music.mp3" type="audio/mpeg">
  </audio>

  <!-- Tombol toggle musik -->
  <div id="music-toggle" class="music-btn">🔊</div>



<!-- HERO -->
<section class="hero" id="hero">
  <img src="assets/hero.jpg" alt="Cover Undangan">
  <div class="overlay">
    <h1 class="bride-groom">Firman & Eva</h1>
    <p class="date">Minggu, 12 Oktober 2025</p>
    <a href="#opening" class="btn">Buka Undangan</a>
  </div>
</section>

<!-- OPENING -->
<section class="opening" id="opening">
  <p>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan untukmu pasangan-pasangan dari jenismu sendiri, 
  agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang." <br>
  <em>(QS. Ar-Rum: 21)</em></p>
</section>

<!-- COUPLE -->
<section class="couple animate">
  <h2>Mempelai</h2>
  <div class="couple-grid">
    <!-- Pria -->
    <div class="person">
      <img src="assets/cpp.jpg" alt="Firman Purnama" class="bride-photo">
      <h3>Firman Purnama</h3>
      <p>Putra dari Bapak Sujana/Ajan (Alm) & Ibu Encop</p>
    </div>
    <div class="and">&</div>
    <!-- Wanita -->
    <div class="person">
      <img src="assets/cpw.jpg" alt="Eva Yulianti" class="bride-photo">
      <h3>Eva Yulianti</h3>
      <p>Putri dari Bapak Ija & Ibu Upen</p>
    </div>
  </div>
</section>

<!-- STORY -->
<section class="story">
  <h2>Our Story</h2>
  <div class="timeline">
    <div class="timeline-container left fade-in">
      <div class="content">
        <img src="assets/gallery1.jpg" alt="Pertemuan Pertama">
        <h3>Pertemuan Pertama</h3>
        <p>Takdir mempertemukan kami pada waktu yang tak terduga.
            Dari pertemuan sederhana itu, kami belajar bahwa cinta sering kali datang di saat yang paling tidak disangka.
            Saat itu, langkah kecil kami menjadi awal dari kisah panjang yang indah.</p>
      </div>
    </div>
    <div class="timeline-container right fade-in">
      <div class="content">
        <img src="assets/gallery2.jpg" alt="Menjalin Hubungan">
        <h3>Menjalin Hubungan</h3>
        <p>Dari pertemuan itu, tumbuhlah rasa yang tak bisa dijelaskan.
            Kami belajar saling memahami, saling mendukung, dan tumbuh bersama.
            Hingga akhirnya kami menyadari, bahwa cinta ini pantas diperjuangkan.</p>
      </div>
    </div>
    <div class="timeline-container left fade-in">
      <div class="content">
        <img src="assets/gallery3.jpg" alt="Lamaran">
        <h3>Lamaran</h3>
        <p>Dengan segala rasa syukur dan kebahagiaan,
            Kami berdua sepakat untuk melangkah ke tahap yang lebih serius.
          Dalam doa dan restu keluarga, kami mengikat janji sebagai tanda kesungguhan untuk bersama selamanya.</p>
      </div>
    </div>
  </div>
</section>

<!-- EVENT -->
<section class="event" id="event">
  <h2>Detail Acara</h2>
  <div class="event-detail">
    <h3>Ngunduh Mantu</h3>
    <p>Minggu, 12 Oktober 2025<br>Pukul 08.00 WIB</p>
    <p><strong>Lokasi:</strong><br>Kediaman Mempelai Pria<br>Kp. Asem Desa Cikuda, Kec. Parung Panjang, Kab. Bogor, Jawa Barat</p>
  </div>
  <div class="event-detail">
    <h3>Akad & Resepsi</h3>
    <p>Sabtu, 18 Oktober 2025<br>Pukul 09.00 WIB - Selesai</p>
    <p><strong>Lokasi:</strong><br>Kediaman Mempelai Wanita<br>
  </div>
</section>

<!-- COUNTDOWN -->
<section class="countdown">
  <h2>Hitung Mundur Menuju Hari Bahagia</h2>
  <div id="timer">
    <div><span id="days">0</span><br><small>Hari</small></div>
    <div><span id="hours">0</span><br><small>Jam</small></div>
    <div><span id="minutes">0</span><br><small>Menit</small></div>
    <div><span id="seconds">0</span><br><small>Detik</small></div>
  </div>
</section>

<!-- MAP -->
<section class="map">
  <h2>Lokasi Acara</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7930.59425217362!2d106.5792151!3d-6.3830616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1696180465000!5m2!1sid!2sid" 
      width="100%" height="350" style="border:0;" 
      allowfullscreen="" loading="lazy">
    </iframe>
  </div>
  <a href="https://www.google.com/maps/dir/?api=1&destination=-6.3830616,106.5792151" 
     target="_blank" class="btn">📍 Buka Lokasi di Google Maps</a>
</section>

<!-- GALLERY -->
<section class="gallery">
  <h2>Galeri Kami</h2>
  <div class="grid">
    <img src="assets/gallery1.jpg" alt="Gallery 1">
    <img src="assets/gallery2.jpg" alt="Gallery 2">
    <img src="assets/gallery3.jpg" alt="Gallery 3">
  </div>
</section>


<!-- GIFT -->
<section class="gift">
  <h2>Kirim Hadiah</h2>
  <p class="gift-desc">
    Apabila Bapak/Ibu/Saudara/i berkenan memberikan tanda kasih, dapat melalui rekening berikut:
  </p>
  
  <div class="gift-container">
    <div class="gift-card">
      <h3>Bank MANDIRI</h3>
      <p>No. Rekening: <strong>1760005162928</strong></p>
      <p>a.n Firman Purnama</p>
    </div>
  </div>
</section>


<!-- RSVP -->
<section class="rsvp">
  <h2>Konfirmasi Kehadiran</h2>
  <form method="POST">
    <input type="text" name="nama" placeholder="Nama Anda" required>
    <select name="kehadiran" required>
      <option value="">-- Pilih Kehadiran --</option>
      <option value="Hadir">Hadir</option>
      <option value="Tidak Hadir">Tidak Hadir</option>
    </select>
    <button type="submit">Kirim</button>
  </form>
</section>

<!-- WISHES -->
<section class="wishes">
  <h2>Ucapan & Doa</h2>
  <form method="POST">
    <textarea name="ucapan" placeholder="Tulis ucapan Anda..." required></textarea>
    <button type="submit">Kirim Ucapan</button>
  </form>
  <div class="wish-list">
    <?php if (count($wishes) > 0): ?>
      <?php foreach(array_reverse($wishes) as $wish): ?>
        <p>💌 <?= $wish ?></p>
      <?php endforeach; ?>
    <?php else: ?>
      <p><em>Belum ada ucapan...</em></p>
    <?php endif; ?>
  </div>
</section>

<!-- CLOSING -->
<section class="closing">
  <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu.</p>
  <p>Hormat Kami,<br><strong>Firman Purnama & Eva Yulianti</strong></p>
</section>

<footer>
  <p>Buat Undangan Digital Bersama</p>
  <p><strong>Sadathinvite</strong></p>
</footer>

<script>
// Fade-in animasi
const faders = document.querySelectorAll('.fade-in');
const appearOnScroll = new IntersectionObserver((entries, obs) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      obs.unobserve(entry.target);
    }
  });
}, { threshold: 0.3 });
faders.forEach(f => appearOnScroll.observe(f));

// Animasi couple section
const elements = document.querySelectorAll('.animate');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) e.target.classList.add('show');
  });
}, { threshold: 0.2 });
elements.forEach(el => observer.observe(el));

// Countdown
const countDownDate = new Date("Oct 12, 2025 08:00:00").getTime();
const x = setInterval(function() {
  const now = new Date().getTime();
  const distance = countDownDate - now;

  document.getElementById("days").innerText = Math.floor(distance / (1000 * 60 * 60 * 24));
  document.getElementById("hours").innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  document.getElementById("minutes").innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  document.getElementById("seconds").innerText = Math.floor((distance % (1000 * 60)) / 1000);

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "<p>Acara sudah dimulai 🎉</p>";
  }
}, 1000);

// Musik Control
const music = document.getElementById("bg-music");
const toggleBtn = document.getElementById("music-toggle");

// coba autoplay saat halaman load
window.addEventListener("load", () => {
  music.play().catch(() => {
    console.log("Autoplay diblokir browser. Musik akan jalan setelah user klik.");
  });
});

// toggle mute/unmute
toggleBtn.addEventListener("click", () => {
  if (music.paused) {
    music.play();
    toggleBtn.textContent = "🔊";
  } else {
    music.pause();
    toggleBtn.textContent = "🔇";
  }
});

</script>

</body>
</html>
