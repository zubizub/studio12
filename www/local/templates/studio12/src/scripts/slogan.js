/*$('.slogan__title').typeIt({
    cursor: false,
    speed: 150,
    autoStart: true,
    loop: true,
    breakLines: false,
    breakWait: 10000,
	strings: ['<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Set</span><span class="slogan__line">Trends</span>','<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Fly</span>','<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Create</span>','<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Earn</span>']
}).tiPause(5000);
$('.slogan__translation').typeIt({
    cursor: false,
    speed: 160,
    autoStart: true,
    loop: true,
	breakWait: 10000,
    breakLines: false,
	strings: ['Меняй правила и устанавливай тенденции!','Меняй правила и взлетай!','Меняй правила и твори','Меняй правила и зарабатывай']
}).tiPause(5000);*/

  $('.slogan__title').typeIt({
	cursor: false,
    speed: 150,
    lifeLike: false,
    autoStart: true,
	loop: true
  })
  .tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Set</span><span class="slogan__line">Trends</span>')
  .tiPause(1500)
  .tiDelete()
  .tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Fly</span>')
  .tiPause(1500)
  .tiDelete()
  .tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Create</span>')
  .tiPause(1500)
  .tiDelete()
  .tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Earn</span>')
  .tiPause(1500)
  .tiDelete();
  
    $('.slogan__translation').typeIt({
	cursor: false,
    speed: 150,
    lifeLike: false,
    autoStart: true,
	loop: true
  })
  .tiType('Меняй правила <br/> и устанавливай тенденции!')
  .tiPause(1300)
  .tiDelete()
  .tiType('Меняй правила <br/> и взлетай!')
  .tiPause(1500)
  .tiDelete()
  .tiType('Меняй правила <br/> и твори')
  .tiPause(3000)
  .tiDelete()
  .tiType('Меняй правила <br/> и зарабатывай')
  .tiPause(1500)
  .tiDelete();