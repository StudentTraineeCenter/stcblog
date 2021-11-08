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

    let pot = new Pot(2, 3, date);
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

class Pot {
  constructor(height, width, date) {
    this.height = height;
    this.width = width;
    this.date = date;
    this.status = getStatusByDate(date);
  }

  constructPot(id) {
    let ret = `<div class="pot widht${this.width} height${this.height} ${this.status}"></div>`;
    document.getElementById(id).innerHTML += ret;
  }
}

renderAdventCalendar("advent-calendar");
