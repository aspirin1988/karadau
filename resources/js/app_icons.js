(function () {
    let addIcons = function () {
        UIkit.icon.add({
            "hourglass": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><defs><path d="M0 0L20 0L20 20L0 20L0 0Z" id="bb2u7j1Mz"></path><path d="M3 2.82C14.58 2.81 5.08 2.81 17 2.82C17 4.92 13.87 6.8 10 10C6.13 6.8 3 4.92 3 2.82Z" id="c3AUK45f4E"></path><path d="M16.94 16.84C5.37 16.84 14.87 16.84 2.94 16.84C2.96 14.74 6.17 12.89 10.06 9.69C13.9 12.88 16.96 14.74 16.94 16.84Z" id="a53g103NZo"></path><path d="M2.5 1L17.5 1L17.5 2.5L2.5 2.5L2.5 1Z" id="c1o0DyR8Ta"></path><path d="M2.5 17L17.5 17L17.5 18.5L2.5 18.5L2.5 17Z" id="a1n1BPmEZ1"></path></defs><g><g><g><g></g></g><g><use xlink:href="#c3AUK45f4E" opacity="1" fill="#a41c84" fill-opacity="1"></use></g><g><use xlink:href="#a53g103NZo" opacity="1" fill="#a41c84" fill-opacity="1"></use></g><g><use xlink:href="#c1o0DyR8Ta" opacity="1" fill="#78a00c" fill-opacity="1"></use></g><g><use xlink:href="#a1n1BPmEZ1" opacity="1" fill="#78a00c" fill-opacity="1"></use></g></g></g></svg>',
            "list-alt": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x=".4" y="1" width="19.2" height="3"></rect><rect x="3" y="5" width="1" height="1"></rect><rect x="5" y="5" width="12.5" height="1"></rect><rect x="3" y="8" width="1" height="1"></rect><rect x="5" y="8" width="12.5" height="1"></rect><rect x="3" y="11" width="1" height="1"></rect><rect x="5" y="11" width="12.5" height="1"></rect><rect x="3" y="14" width="1" height="1"></rect><rect x="5" y="14" width="12.5" height="1"></rect><rect fill="none" stroke="#000" stroke-width="1.3" x="1" y="3" width="18" height="14"></rect></svg>',
            "newspaper": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" stroke-width="1" x="5.5" y="8" width="4.5" height="5.25"></rect><rect fill="none" stroke="#000" stroke-width="1" x="5.5" y="15" width="4.5" height="0.7"></rect><rect fill="none" stroke="#000" stroke-width="1" x="12" y="8" width="4.5" height="0.7"></rect><rect fill="none" stroke="#000" stroke-width="1" x="12" y="10.25" width="4.5" height="0.7"></rect><rect fill="none" stroke="#000" stroke-width="1" x="12" y="12.5" width="4.5" height="0.7"></rect><rect fill="none" stroke="#000" stroke-width="1" x="12" y="15" width="4.5" height="0.7"></rect><path fill="none" stroke="#000" stroke-width="1" d="M2,8 L2,13 C2,16 2,18 3,18 3,18 4,18 4,16 L4,8Z"></path><path fill="none" stroke="#000" stroke-width="1" d="M3,18 L16,18 C16,18 18,18 18,16 L18,6 4,6 4,16 C4,16 4,18 3,18Z"></path></svg>',
            "file-text-o": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1" d="M3,1.5 L12,1.5 17,6 17,19 3,19Z"></path><path fill="none" stroke="#000" d="M12.32,2.2 L12.32,5.68 16.2,5.68 Z"></path></svg>',
            "microphone": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1" d="M6,11 C6,11 6,15 10,15 C10,15 14,15 14,11"></path><path fill="true" stroke="#000" stroke-width="1" d="M8,5 C8,5 8,3 10,3 10,3 12,3 12,5 L12,11 C12,11 12,13 10,13 10,13 8,13 8,11Z"></path><path fill="none" stroke="#000" stroke-width="1" d="M10,15 L10,17"></path><path fill="none" stroke="#000" stroke-width="1" d="M8,17 L12,17"></path></svg>',
            "gavel": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><g transform="rotate(-45 10 2)"><ellipse stroke="#000" stroke-width="1" cx="1" cy="6" rx="0.2" ry="3"></ellipse><ellipse stroke="#000" stroke-width="1" cx="9" cy="6" rx="0.2" ry="3"></ellipse><path fill="true" stroke="#000" stroke-width="1" d="M1,3.4 L8,3.4 8,8.6 1,8.6Z"></path><path fill="true" stroke="#000" stroke-width="1" d="M5,5 L5,12"></path><path fill="true" stroke="#000" stroke-width="1" d="M4.5,11 C4.5,11 4.5,10.5 5,10.5 5,10.5 5.5,10.5 5.5,11 L5.5,15 C5.5,15 5.5,15.5 5,15.5 5,15.5 4.5,15.5 4.5,15 Z"></path></g></svg>',
            "star-video-camera": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" stroke-width="1.01" points="10 2 12.63 7.27 18.5 8.12 14.25 12.22 15.25 18 10 15.27 4.75 18 5.75 12.22 1.5 8.12 7.37 7.27"></polygon><polygon points="12,9 11,10.25 12,11.5 "></polygon><rect x="8" y="9" width="3" height="2.5"></rect></svg>',
            "template": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1" d="M3,1.5 L12,1.5 17,6 17,19 3,19Z"></path><path fill="none" stroke="#000" d="M12.32,2.2 L12.32,5.68 16.2,5.68 Z"></path><line stroke="#000" x1="5" y1="5" x2="11" y2="5"></line><line stroke="#000" x1="5" y1="7" x2="11" y2="7"></line><line stroke="#000" x1="5" y1="9" x2="15" y2="9"></line><line stroke="#000" x1="5" y1="11" x2="15" y2="11"></line><line stroke="#000" x1="5" y1="13" x2="15" y2="13"></line><line stroke="#000" x1="5" y1="15" x2="15" y2="15"></line><line stroke="#000" x1="5" y1="17" x2="15" y2="17"></line></svg>',
            "banner": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#000" stroke="#000" stroke-width="1" d="M2,7 L7,7 7,11 2,11 4,9Z"></path><path fill="#000" stroke="#000" stroke-width="1" d="M18,7 L13,7 13,11 18,11 16,9Z"></path><rect fill="#000" stroke="#fff" stroke-width=".5"  x="5" y="5.7" width="10" height="5"></rect></svg>',
            "eye": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M1,10 C1,10 10,1 19,10 19,10 10,19 1,10 Z"></path><circle cx="10" cy="10" r="3"></circle></svg>',
            "justify-left": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="10" height="1.5"></rect><rect x="3" y="8" width="14" height="1.5"></rect><rect x="3" y="12" width="10" height="1.5"></rect><rect x="3" y="16" width="14" height="1.5"></rect></svg>',
            "justify-right": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="8" y="4" width="10" height="1.5"></rect><rect x="4" y="8" width="14" height="1.5"></rect><rect x="8" y="12" width="10" height="1.5"></rect><rect x="4" y="16" width="14" height="1.5"></rect></svg>',
            "justify-center": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="4" width="10" height="1.5"></rect><rect x="3" y="8" width="14" height="1.5"></rect><rect x="5" y="12" width="10" height="1.5"></rect><rect x="3" y="16" width="14" height="1.5"></rect></svg>',
            "justify-full": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="4" width="16" height="1.5"></rect><rect x="2" y="8" width="16" height="1.5"></rect><rect x="2" y="12" width="16" height="1.5"></rect><rect x="2" y="16" width="16" height="1.5"></rect></svg>',
            "width": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="10" width="16" height="1"></rect><rect x="0" y="5" width="1" height="11"></rect><rect x="19" y="5" width="1" height="11"></rect><path fill="none" stroke="#000" stroke-width="1" d="M2,10.5 L4,9.5 4,11.5Z"></path><path fill="none" stroke="#000" stroke-width="1" d="M18,10.5 L16,9.5 16,11.5Z"></path></svg>',
            "height": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="2" width="1" height="16"></rect><rect x="5" y="0" width="11" height="1"></rect><rect x="5" y="19" width="11" height="1"></rect><path fill="none" stroke="#000" stroke-width="1" d="M10.5,2 L9.5,4 11.5,4Z"></path><path fill="none" stroke="#000" stroke-width="1" d="M10.5,18 L9.5,16 11.5,16Z"></path></svg>',
            "eraser": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M15.5,17 C15.5,17.8 14.8,18.5 14,18.5 L7,18.5 C6.2,18.5 5.5,17.8 5.5,17 L5.5,3 C5.5,2.2 6.2,1.5 7,1.5 L14,1.5 C14.8,1.5 15.5,2.2 15.5,3 L15.5,17 L15.5,17 L15.5,17 Z"></path><path fill="#000" stroke="#000" d="M15.5,17 C15.5,17.8 14.8,18.5 14,18.5 L7,18.5 C6.2,18.5 5.5,17.8 5.5,17 L5.5,12 L15.5,12 Z"></path></svg>',
            "lat": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><text style="font: 7px sans-serif;" x="0" y="9">Lat</text><text style="font: 7px sans-serif;" x="6" y="18">Curl</text><text style="font: 5px sans-serif; fill:red;" x="7" y="12.7">to</text></svg>',
            "curl": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><text style="font: 7px sans-serif;" x="10" y="18">Lat</text><text style="font: 7px sans-serif;" x="0" y="9">Curl</text><text style="font: 5px sans-serif; fill:red;" x="10" y="12.7">to</text></svg>',
            "slider": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="16.1" cy="6.1" r="1.1"></circle><rect fill="none" stroke="#000" x="0.5" y="2.5" width="19" height="15"></rect><polyline fill="none" stroke="#000" stroke-width="1.01" points="4,13 8,9 13,14"></polyline><polyline fill="none" stroke="#000" stroke-width="1.01" points="11,12 12.5,10.5 16,14"></polyline><polyline fill="none" stroke="#b5b5b5" stroke-width="1.5" points="5,9 3,11 5,13"></polyline><polyline fill="none" stroke="#b5b5b5" stroke-width="1.5" points="15,9 17,11 15,13"></polyline></svg>',
        });
    };

    window.show_trigger = function (that) {
        let container = document.querySelector('.uk-container-custom');
        let nav = document.querySelector('*[data-side-nav]');
        let logo_mini = document.querySelector('#logo-mini');
        let logo_big = document.querySelector('#logo-big');
        let span = that.querySelector('span');
        that.parentNode.classList.toggle('uk-active');
        if (that.parentNode.classList.contains('uk-active')) {
            span.setAttribute('uk-icon', 'grid');
            nav.classList.add('collapse');
            logo_mini.classList.add('active');
            logo_mini.classList.remove('uk-hidden');
            logo_big.classList.remove('active');
            logo_big.classList.add('uk-hidden');
            container.classList.add('collapse');
            localStorage.setItem('menu_collapse', true);
            console.log(localStorage.getItem('menu_collapse'));

        } else {
            span.setAttribute('uk-icon', 'more-vertical');
            nav.classList.remove('collapse');
            logo_big.classList.add('active');
            logo_big.classList.remove('uk-hidden');
            logo_mini.classList.remove('active');
            logo_mini.classList.add('uk-hidden');
            container.classList.remove('collapse');
            localStorage.setItem('menu_collapse', false);
            console.log(localStorage.getItem('menu_collapse'));
        }
    };

    // window.addEventListener('load', function () {
        if (UIkit) {
            addIcons();
        }
    // });

    if (JSON.parse(localStorage.getItem('menu_collapse')))
    {
        let container = document.querySelector('.uk-container-custom');
        let nav = document.querySelector('*[data-side-nav]');
        let logo_mini = document.querySelector('#logo-mini');
        let logo_big = document.querySelector('#logo-big');
        let span = document.querySelector('#trigger_menu span');
        span.setAttribute('uk-icon', 'grid');
        nav.classList.add('collapse');
        logo_mini.classList.add('active');
        logo_mini.classList.remove('uk-hidden');
        logo_big.classList.remove('active');
        logo_big.classList.add('uk-hidden');
        container.classList.add('collapse');
    }

})();
