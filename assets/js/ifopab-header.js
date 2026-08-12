(function () {
    "use strict";

    // Keeps --header-top-height in sync with the persistent top bar's real
    // rendered height, so the nav bar below it and the scroll-triggered
    // sticky header always stack cleanly — no matter how many lines the top
    // bar wraps into at a given viewport width. The CSS value in
    // ifopab-theme.css is only the no-JS fallback.

    var headerTop = document.querySelector(".header-top");
    var stickyHeader = document.querySelector(".sticky-header");

    if (!headerTop) {
        return;
    }

    function syncHeaderOffsets() {
        var topHeight = headerTop.offsetHeight;
        document.documentElement.style.setProperty("--header-top-height", topHeight + "px");

        // Combined offset for anchor-nav scroll-margin-top: when a section
        // is reached via a nav link, the sticky header is already in its
        // visible state (opacity/visibility toggle only — it keeps layout
        // space either way, so offsetHeight is measurable even before the
        // user scrolls), so anchored content needs to clear both bars, not
        // just the top one.
        if (stickyHeader) {
            var stackOffset = topHeight + stickyHeader.offsetHeight;
            document.documentElement.style.setProperty("--header-stack-offset", stackOffset + "px");
        }
    }

    syncHeaderOffsets();
    window.addEventListener("load", syncHeaderOffsets);
    window.addEventListener("resize", syncHeaderOffsets);
})();
