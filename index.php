<?php
include 'config/koneksi.php';

/* =========================
   AMBIL DATA DARI DATABASE
========================= */

// Brand
$brandResult = mysqli_query($conn, "SELECT * FROM brand LIMIT 1");
$brandData = mysqli_fetch_assoc($brandResult);

// Profile
$profileResult = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$profileData = mysqli_fetch_assoc($profileResult);

// About
$aboutResult = mysqli_query($conn, "SELECT * FROM about LIMIT 1");
$aboutData = mysqli_fetch_assoc($aboutResult);

// Skills
$skillsResult = mysqli_query($conn, "SELECT * FROM skills ORDER BY id ASC");

// Projects
$projectsResult = mysqli_query($conn, "SELECT * FROM projects ORDER BY id ASC");

// Experiences
$experiencesResult = mysqli_query($conn, "SELECT * FROM experiences ORDER BY id ASC");

// Achievements
$achievementsResult = mysqli_query($conn, "SELECT * FROM achievements ORDER BY id ASC");

// Certificates
$certificatesResult = mysqli_query($conn, "SELECT * FROM certificates ORDER BY id ASC");

// Contacts
$contactsResult = mysqli_query($conn, "SELECT * FROM contacts ORDER BY id ASC");

/* =========================
   DATA DEFAULT
========================= */
$brandName = $brandData['brand_name'] ?? 'Portfolio';

$profileName = $profileData['name'] ?? 'User';
$profileIntro = $profileData['short_intro'] ?? 'Deskripsi singkat belum tersedia.';
$profileImage = $profileData['image'] ?? 'assets/default.jpg';

$aboutDescription = $aboutData['description'] ?? 'Deskripsi about belum tersedia.';

include 'partials/header.php';
?>

<!-- HERO -->
<header id="home" class="section hero-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="fw-bold mb-2">
                    Halo, aku <span class="text-info"><?= htmlspecialchars($profileName); ?></span>
                </h1>

                <p class="text-white-50 mt-3 mb-4">
                    <?= htmlspecialchars($profileIntro); ?>
                </p>

                <a class="btn btn-info" href="#about">Get to Know Me</a>
            </div>

            <div class="col-lg-5 text-center">
                <img
                    class="profile-img"
                    src="<?= htmlspecialchars($profileImage); ?>"
                    alt="Foto Profil <?= htmlspecialchars($profileName); ?>"
                >
                <p class="text-white-50 small mt-3 mb-0">
                    Gambar: <?= htmlspecialchars($profileImage); ?>
                </p>
            </div>
        </div>
    </div>
</header>

<!-- ABOUT -->
<section id="about" class="section">
    <div class="container">
        <h2 class="mb-4 fw-bold">About Me</h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card-soft p-4 h-100">
                    <h5 class="mb-3">Deskripsi</h5>
                    <p class="text-white-50 mb-0">
                        <?= nl2br(htmlspecialchars($aboutDescription)); ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-soft p-4 h-100">
                    <h5 class="mb-3">Skills</h5>

                    <?php if ($skillsResult && mysqli_num_rows($skillsResult) > 0): ?>
                        <?php while ($skill = mysqli_fetch_assoc($skillsResult)): ?>
                            <?php
                                $skillName = $skill['name'] ?? '';
                                $skillLevel = (int) ($skill['level'] ?? 0);

                                if ($skillLevel < 0) $skillLevel = 0;
                                if ($skillLevel > 100) $skillLevel = 100;
                            ?>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="fw-semibold"><?= htmlspecialchars($skillName); ?></span>
                                    <span class="text-white-50 small"><?= $skillLevel; ?>%</span>
                                </div>

                                <div
                                    class="progress"
                                    role="progressbar"
                                    aria-valuenow="<?= $skillLevel; ?>"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    <div class="progress-bar" style="width: <?= $skillLevel; ?>%"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-white-50 mb-0">Belum ada data skills.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="mb-4 fw-bold">Projects</h2>

        <div class="row g-4">
            <?php if ($projectsResult && mysqli_num_rows($projectsResult) > 0): ?>
                <?php while ($project = mysqli_fetch_assoc($projectsResult)): ?>
                    <?php
                        $projectTitle = $project['title'] ?? '';
                        $projectDescription = $project['description'] ?? '';
                        $projectLink = $project['link'] ?? '';
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="cert-card p-4 h-100 d-flex flex-column">
                            <h5 class="mb-2"><?= htmlspecialchars($projectTitle); ?></h5>
                            <p class="text-white-50 mb-3">
                                <?= htmlspecialchars($projectDescription); ?>
                            </p>

                            <?php if (!empty($projectLink)): ?>
                                <a
                                    href="<?= htmlspecialchars($projectLink); ?>"
                                    target="_blank"
                                    rel="noopener"
                                    class="btn btn-info mt-auto"
                                >
                                    View Project
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-white-50">Belum ada project.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- EXPERIENCE -->
<section id="experience" class="section">
    <div class="container">
        <h2 class="mb-4 fw-bold">Experience & Education</h2>

        <div class="row g-4">
            <?php if ($experiencesResult && mysqli_num_rows($experiencesResult) > 0): ?>
                <?php while ($exp = mysqli_fetch_assoc($experiencesResult)): ?>
                    <?php
                        $expTitle = $exp['title'] ?? '';
                        $expPlace = $exp['place_name'] ?? '';
                        $expYear = $exp['year'] ?? '';
                        $expDescription = $exp['description'] ?? '';
                    ?>
                    <div class="col-md-6">
                        <div class="card-soft p-4 h-100">
                            <h5 class="mb-1"><?= htmlspecialchars($expTitle); ?></h5>
                            <p class="text-white-50 mb-2">
                                <?= htmlspecialchars($expPlace); ?> • <?= htmlspecialchars($expYear); ?>
                            </p>
                            <p class="text-white-50 mb-0">
                                <?= htmlspecialchars($expDescription); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-white-50">Belum ada data experience.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ACHIEVEMENTS -->
<section id="achievements" class="section section-alt">
    <div class="container">
        <h2 class="mb-4 fw-bold">Achievements</h2>

        <div class="row g-3">
            <?php if ($achievementsResult && mysqli_num_rows($achievementsResult) > 0): ?>
                <?php while ($achievement = mysqli_fetch_assoc($achievementsResult)): ?>
                    <?php
                        $achievementTitle = $achievement['title'] ?? '';
                        $achievementDescription = $achievement['description'] ?? '';
                        $achievementYear = $achievement['year'] ?? '';
                    ?>
                    <div class="col-md-4">
                        <div class="cert-card p-3 h-100">
                            <h5 class="mb-1"><?= htmlspecialchars($achievementTitle); ?></h5>
                            <p class="text-white-50 mb-2"><?= htmlspecialchars($achievementYear); ?></p>
                            <p class="text-white-50 mb-0"><?= htmlspecialchars($achievementDescription); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-white-50 mb-0">Belum ada data achievements.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CERTIFICATES -->
<section id="certificates" class="section section-alt">
    <div class="container">
        <h2 class="mb-4 fw-bold">Certificates</h2>

        <div class="row g-3">
            <?php if ($certificatesResult && mysqli_num_rows($certificatesResult) > 0): ?>
                <?php while ($certificate = mysqli_fetch_assoc($certificatesResult)): ?>
                    <?php
                        $certificateTitle = $certificate['title'] ?? '';
                        $certificateIssuer = $certificate['issuer'] ?? '';
                        $certificateYear = $certificate['year'] ?? '';
                        $certificateLink = $certificate['link'] ?? '';
                    ?>
                    <div class="col-md-4">
                        <div class="cert-card p-3 h-100">
                            <h5 class="mb-1"><?= htmlspecialchars($certificateTitle); ?></h5>
                            <p class="text-white-50 mb-2">
                                <?= htmlspecialchars($certificateIssuer); ?> • <?= htmlspecialchars($certificateYear); ?>
                            </p>

                            <?php if (!empty($certificateLink)): ?>
                                <a
                                    href="<?= htmlspecialchars($certificateLink); ?>"
                                    target="_blank"
                                    rel="noopener"
                                    class="btn btn-sm btn-info mt-2"
                                >
                                    View Certificate
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-white-50 mb-0">Belum ada data certificates.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section">
  <div class="container">
    <h2 class="mb-4 fw-bold">Contact</h2>

    <div class="row g-4">
      <?php if ($contactsResult && mysqli_num_rows($contactsResult) > 0): ?>
        <?php while ($contact = mysqli_fetch_assoc($contactsResult)): ?>
          <?php
            $contactPlatform = $contact['platform'] ?? '';
            $contactLink = $contact['link'] ?? '';
          ?>
          <div class="col-md-6 col-lg-3">
            <div class="card-soft p-4 h-100 text-center">
              <h5 class="mb-4"><?= htmlspecialchars($contactPlatform); ?></h5>

              <a
                href="<?= htmlspecialchars($contactLink); ?>"
                class="btn btn-sm btn-info"
              >
                Visit
              </a>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <div class="col-12">
          <p class="text-white-50 mb-0">Belum ada data contact.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>