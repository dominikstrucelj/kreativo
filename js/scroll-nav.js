document.addEventListener('DOMContentLoaded', function () {
    var links = document.querySelectorAll('a.page-scroll[href^="#"]');

    Array.prototype.forEach.call(links, function (link) {
        link.addEventListener('click', function (event) {
            var targetId = this.getAttribute('href');
            var target = document.querySelector(targetId);

            if (!target) {
                return;
            }

            event.preventDefault();
            var top = target.getBoundingClientRect().top + window.pageYOffset - 80;

            if ('scrollBehavior' in document.documentElement.style) {
                window.scrollTo({ top: top, behavior: 'smooth' });
            } else {
                window.scrollTo(0, top);
            }
        });
    });
});
