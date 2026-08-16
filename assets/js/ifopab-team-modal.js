(function () {
    'use strict';

    document.addEventListener('click', function (event) {
        var opener = event.target.closest('[data-bio-target]');
        if (opener) {
            var modal = document.getElementById(opener.getAttribute('data-bio-target'));
            if (modal) {
                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.classList.add('team-bio-modal-open');
            }
            return;
        }

        if (event.target.closest('[data-bio-close]')) {
            var openModal = event.target.closest('.team-bio-modal');
            if (openModal) {
                openModal.classList.remove('is-open');
                openModal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('team-bio-modal-open');
            }
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key !== 'Escape') {
            return;
        }
        document.querySelectorAll('.team-bio-modal.is-open').forEach(function (modal) {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
        });
        document.body.classList.remove('team-bio-modal-open');
    });
})();
