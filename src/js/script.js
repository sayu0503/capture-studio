
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  //ドロワーメニュー
  $(".js-hamburger ").click(function () {
    if ($(this).hasClass("is-active")) {
      $(this).removeClass("is-active");
      $(".js-sp-nav").fadeOut(300);
      $(".header").removeClass("is-open");
    } else {
      $(this).addClass("is-active");
      $(".js-sp-nav").fadeIn(300);
      $(".header").addClass("is-open");
    }
  });

  //メニュー内リンクのクリック処理
  $(".js-sp-nav a").click(function (event) {
    const target = $(this).attr("href");

    if (target.startsWith("#")) {
      event.preventDefault();
      const position = $(target).offset().top;

      $("html, body").animate({ scrollTop: position }, 500);

      $(".js-hamburger").removeClass("is-active");
      $(".js-sp-nav").fadeOut(300);
      $(".header").removeClass("is-open");
    } else {
      $(".js-hamburger").removeClass("is-active");
      $(".js-sp-nav").fadeOut(300);
      $(".header").removeClass("is-open");
    }
  });

  //PC幅にしたときハンバーガーメニューとドロワーを閉じる
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-sp-nav").fadeOut(300);
      $(".header").removeClass("is-open");
      $("body").css({ height: "", overflow: "" });
    }
  });

  //ハンバーガーメニュー展開時背景をスクロールさせない方法
  $(".js-hamburger .js-sp-nav").click(function () {
    if ($("body").css("overflow") === "hidden") {
      $("body").css({ height: "", overflow: "" });
    } else {
      $("body").css({ height: "100%", overflow: "hidden" });
    }
  });

  //メインビュースライド
  var swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });

  //ヘッダーの背景色変更
  const header = $("#js-header");
  const hero = $("#js-mv");
  $(window).on("scroll", function () {
    console.log($(this).scrollTop());
    const heroHeight = hero.height();
    console.log("mv height:" + heroHeight);
    if ($(this).scrollTop() > heroHeight) {
      header.addClass("is-dark");
    } else {
      header.removeClass("is-dark");
    }
  });

  //Campaignスライド
  var swiper = new Swiper(".js-campaign-swiper", {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    width: 284,
    speed: 1500,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    breakpoints: {
      // 768px以上の場合
      768: {
        slidesPerView: 3.5,
        spaceBetween: 40,
        width: 1265.5,
      }
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

//スクロールイベントでページトップボタンを表示/非表示
$(function () {
  $(".js-page-top").hide();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 70) {
      $(".js-page-top").fadeIn();
    } else {
      $(".js-page-top").fadeOut();
    }
    const scrollHeight = $(document).height();
    const scrollPosition = $(window).height() + $(window).scrollTop();
    const footHeight = $('footer').outerHeight();

    if (scrollHeight - scrollPosition <= footHeight) {
      $(".js-page-top").css({
        "position": "absolute",
        "bottom": 20 + footHeight,
      });
    } else {
      $(".js-page-top").css({
        "position": "fixed",
        "bottom": "16px",
      });
    }
  });
});

//背景色の後に画像やテキストが表示されるエフェクト
var box = $('.colorbox'),
  speed = 700;
box.each(function () {
  $(this).append('<div class="color"></div>')
  var color = $(this).find($('.color')),
    image = $(this).find('img');
  var counter = 0;
  image.css('opacity', '0');
  color.css('width', '0%');
  color.on('inview', function () {
    if (counter == 0) {
      $(this).delay(200).animate({ 'width': '100%' }, speed, function () {
        image.css('opacity', '1');
        $(this).css({ 'left': '0', 'right': 'auto' });
        $(this).animate({ 'width': '0%' }, speed);
      })
      counter = 1;
    }
  });
});

// モーダルを開く
$(".js-modal-open").on("click", function () {
  const img = $(this).find("img");
  const imgSrc = img.attr("src");
  const altText = img.attr("alt");

  const modalImg = $(".js-modal-img");

  // loadイベントの重複を防ぐ
  modalImg.hide().off("load").attr("src", imgSrc).attr("alt", altText).removeClass("modal__img--landscape modal__img--portrait");

  modalImg.on("load", function () {
    const isLandscape = this.naturalWidth > this.naturalHeight;
    modalImg.addClass(isLandscape ? "modal__img--landscape" : "modal__img--portrait");
    modalImg.show();
  });

  $(".js-modal").addClass("is-open");
  $("body").addClass("no-scroll");
});

// 背景クリック or 閉じるボタンでモーダルを閉じる
$(".js-modal, .js-modal-close").on("click", function (e) {
  if ($(e.target).hasClass("js-modal") || $(e.target).hasClass("js-modal-close")) {
    $(".js-modal").removeClass("is-open");
    $("body").removeClass("no-scroll");
  }
});


//タブ
$(function () {
  const tabButton = $(".js-tab-button"),
        tabContent = $(".js-tab-content");

  function handleHashChange(hash) {
    if (hash) {
      const targetTab = $(hash);
      if (targetTab.length) {
        // タブの切り替え
        tabButton.removeClass("is-active");
        tabContent.removeClass("is-active");

        const index = tabContent.index(targetTab);
        tabButton.eq(index).addClass("is-active");
        targetTab.addClass("is-active");

        // スクロール位置を調整
        const offset = 220;
        $("html, body").animate(
          { scrollTop: targetTab.offset().top - offset },
          300
        );
      }
    }
  }

  // ページロード時のハッシュ処理
  handleHashChange(window.location.hash);

  // タブボタンのクリックイベント
  tabButton.on("click", function () {
    let index = tabButton.index(this);
    // タブ切り替え
    tabButton.removeClass("is-active");
    $(this).addClass("is-active");
    tabContent.removeClass("is-active");
    tabContent.eq(index).addClass("is-active");
  });

  // ページ内リンククリック時の処理
  $("a[href^='#']").on("click", function (e) {
    e.preventDefault();
    const targetHash = $(this).attr("href");
    handleHashChange(targetHash); // ハッシュ処理を呼び出す
  });

  // ハッシュ変更時の処理（ブラウザの戻るボタンなどの対応）
  $(window).on("hashchange", function () {
    handleHashChange(window.location.hash);
  });
});


//サイドバーのアコーディオン
$(document).ready(function() {
  $(".js-accordion-title").click(function() {
      $(this).toggleClass("is-open");
      $(this).next(".sidebar__archive-months").slideToggle();
  });
});

//FAQのアコーディオン
$(document).ready(function () {
  $('.accordion__content').each(function () {
    $(this).show();
  });
  $('.accordion__header').click(function () {
    $(this).next('.accordion__content').slideToggle(200);
    $(this).toggleClass("is-open", 200);
  });
});

//フォームのバリデーション
jQuery(function ($) {
  $('.wpcf7').on('wpcf7invalid wpcf7spam wpcf7failed', function (event) {
    let errorMessage = $(this).find('.wpcf7-response-output');

    if (errorMessage.length) {
      $('html, body').animate({
        scrollTop: errorMessage.offset().top - 100
      }, 500);
    }
  });
});
//thanksページに遷移させる
document.addEventListener('DOMContentLoaded', function () {
  document.addEventListener('wpcf7mailsent', function (event) {
    window.location.href = '/thanks/';
  }, false);
});

//アンカーリンク
jQuery(document).ready(function ($) {
  const headerHeight = $("header").outerHeight();

  if (window.location.hash) {
      setTimeout(function () {
          const target = $(window.location.hash);
          if (target.length) {
              const targetPosition = target.offset().top - headerHeight - extraMargin;

              $("html, body").animate({ scrollTop: targetPosition }, 800, "swing");
          }
      }, 300);
  }
});

// スクロールして表示領域に入ったらclass付与
$(function () {
  $(".js-fadeUp").on("inview", function () {
    $(this).addClass("is-inview");
  });
});

// 左からフェードイン用
$(function () {
  $(".js-fadeLeft").on("inview", function () {
      $(this).addClass("inview");
  });
});