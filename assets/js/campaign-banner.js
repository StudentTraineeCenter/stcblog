document.addEventListener("DOMContentLoaded", () => {
  campaignBanner("2022-8-31", "2022-11-14", "2022-11-14");
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
    `
    <div class="campaign-banner">
      <a
        href="https://www.instagram.com/microsoftstc/"
        rel="nooperner"
        target="_blank"
      >
        <img
          src="/assets/img/kampan-2022.svg"
          class="campaign-tag"
          alt="Campaign tag #STC2023"
        />
      </a>
      <p>
        Přidej&nbsp;se do&nbsp;<strong>14&nbsp;11.</strong> do&nbsp;komunity
        Micrsoft&nbsp;STC a&nbsp;jdi své&nbsp;kariéře naproti.
      </p>
      <a href="TODO" rel="nooperner" target="_blank"
        ><button>Přihlásit se</button></a
      >
    </div>
    `
  );
}

function renderSuperBanner() {
  headerEl.insertAdjacentHTML(
    "afterend",
    `
    <div class="campaign-banner">
      <a
        href="https://www.instagram.com/microsoftstc/"
        rel="nooperner"
        target="_blank"
      >
        <img
          src="/assets/img/kampan-2022.svg"
          class="campaign-tag"
          alt="Campaign tag #STC2023"
        />
      </a>
      <p>
        Přidej&nbsp;se do&nbsp;<strong>14&nbsp;11.</strong> do&nbsp;komunity
        Micrsoft&nbsp;STC a&nbsp;jdi své&nbsp;kariéře naproti.
      </p>
      <a href="TODO" rel="nooperner" target="_blank"
        ><button>Přihlásit se</button></a
      >
    </div>`
  );
}
