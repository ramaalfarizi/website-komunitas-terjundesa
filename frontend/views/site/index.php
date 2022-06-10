<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Home';
?>

<div class="site-index">
    <!-- Header-->
    <header class="bg-dark mt-5 py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Setahun mengajar, Selamanya Menginspirasi</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Gabung bersama kami! Mari ciptakan dampak positif untuk pendidikan di desa-desa Lamongan!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <?= Html::a('Mari Bergabung', ['gabung/create'], ['class' => 'btn btn-primary btn-lg px-4 me-sm-3']) ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/hero-img.jpg" alt="..." /></div>
            </div>
        </div>
    </header>

    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">Keuntungan Yang Kamu Dapatkan</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-briefcase-fill"></i></div>
                            <h2 class="h5">Bertemu dengan Banyak Orang Baru dan Menambah Relasi</h2>
                            <p class="mb-0">Keuntungan pertama yang bisa kamu dapatkan ketika bergabung ke komunitas ini adalah kesempatan kamu untuk bisa bertemu dengan banyak orang baru dan menjalin relasi.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-mic-fill"></i></div>
                            <h2 class="h5">Memperoleh Pengalaman Baru</h2>
                            <p class="mb-0">Keuntungan selanjutnya yang bisa kamu dapatkan ketika bergabung ke komunitas ini adalah kamu bisa memperoleh pengalaman baru yang tentunya akan sangat berguna bagi skill kamu di bidang pendidikan dan sosial.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-fill"></i></div>
                            <h2 class="h5">Mengajarkan Nilai-nilai Kehidupan</h2>
                            <p class="mb-0">Ketika kita mengikuti berbagai aktivitas saat menjadi anggota relawan di komunitas, maka pandangan kamu akan terbuka menjadi lebih luas lagi mengenai nilai-nilai hidup.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Dapat Mengasah Kepekaan Terhadap Sesama</h2>
                            <p class="mb-0">Dengan bergabung ke komunitas ini, maka kamu bisa sekaligus melatih rasa empati dan rasa kepekaan terhadap sesama.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">Terjun Desa "Bangun Mimpi Anak Lamongan" Mari berbagi cerita yang dapat menumbuhkan cita. Jejak langkah profesimu sebagai awalnya. Sudah saatnya para profesional turut mengambil peran dalam pendidikan anak Lamongan.</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                            <div class="fw-bold">
                                Rerry Widodo
                                <span class="fw-bold text-primary mx-1">/</span>
                                FOUNDER Terjun Desa
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Kabar Kami</h2>
                    <p class="lead fw-normal text-muted mb-5">Kabar terbaru dari kami</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card shadow border-0">
                    <img class="card-img-top" src="img/mengajar.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Lamongan Mengajar</h5>
                        </a>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="text-muted">14 Mei 2022</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card shadow border-0">
                    <img class="card-img-top" src="img/aadl.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Ada Apa Dengan Lamongan?</h5>
                        </a>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="text-muted">23 Januari 2022</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card shadow border-0">
                    <img class="card-img-top" src="img/upgrading.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Upgrading Terjun Desa</h5>
                        </a>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="text-muted">11 Desember 2021</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">Open Recruitment Batch 4</div>
                    <!-- <div class="text-white-50">Sign up for our newsletter for the latest updates.</div> -->
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <?= Html::a('Mari Bergabung', ['gabung/create'], ['class' => 'btn btn-light btn-lg px-4 me-sm-3']) ?>
                    </div>
                    <!-- <div class="small text-white-50">We care about privacy, and will never share your data.</div> -->
                </div>
            </div>
        </aside>
    </div>
</section>
</div>