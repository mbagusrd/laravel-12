function active_menu() {
    var currentPath = window.location.pathname.replace(/\/$/, ''); // Hapus trailing slash dari pathname saat ini
    $('.nav-sidebar a').each(function () {
        var href = $(this).attr('href');
        var hrefPath = href;
        // Jika href adalah URL lengkap, ekstrak pathname-nya
        if (href.startsWith('http')) {
            var url = new URL(href);
            hrefPath = url.pathname.replace(/\/$/, '');
        } else {
            hrefPath = href.replace(/\/$/, '');
        }
        // console.log('Checking hrefPath:', hrefPath, 'against currentPath:', currentPath);
        if (hrefPath === currentPath) {
            $(this).addClass('active');
            // Untuk multilevel menu, tambahkan active dan menu-open ke parent
            $(this).parents('.nav-item').addClass('active menu-open');
        }
    });
}

active_menu();
