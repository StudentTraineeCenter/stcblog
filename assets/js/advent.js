
let is_rendered = false;

/**
 * Function to create the grid.
 * @param {*} id name of \<div\> block
 */
function renderAdventCalendar(id) {
   for (let i = 1; i <= 24; i++) {
      let date = "2021-12-";
      if (i > 9) {
         date += i.toString();
      } else {
         date += "0";
         date += i.toString();
      }
      // console.log(date);

      let pot = new Pot(i, date);
      pot.constructPot(id);
   }
   is_rendered = true;
}

/**
 * Function return status by date.
 * @param {} date in format "YYYY-MM-DD"
 * @returns "pass" or "today" or "future" status
 */
function getStatusByDate(date) {
   let now = new Date();
   let date_t = new Date(date);

   if (date_t.getDate() < now.getDate()) return "pass";
   if (date_t.getDate() == now.getDate()) return "today";
   if (date_t.getDate() > now.getDate()) return "future";
}

function getImgLocation(potId) {
   let image_l = [1, 4, 8, 9, 10, 11, 12, 16, 17, 18, 24];
   if (image_l.includes(potId)) {
      if (potId < 10)
         return `<img class="advent-img" src="${imgUrl}0${potId}.png">`;
      return `<img class="advent-img" src="${imgUrl}${potId}.png"></img>`;
   }
   return "";
}

links = ["https://studuj.digital/adventni-kalendar/advent/", "https://studuj.digital/adventni-kalendar/betlem/", "https://studuj.digital/adventni-kalendar/betlemska-koleda/", "https://studuj.digital/adventni-kalendar/svatek-sv-barbory/", "https://studuj.digital/adventni-kalendar/svicky/", "https://studuj.digital/adventni-kalendar/svatek-sv-mikulase/", "https://studuj.digital/adventni-kalendar/vanoce-v-anglii-i/", "https://studuj.digital/adventni-kalendar/vanoce-v-anglii-ii/", "https://studuj.digital/adventni-kalendar/vanoce-v-japonsku-i/", "https://studuj.digital/adventni-kalendar/vanoce-v-japonsku-ii/", "https://studuj.digital/adventni-kalendar/origami/", "https://studuj.digital/adventni-kalendar/vanocni-koledy/", "https://studuj.digital/adventni-kalendar/svatek-sv-lucie/", "https://studuj.digital/adventni-kalendar/vanoce-v-italii-i/", "https://studuj.digital/adventni-kalendar/vanoce-v-italii-ii/", "https://studuj.digital/adventni-kalendar/americke-vanoce/", "https://studuj.digital/adventni-kalendar/zajimave-tradice-ve-svete/", "https://studuj.digital/adventni-kalendar/baleni-darku/", "https://studuj.digital/adventni-kalendar/5-vanocnich-klasik-ktere-musite-videt/", "https://studuj.digital/adventni-kalendar/vanoce-na-filipinach-i/", "https://studuj.digital/adventni-kalendar/vanoce-na-filipinach-ii/", "https://studuj.digital/adventni-kalendar/vanocni-stromecek/", "https://studuj.digital/adventni-kalendar/stedrovecerni-tabule/", "https://studuj.digital/adventni-kalendar/stedry-den/"];

class Pot {
   constructor(potId, date) {
      this.potId = potId;
      this.date = date;
      this.status = getStatusByDate(date);
      this.imgHtml = getImgLocation(potId);
      if (this.status != "future") {
         this.link = links[potId - 1];
      } else {
         this.link = " ";
      }
   }

   constructPot(id) {
      // let ret = `<div class="pot pot${this.potId} ${this.status}">${this.imgHtml}</div>`;
      let ret = `<a href="${this.link}" target="_blank" class="pot pot${this.potId} ${this.status}"><span class="invisible">${this.potId}.</span>${this.imgHtml}<span>${this.potId}.</span></a>`;
      document.getElementById(id).innerHTML += ret;
   }
}

/**
 * Function wait for signal if calendar is rendered
 * @returns 
 */
function wait() {
   return new Promise(function (resolve, reject) {
      (function waitForSignal() {
         if (is_rendered) return resolve();
         setTimeout(waitForSignal, 2000);
      })();
   });
}

async function setHeightByElPosition(elementTag, cssTargetId) {
   let position = 0;
   let el = document.getElementById(elementTag);
   await wait();
   position = el.getBoundingClientRect().top + window.scrollY;
   console.log(position);
   document.getElementById(cssTargetId).style.height = position + "px";
}

setHeightByElPosition("advent-border", "advent-background");

renderAdventCalendar("advent-calendar");
