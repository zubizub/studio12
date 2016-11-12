import $ from 'jquery';
import * as lofts from './_loftTypes';
import Sidebar from './_sidebar';
import Ps from '../../bower_components/perfect-scrollbar/src/js/main';
// import typeit from '../../bower_components/typeit/dist/typeit';

// alert(898989);

// console.log(typeit, $.fn.typeit);



const $sidebar = $('.sidebar');

Ps.initialize($sidebar[0]);

const sidebar = new Sidebar($sidebar, {
    $container: $('body'),
    $toggle: $('.nav-toggle'),
    openClass: 'sidebar-open'
});


// var $ = require('jquery');
// require('perfect-scrollbar/jquery')($);