document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".swiper", {
        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index,className) {
            return `<span class=${className}><span>0${index+1}</span>
                        <span class="animate"></span>
                    </span>`
        }
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        
      });
      
      // 사용자의 드래그로 슬라이드 넘김을 방지
      swiper.on('touchStart', function() {
        if (swiper.autoplay.running) {
          swiper.autoplay.stop();
        }
      });
      
      swiper.on('touchEnd', function() {
        if (!swiper.autoplay.running) {
          swiper.autoplay.start();
        }
      });

      document.querySelector('nav#site-navigation').addEventListener('mouseover',function () {
        document.querySelector('header').classList.add('on');
      });
      document.querySelector('nav#site-navigation').addEventListener('mouseleave',function () {
        document.querySelector('header').classList.remove('on');
      });

      document.querySelector('.lang > button').addEventListener('click',()=>{
        document.querySelector('.lang-menu').classList.toggle('over');
      });
      
      document.querySelectorAll('.handheld-navigation ul.menu > li > a').forEach((ele,idx)=>{
        
        ele.addEventListener('click',(e)=>{
            e.preventDefault();
            document.querySelectorAll('.handheld-navigation ul.menu > li .sub-menu')[idx].classList.toggle('mobileon');
        })
      });

      document.querySelector('#site-navigation > button span').classList.add('sr-only');

      document.querySelector('#site-navigation-menu-toggle').addEventListener('click',(e)=>{
        e.preventDefault();
        document.querySelector('.handheld-navigation').classList.toggle('mbopen');
        document.querySelector('#site-navigation-menu-toggle').classList.toggle('closemenu');
        document.body.classList.toggle('dimmed');
      });

      window.addEventListener('scroll',()=>{
        if(window.scrollY > 0) {
            console.log('dd');
            document.querySelector('header').classList.add('scroll');
        }
        
      });

     /*  document.querySelector('.handheld-navigation').innerHTML = '<button><span class="sr-only">닫기버튼</button>' */
});