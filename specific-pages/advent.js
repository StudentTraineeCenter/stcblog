function renderAdventCalendar() {
    // code;
}

/**
 * 
 * @param {} date in format "YYYY-MM-DD"
 * @returns "pass" or "today" or "future" status
 */
function getStatusByDate(date){
    let now = new Date();
    let date_t = new Date(date);

    if(date_t.getDate() > now.getDate()) return "pass";
    if(date_t.getDate() == now.getDate()) return "today";
    if(date_t.getDate() < now.getDate()) return "future";
}

class Pot{
    constructor(height, width, date){
        this.height = height;
        this.width = width;
        this.date = date;
        this.status = getStatusByDate(date);
    }
}

let pot = new Pot(2, 3, "2021-11-08");
console.log(pot);