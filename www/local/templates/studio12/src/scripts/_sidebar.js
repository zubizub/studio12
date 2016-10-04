import $ from 'jquery';

export default class Sidebar {
    constructor($node, options) {
        this.$node = $node;
        this.isOpen = false;
        this.options = $.extend( {}, Sidebar.defaults, options ) ;
        this.bindEvents();
    }

    bindEvents() {
        this.options.$toggle.on('click.sidebar', this.onClick.bind(this));
    }

    onClick(event) {
        event.preventDefault();
        this.isOpen ? this.close() : this.open();
    }

    open() {
        if(!this.isOpen) {
            this.options.$container.addClass(this.options.openClass);
            this.isOpen = true;
            this.$node.one('transitionend', () => this.onOpen());
        }
    }

    close() {
        if(this.isOpen) {
            this.options.$container.removeClass(this.options.openClass);
            this.isOpen = false;
            this.$node.one('transitionend', () => this.onClose());
        }
    }

    onOpen() {
        // console.log(`Ачылдым ${this.options.openClass}`);
    }

    onClose() {
        // console.log(`Ябылдым ${this.options.openClass}`);
    }
}

Sidebar.defaults = {
    $container: $({}),
    $toggle: $({}),
    openClass: 'open'
};