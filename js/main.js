// SlideIn
const showElementAnimation = () => {
    const element = document.getElementsByClassName('slidein');
    if (!element) return;

    const showTiming = window.innerHeight > 768 ? 200 : 40;
    const scrollY = window.pageYOffset;
    const windowH = window.innerHeight;

    for (let i=0; i<element.length; i++) { 
        const elemClientRect = element[i].getBoundingClientRect(); 
        const elemY = scrollY + elemClientRect.top; 
        
        if(scrollY + windowH - showTiming > elemY) {
            element[i].classList.add('is-show');
        } else if (scrollY + windowH < elemY) {
            element[i].classList.remove('is-show');
        }
    }
}
showElementAnimation();
window.addEventListener('scroll', showElementAnimation);


// jQuery実行
$(function(){
    moreBtn(); // もっとみるボタン
});

// もっとみるボタン
const moreBtn = () => {  
    const show = 5;
    const num = 999999999;
    const contents = '.items li';
    $(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
    $('.more').on('click', function () {
        $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
        if ($(contents + '.is-hidden').length == 0) {
            $('.more').fadeOut();
            $('.close').fadeIn();
        }
    });
    $('.close').on('click', function () {
        $(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
        $('.more').fadeIn();
        $('.close').fadeOut();
    });
}