class Application {
    static async initialize() {
        const app = new Application();

        
        app.#run();
        return Promise.resolve(app);
    }

    async #run() {
    }

    setCookie(name, value, options = {}) {
        if(!options.domain)
            options.domain = window.location.hostname;

        if(!options.exdays)
            options.exdays = .25;

        Cookies.set(name, value, {
            expires: options.exdays,
            domain: options.domain
        });
    }

    getCookie(name, options = {}) {
        if(!options.domain)
            options.domain = window.location.hostname;

        return Cookies.get(name, {
            domain: options.domain
        });
    }

    deleteCookie(name, options = {}) {
        if(!options.domain)
            options.domain = window.location.hostname;

        Cookies.remove(name, {
            domain: options.domain
        });
    }

    showLoader(callback = undefined) {
        if($('#loader-box').length == 0 && $('#loader-style').length == 0) {
            $('body').append(`<div id="loader-box" class="loader-wrapper">
                <div class="rectangle"></div>
            </div>
            <style id="loader-style">.loader-wrapper{display:none;position:fixed;z-index:100!important;overflow:hidden!important;left:0;top:0;display:flex;align-items:center;height:100vh!important;width:100vw!important;justify-content:center;background:rgba(214,213,235,.45)}.rectangle{width:77px;height:12px;border-radius:2px;border:3px solid #8583e1;animation:box 1.5s infinite ease-in-out;position:relative;transform:translate(-30%,0) rotate(0)}.rectangle:after{content:"";position:absolute;width:6px;height:6px;background:#100f3a;border-radius:50%;left:0;bottom:0;animation:ball 1.5s infinite ease-in-out}@keyframes box{50%{transform:translate(30%,0) rotate(0)}}@keyframes ball{20%{transform:translate(59px,0)}50%{transform:translate(5,-59px)}80%{transform:translate(59px,5)}}</style>`);
        }

        $('#loader-box').fadeIn('fast', function() {
            if(callback)
                callback();
        });
    }

    hideLoader(callback = undefined) {
        if($('#loader-box').length > 0 && $('#loader-style').length > 0) {
            $('#loader-box').fadeOut(function() {
                $('#loader-box').remove();
                $('#loader-style').remove();

                if(callback)
                    callback();
            });
        } else if(callback) {
            callback();
        }
    }
}

(function() {
    let index = 0;
    switch (location.pathname) {
        case '/':
        case '/about':
            index = 0;
            break;

        case '/skills':
            index = 1;
            break;

        case '/services':
            index = 2;
            break;

        case '/experience':
            index = 3;
            break;

        case '/education':
            index = 4;
            break;

        case '/portfolio':
            index = 5;
            break;

        case '/contact':
            index = 6;
            break;
    
        default:
            break;
    }

    let mainMenuList = $('.main-menu-list');
    for(let i = 0; i < mainMenuList.length; i++) {
        const menuList = $(mainMenuList[i]).children();
        const currentMenu = $(menuList[index]);
        currentMenu.addClass('active');
    }

    $('div[class=logo]').click(function() {
        window.location.href = baseUrl();
    });
}());

const Global = {};
const app = await Application.initialize();