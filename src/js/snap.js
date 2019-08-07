window._snap = window._snap || {};
_snap.onloadfunctions = _snap.onloadfunctions || {};
_snap.utils = {};


_snap.init = function() {
    var start, end;

    if(window.performance && console.groupCollapsed) {
        start = window.performance.now();
    }

    this.$html = $('html');
    this.$body = $('body');
    this.$window = $(window);
    this.deviceWidth = document.documentElement.clientWidth || window.innerWidth;

    // Run any onload functions
    for(var x=0;x<_snap.onloadfunctions.length;x++){
        _snap.onloadfunctions[x]();
    }

    if(window.performance && console.groupCollapsed) {
        end = window.performance.now();
        console.log('_snap.init(); %c'+Math.ceil(end-start)+'ms', 'font-weight:bold')
    }
};