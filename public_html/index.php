<?php ob_start(); ?>
<h2 class="text-center">Usted debe elegir <?php echo $facil_tarot_atts['num_card'] ?> cartas</h2>
<section class="tarot-section" id="tarot-section">
    <div class="container">
        <div class="row row-card pt-5 pb-5">
            <div class="col-md-12">
                <form action="<?php echo $page_link ?>" class="send-form" method="POST">
                    <input type="hidden" name="card-1" value="">
                    <input type="hidden" name="card-2" value="">
                    <input type="hidden" name="card-3" value="">
                    <input type="hidden" name="card-4" value="">
                    <input type="hidden" name="card-5" value="">
                    <input type="hidden" name="card-6" value="">
                    <input type="hidden" name="card-7" value="">
                    <input type="hidden" name="card-8" value="">
                    <input type="hidden" name="card-9" value="">
                    <input type="hidden" name="card-10" value="">
                </form>

                <div id="cartas-list" data-tipo-card="<?php echo $type_card ?>" data-num-card="<?php echo $facil_tarot_atts['num_card'] ?>" class="card border-0">

                    <ul class="inline">
                        <li id="card1" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card2" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card3" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card4" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card5" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card6" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card7" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card8" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card9" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card10" data-rank="">
                            <a href="javascript:void(0)">
                               <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card11" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card12" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card13" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card14" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card15" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card16" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card17" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card18" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card19" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card20" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card21" data-rank="">
                            <a href="javascript:void(0)">
                               <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                        <li id="card22" data-rank="">
                            <a href="javascript:void(0)">
                                <img src="" alt="card" class="back-card">
                                <img src="" alt="card" class="hidden-card">
                            </a>
                        </li>
                    </ul>
                    <div class="btn-group">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <button class="btn btn-success btn-block shake-btn" href="javascript:void(0)" title="Barajar cartas">Barajar</button>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-5 text-center cut-btn">
                                    <button class="btn btn-info btn-block" title="Cortar cartas">Cortar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div style="display: none;" id="loader-animation" class="col-lg-12 col-md-12 text-center loader-box">
    <div class="mb-4 pb-3">
        <h1 class="title-mensaje">Interpretando...</h1>
    </div>
    <div class="pre-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>


<?php ob_end_flush(); ?>