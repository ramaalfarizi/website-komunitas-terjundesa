<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
?>
<div class="site-about">
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Apa itu Terjun Desa?</h1>
                        <p class="lead fw-normal text-muted mb-4">Komunitas peduli sosial dan pendidikan di kabupaten lamongan khususnya pendidikan bagi desa-desa tertinggal di kabupaten lamongan dengan gerakan membangun mimpi anak lamongan.</p>
                        <!-- <a class="btn btn-primary btn-lg" href="gabung/index">Gabung Sekarang</a> -->
                        <?= Html::a('Gabung Sekarang', ['gabung/create'], ['class' => 'btn btn-primary btn-lg px-4 me-sm-3']) ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="img/hero-img.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Visi</h2>
                    <p class="lead fw-normal text-muted mb-0">Turut serta memajukan kabupaten lamongan melalui jalur pendidikan khususnya membangun mimpi anak lamongan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="img/mengajar.jpg
                " alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Misi</h2>
                    <p class="lead fw-normal text-muted mb-0">
                    <ol>
                        <li>Memotivasi anak lamongan melalui pengenalan cita-cita dan profesi di sekolah dasar kabupaten lamo</li>
                        <li>Mendorong siswa SMA untuk melanjutkan pendidikan sampai ke perguruan tinggi</li>
                        <li>Mengenalkan potensi desa-desa di kabupaten lamongan</li>
                        <li>Turut mengawal dan memberikan sumbangsih terhadap pendidikan di kabupaten lamongan dengan bekerjasama dengan berbagai pihak untuk memajukan pendidikan di lamongan</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team members section-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">Divisi-divisi</h2>
                <p class="lead fw-normal text-muted mb-5"></p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Event</h5>
                        <!-- <div class="fst-italic text-muted">Founder &amp; CEO</div> -->
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Humas</h5>
                        <!-- <div class="fst-italic text-muted">CFO</div> -->
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-sm-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Donasi</h5>
                        <!-- <div class="fst-italic text-muted">Operations Manager</div> -->
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Media</h5>
                        <!-- <div class="fst-italic text-muted">CTO</div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>