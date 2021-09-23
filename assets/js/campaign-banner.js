document.addEventListener("DOMContentLoaded", () => {
  campaignBanner("2021-9-13", "2021-10-31", "2021-11-14");
});

const headerEl = document.getElementById("header");

function campaignBanner(s_Date, sup_Date, e_Date) {
  const startDate = new Date(s_Date);
  const endDate = new Date(e_Date);
  const superDate = new Date(sup_Date)
  const now = new Date();

  if ((now < superDate) & (now > startDate)) {
    renderBanner();
  } else if ((now < endDate) & (now >= superDate)) {
    renderSuperBanner();
  }
}

function renderBanner() {
  headerEl.insertAdjacentHTML(
    "afterend",
    '<div class="campaign-banner"><p>Zdravíme, právě jsme spustili přihlášky do Microsoft STC. Zaregistruj se do 31. 10. 2021.</p><a href="https://aka.ms/stc2022" rel="noopener" target="_blank" ><button>Přidej se k nám!</button></a></div>'
  );
}

function renderSuperBanner() {
  headerEl.insertAdjacentHTML(
    "afterend",
    '<div class="campaign-banner"><p>Zdravíme, právě jsme spustili přihlášky do Microsoft STC. Zaregistruj se do 14. 11. 2021.</p><a href="https://aka.ms/stc2022" rel="noopener" target="_blank" ><button>Přidej se k nám!</button></a></div>'
  );
}
