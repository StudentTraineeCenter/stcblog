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
    console.log(date);

    let pot = new Pot(i, date);
    pot.constructPot(id);
  }
}

/**
 * Function return status by date.
 * @param {} date in format "YYYY-MM-DD"
 * @returns "pass" or "today" or "future" status
 */
function getStatusByDate(date) {
  let now = new Date();
  let date_t = new Date(date);

  if (date_t.getDate() > now.getDate()) return "pass";
  if (date_t.getDate() == now.getDate()) return "today";
  if (date_t.getDate() < now.getDate()) return "future";
}

function getImgLocation(potId) {
  let image_l = [1, 4, 8, 9, 10, 11, 12, 16, 17, 18, 24];
  if (image_l.includes(potId)) {
    if (potId < 10)
    // ToDo: debug relative adress!
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
    this.imgHtml = getImgLocation(potId);
  }

  constructPot(id) {
    // let ret = `<div class="pot pot${this.potId} ${this.status}">${this.imgHtml}</div>`;
    let ret = `<div class="pot pot${this.potId} ${this.status}"><span class="invisible">${this.potId}.</span>${this.imgHtml}<span>${this.potId}.</span></div>`;
    document.getElementById(id).innerHTML += ret;
  }
}

renderAdventCalendar("advent-calendar");
