document.addEventListener("DOMContentLoaded", () => {
  campaignBanner("2021-9-13", "2021-11-1", "2021-11-14");
});

function campaignBanner(s_Date, sup_Date, e_Date) {
  let startDate = new Date(s_Date);
  let endDate = new Date(e_Date);
  let superDate = new Date(sup_Date)
  let now = new Date();

  // console.log("Start date: ", startDate.toLocaleString("cs-cz"));
  // console.log("End date: ", endDate.toLocaleString("cs-cz"));
  // console.log("Now is: ", now.toLocaleString("cs-cz"));
  // console.log("Super time: ", superDate.toLocaleString("cs-cz"));

  if ((now < superDate) & (now > startDate)) {
    renderBanner();
  } else if ((now < endDate) & (now >= superDate)) {
    renderSuperBanner();
  }
}

function renderBanner() {
  let el = document.getElementById("header");
  el.insertAdjacentHTML(
    "afterend",
    '<div class="campaign-banner"><p>Zdravíme, právě jsme spustili přihlášky do Microsoft STC. Zaregistruj se do 1. 11. 2021.</p><a href="https://aka.ms/stc2022" rel="noopener" target="_blank" ><button>Přidej se k nám!</button></a></div>'
  );
}

function renderSuperBanner() {
  let el = document.getElementById("header");
  el.insertAdjacentHTML(
    "afterend",
    '<div class="campaign-banner"><p>Zdravíme, právě jsme spustili přihlášky do Microsoft STC. Zaregistruj se do 14. 11. 2021.</p><a href="https://aka.ms/stc2022" rel="noopener" target="_blank" ><button>Přidej se k nám!</button></a></div>'
  );
}
