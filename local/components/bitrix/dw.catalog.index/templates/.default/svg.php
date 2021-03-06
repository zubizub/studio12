


<div class="lofts lofts--main count-section">
                <div class="lofts__scheme">

                    <div class="layout">
                        <div class="layout__link layout__2-2 queue__act house house1">
                            <img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/2-2.svg" alt="">
                            <div class="loft loft--2-2">
                                <div class="loft__number">2-2</div>
                                <div class="loft-popup loft-popup-ready">
                                    <div class="loft-popup__title">
                                    <?= count($arResult['ITEMS']);?>
                                        
                                    </div>
                                    <div class="loft-popup__desc">Доступно</div>
                                    <div class="loft-popup loft-popup-ready loft-black-popup">
                                        <span class="fs14 grey lh26 upper">Готовность<br></span>
                                        <span class="fs24 lh26">Конец<br>2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout__link layout__3 house house4">
                            <img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/3.svg" alt="">
                            <div class="loft loft--3">
                                <div class="loft__number">3</div>
                                <div class="loft-popup">
                                    <div class="loft-popup__desc">Очередь:</div>
                                    <div class="loft-popup__title">Май <span>2018</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="layout__link layout__1 house house3">
                            <img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/1.svg" alt="">
                            <div class="loft loft--1">
                                <div class="loft__number">1</div>
                                <div class="loft-popup">
                                    <div class="loft-popup__desc">Очередь:</div>
                                    <div class="loft-popup__title">Сентябрь <span>2017</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="layout__link layout__2-3 house house2">
                            <img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/2-3.svg" alt="">
                            <div class="loft loft--2-3">
                                <div class="loft__number">2-3</div>
                                <div class="loft-popup">
                                    <div class="loft-popup__desc">Очередь:</div>
                                    <div class="loft-popup__title">Октябрь <span>2017</span></div>
                                </div>
                            </div>
                        </div>
                        <span class="layout__street-3 house house2">
                            <img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/street-3.svg" alt="">
                        </span>
                        <span class="layout__street-2 house house3">
                            <img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/street-2.svg" alt="">
                        </span>
                        <span class="layout__entry house house3">
                            <img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/entry.svg" alt="">
                        </span>
                        <div class="house house2">
                             <span class="layout__item layout__vr">
                                <span class="layout__caption">
                                    <span class="layout__caption-desc">АЗС</span>
                                    <span class="layout__caption-title">British Petroleum</span>
                                </span>
                            </span>
                        </div>
                        <div class="house house3">
                            <span class="layout__item layout__world-class">
                                <span class="layout__caption">
                                    <span class="layout__caption-desc">фитнес-клуб</span>
                                    <span class="layout__caption-title">World Class</span>
                                </span>
                            </span>
                            <span class="layout__item layout__capit">
                                <span class="layout__caption">
                                    <span class="layout__caption-desc">трц</span>
                                    <span class="layout__caption-title">Капитолий</span>
                                </span>
                            </span>
                        </div>
                        <!--<span class="layout__lake house house1">-->
                            <!--<img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/lake.svg" alt="">-->
                        <!--</span>-->
                        <!--<span class="layout__vr house house4">-->
                            <!--<img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/vr.svg" alt="">-->
                        <!--</span>-->
                        <!--<span class="layout__world-class house house3">-->
                            <!--<img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/world-class.svg" alt="">-->
                        <!--</span>-->
                        <!--<span class="layout__capit house house3">-->
                            <!--<img class="layout__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/capit.svg" alt="">-->
                        <!--</span>-->
                    </div>
                </div>

                <div class="lots-infographics">
                    <div class="lots-infographics__number count-anim" data-number="<?= count($arResult['ITEMS']);?>">0</div>
                    <div class="lots-infographics__text">Доступных предложений</div>
                    <div class="lofts-pdf-link">
                        <a class="offer__plan" href="/upload/S12Plan.pdf" target="_blank">
                            <div class="offer__label offer__label--desktop">Планировки (PDF)
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lot-view">
                    <button id="loft-view-table" class="lot-view__link active">Таблицей</button>
                    <button id="loft-view-card" class="lot-view__link">Карточками</button>
                </div>
                
            </div>