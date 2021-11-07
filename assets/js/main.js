/**
 * Main script file.
 * @copyright Copyright (C) 2020 Ondrej Golasowski, Petr Kucera
 * @license GPL(GPLv3)
 */

 /* 
  * DOM
 */
const searchInputElement = document.getElementById("input_searchInput");

/*
 *  Load functions when page is fully loaded.
 */

$(document).ready(() => {
  console.log(`Document is ready @ ${performance.now()}ms`);
  searchForm();
  menu();
  removeImageAttr();
  addTOCIcon();
  window.onscroll = () => {
    backTopButton();
  };
  cookiesSetting();
});

const validateSearch = () => searchInputElement.value !== "";

function backTopButton() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $("#backTop").addClass("show");
  } else {
    $("#backTop").removeClass("show");
  }
}

function goTop() {
  if (
    document.body.scrollTop !== 0 ||
    document.documentElement.scrollTop !== 0
  ) {
    window.scrollBy(
      0,
      -Math.max(
        1,
        Math.floor(
          (document.body.scrollTop || document.documentElement.scrollTop) / 10
        )
      )
    );
    requestAnimationFrame(goTop);
  }
}

function menu() {
  $("#button_menu").on("click", () => {
    $("#button_menu").toggleClass("active");
    $("#section_menu").toggleClass("active");
  });
}

function searchForm() {
  $("#input_searchSubmit").on("click", () => {
    $("#input_search").submit();
  });

  $("#input_search").on({
    mouseenter: () => {
      $("#input_searchInput").addClass("active");
      $("#logo_stclogo").addClass("hidden");
    },

    focuson: () => {
      $("#input_searchInput").addClass("active");
      $("#logo_stclogo").addClass("hidden");
    },

    mouseleave: () => {
      if (
        !$("#input_searchInput").val() &&
        !$("#input_searchInput").is(":focus")
      ) {
        $("#input_searchInput").removeClass("active");
        $("#logo_stclogo").removeClass("hidden");
      }
    },

    focusout: () => {
      if (!$("#input_searchInput").val()) {
        $("#input_searchInput").removeClass("active");
        $("#logo_stclogo").removeClass("hidden");
      }
    },
  });
}

/**
 * @description Remove fixed img dimensions attributes.
 */
function removeImageAttr() {
  $("img").removeAttr("width height");
}

/**
 * @description Add MS icon to the Easy TOC plugin's TOC.
 */
function addTOCIcon() {
  $(".ez-toc-icon-toggle").addClass("ms-Icon ms-Icon--ContextMenu");
}

function cookiesSetting() {
  $("#cookies-notice-settings-triger").on("click", () => {
    $("#cookies-notice-settings").addClass("cookies-active");
    $("#cookies-notice-settings").removeClass("cookies-deactive");
  });
  $(".cookies-setting-close").on("click", () => {
    $("#cookies-notice-settings").removeClass("cookies-active");
    $("#cookies-notice-settings").addClass("cookies-deactive");
  });
}
