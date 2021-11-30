/**
 * Advent event js function
 * - render grid calendar
 * - set background height
 */

const links = [
   "https://studuj.digital/adventni-kalendar/advent/",
   "https://studuj.digital/adventni-kalendar/betlem/",
   "https://studuj.digital/adventni-kalendar/betlemska-koleda/",
   "https://studuj.digital/adventni-kalendar/svatek-sv-barbory/",
   "https://studuj.digital/adventni-kalendar/svicky/",
   "https://studuj.digital/adventni-kalendar/svatek-sv-mikulase/",
   "https://studuj.digital/adventni-kalendar/vanoce-v-anglii-i/",
   "https://studuj.digital/adventni-kalendar/vanoce-v-anglii-ii/",
   "https://studuj.digital/adventni-kalendar/vanoce-v-japonsku-i/",
   "https://studuj.digital/adventni-kalendar/vanoce-v-japonsku-ii/",
   "https://studuj.digital/adventni-kalendar/origami/",
   "https://studuj.digital/adventni-kalendar/vanocni-koledy/",
   "https://studuj.digital/adventni-kalendar/svatek-sv-lucie/",
   "https://studuj.digital/adventni-kalendar/vanoce-v-italii-i/",
   "https://studuj.digital/adventni-kalendar/vanoce-v-italii-ii/",
   "https://studuj.digital/adventni-kalendar/americke-vanoce/",
   "https://studuj.digital/adventni-kalendar/zajimave-tradice-ve-svete/",
   "https://studuj.digital/adventni-kalendar/baleni-darku/",
   "https://studuj.digital/adventni-kalendar/5-vanocnich-klasik-ktere-musite-videt/",
   "https://studuj.digital/adventni-kalendar/vanoce-na-filipinach-i/",
   "https://studuj.digital/adventni-kalendar/vanoce-na-filipinach-ii/",
   "https://studuj.digital/adventni-kalendar/vanocni-stromecek/",
   "https://studuj.digital/adventni-kalendar/stedrovecerni-tabule/",
   "https://studuj.digital/adventni-kalendar/stedry-den/",
];
let isRendered = false;

/**
 * Function to create the grid.
 * @param {*} id name of \<div\> block
 */
function renderAdventCalendar(id) {
   for (let i = 1; i <= 24; i++) {
      let date = "2021-12-";
      date += i.toString().padStart(2, '0');

      const pot = new Pot(i, date);
      pot.constructPot(id);
   }
   isRendered = true;
}

/**
 * Function return status by date.
 * @param { Date } date in format "YYYY-MM-DD"
 * @returns "pass" or "today" or "future" status
 */
function getStatusByDate(date) {
   const now = new Date();
   const dateTo = new Date(date);

   if (dateTo.getDate() < now.getDate()) return "pass";
   if (dateTo.getDate() === now.getDate()) return "today";
   if (dateTo.getDate() > now.getDate()) return "future";
}

function getImageLocation(potId) {
   const imageList = [1, 4, 8, 9, 10, 11, 12, 16, 17, 18, 24];
   if (imageList.includes(potId)) {
      if (potId < 10)
         return `<img class="advent-img" src="${imgUrl}0${potId}.png">`;
      return `<img class="advent-img" src="${imgUrl}${potId}.png"></img>`;
   }
   return "";
}

class Pot {
   constructor(potId, date) {
      this.potId = potId;
      this.date = date;
      this.status = getStatusByDate(date);
      this.imgHtml = getImageLocation(potId);
      if (this.status != "future") {
         this.link = links[potId - 1];
      } else {
         this.link = " ";
      }
   }

   constructPot(id) {
      // let ret = `<div class="pot pot${this.potId} ${this.status}">${this.imgHtml}</div>`;
      const currentPot = `<a href="${this.link}" target="_blank" class="pot pot${this.potId} ${this.status}"><span class="invisible">${this.potId}.</span>${this.imgHtml}<span>${this.potId}.</span></a>`;
      document.getElementById(id).innerHTML += currentPot;
   }
}

/**
 * Function wait for signal if calendar is rendered
 * @returns
 */
function wait() {
   return new Promise(function (resolve, _reject) {
      (function waitForSignal() {
         if (isRendered) return resolve();
         setTimeout(waitForSignal, 2000);
      })();
   });
}

async function setHeightByElPosition(elementTag, cssTargetId) {
   let position = 0;
   const el = document.getElementById(elementTag);
   await wait();
   position = el.getBoundingClientRect().top + window.scrollY;
   console.log(position);
   document.getElementById(cssTargetId).style.height = `${position}px`;
}

setHeightByElPosition("advent-border", "advent-background");

renderAdventCalendar("advent-calendar");
