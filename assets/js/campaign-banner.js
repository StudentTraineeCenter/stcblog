document.addEventListener("DOMContentLoaded", () => {
  campaignBanner("2022-9-12", "2022-11-14", "2022-11-20");
});

const headerEl = document.getElementById("header");

function campaignBanner(s_Date, sup_Date, e_Date) {
  const startDate = new Date(s_Date);
  const endDate = new Date(e_Date);
  const superDate = new Date(sup_Date);
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
         src="https://studuj.digital/wp-content/themes/stcblog/assets/img/kampan-2022.svg"
         class="campaign-tag"
         alt="Campaign tag #STC2023"
       />
     </a>
     <p>
       Přidej&nbsp;se do&nbsp;<strong>14.&nbsp;11.</strong> do&nbsp;komunity
       Microsoft&nbsp;STC a&nbsp;jdi své&nbsp;kariéře naproti.
     </p>
     <a href="https://prihlaska.studentstc.cz/" rel="nooperner" target="_blank"
       ><button>Přihlásit se <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="40" height="14" viewBox="-14 0 24 20" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
       <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
       <line x1="5" y1="12" x2="19" y2="12" />
       <line x1="13" y1="18" x2="19" y2="12" />
       <line x1="13" y1="6" x2="19" y2="12" />
     </svg></button></a
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
        src="https://studuj.digital/wp-content/themes/stcblog/assets/img/kampan-2022.svg"
        class="campaign-tag"
        alt="Campaign tag #STC2023"
      />
    </a>
    <p>
      Přidej&nbsp;se do&nbsp;<strong>20.&nbsp;11.</strong> do&nbsp;komunity
      Microsoft&nbsp;STC a&nbsp;jdi své&nbsp;kariéře naproti.
    </p>
    <a href="https://prihlaska.studentstc.cz/" rel="nooperner" target="_blank"
      ><button>Přihlásit se <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="40" height="14" viewBox="-14 0 24 20" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
      <line x1="5" y1="12" x2="19" y2="12" />
      <line x1="13" y1="18" x2="19" y2="12" />
      <line x1="13" y1="6" x2="19" y2="12" />
    </svg></button></a
    >
  </div>
  `
  );
}
