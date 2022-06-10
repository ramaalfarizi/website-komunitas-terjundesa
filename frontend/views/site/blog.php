<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Blog';
?>
<div class="site-about">
    <!-- Page Content-->
    <section class="py-5 mt-5">
        <div class="container px-5">
            <h1 class="fw-bolder fs-5 mb-4">Kabar Terbaru</h1>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-xl-5 py-lg-5">
                            <div class="p-4 p-md-5">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <div class="h2 fw-bolder">Ada Apa Dengan Lamongan?</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique delectus ab doloremque, qui doloribus ea officiis...</p>
                                <a class="stretched-link text-decoration-none" href="#!">
                                    Read more
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <div class="bg-featured-blog" style="background-image: url('img/aadl.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">News</h2>
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
            <div class="text-end mb-5 mb-xl-0">
                <a class="text-decoration-none" href="#!">
                    More stories
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
</div>