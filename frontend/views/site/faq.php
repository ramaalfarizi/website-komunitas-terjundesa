<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'FAQ';
?>
<div class="site-faq">
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Tanya Jawab Terjun Desa</h1>
                <p class="lead fw-normal text-muted mb-0">Masih bertanya-tanya soal Terjun Desa? Simak saja tanya-jawab di bawah ini.</p>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- FAQ Accordion 1-->
                    <h2 class="fw-bolder mb-3">Account &amp; Billing</h2>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Apa itu Terjun Desa Lamongan?</button></h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Komunitas peduli sosial dan pendidikan di kabupaten lamongan khususnya pendidikan bagi desa-desa tertinggal di kabupaten lamongan dengan gerakan membangun mimpi anak lamongan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Siapa saja yang berhak menjadi anggota Terjun Desa Lamongan?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Masyarakat Lamongan dari berbagai macam lini pekerjaan dan tidak ada batasan umur untuk bergabung menjadi anggota komunitas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Kapan dan di mana Terjun Desa akan diadakan?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong>
                                    It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>
                                    , though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card border-0 bg-light mt-xl-5">
                        <div class="card-body p-4 py-lg-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="h6 fw-bolder">Have more questions?</div>
                                    <p class="text-muted mb-4">
                                        Contact us at
                                        <br />
                                        <a href="#!">tdlamongan@gmail.com</a>
                                    </p>
                                    <div class="h6 fw-bolder">Follow us</div>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>