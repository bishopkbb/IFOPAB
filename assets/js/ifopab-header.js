(function () {
    "use strict";

    // Keeps --header-top-height in sync with the persistent top bar's real
    // rendered height, so the nav bar below it and the scroll-triggered
    // sticky header always stack cleanly — no matter how many lines the top
    // bar wraps into at a given viewport width. The CSS value in
    // ifopab-theme.css is only the no-JS fallback.

    var headerTop = document.querySelector(".header-top");

    if (!headerTop) {
        return;
    }

    function syncHeaderTopHeight() {
        var height = headerTop.offsetHeight;
        document.documentElement.style.setProperty("--header-top-height", height + "px");
    }

    syncHeaderTopHeight();
    window.addEventListener("load", syncHeaderTopHeight);
    window.addEventListener("resize", syncHeaderTopHeight);
})();
