
//Indicate whether the shop is open/closed, or opening/closing soon;
var openOrClosed = function(){
	var currentDate = new Date(),
		today = currentDate.getDay(), //returns an integer, 0-6; Sunday = 0, Monday = 1, etc.;
		hour = currentDate.getHours(), //returns the current hour; 0-23, where 0 is midnight and 23 is 11PM;
		timeNow = document.getElementById("local_time"),
		open_or_closed = document.getElementById("open_or_closed"),
		open,
		weekday,
		openingSoonBool,
		closingSoonBool;
	if ( today === 1 || 2 || 3 || 4 || 5 ){
		weekday = true;
		if (hour >= 8 && hour < 17){
			open = true;
			if (hour === 16){
				closingSoonBool = true;
			} else {closingSoonBool = false};
		} else {
			open = false;
			if (hour === 7){
			openingSoonBool = true;
			} else {openingSoonBool = false};
		};
	}; //end if
	if (open === true && closingSoonBool === true){
		open_or_closed.innerHTML = "<span class='label label-success'>OPEN</span>, but <span class='label label-warning'>CLOSING SOON.</span>";
	} else if (open === true && closingSoonBool === false){
		open_or_closed.innerHTML = "<span class='label label-success'>OPEN.</span>";
	} else if (open === false && openingSoonBool === true){
		open_or_closed.innerHTML = "<span class='label label-danger'>CLOSED</span>, but <span class='label label-info'>OPENING SOON.</span>";
	} else if (open === false && openingSoonBool === false){
		open_or_closed.innerHTML = "<span class='label label-danger'>CLOSED.</span>";
	}; //end if
}; //end openOrClosed
openOrClosed();


//Set local time for the clock element;
var element = document.getElementById("local_time");
var createClock = function (clockElement) {
  var currentTime = function() { 
    return new Date();
    };
  
  var update = function() {
    var now = currentTime();
    var hours = now.getHours();
      //before reformatting hours, check to see if period should be AM or PM
      if (hours < 12) {
        var period = " AM";
      } else {
        period = " PM"
      };
      //reformat hours to 12-hour clock
      if (hours > 12) {
        hours = hours - 12;
      };
    var minutes = now.getMinutes();
  
    //examines the element passed to it and adds a zero in front if the element's value is less than ten.  
  var timePolice = function(t){
    if (t < 10){
      t = "0" + t;      
    } else {t = t};
    return t;
  };
    clockElement.innerHTML = " " + hours + ":" + timePolice(minutes) + period;
 };
  //setInterval( update, 1000 );
  update();
};
createClock( element );

