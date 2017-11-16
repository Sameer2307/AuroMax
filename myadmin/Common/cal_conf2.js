
//Define calendar(s): addCalendar ("Unique Calendar Name", "Window title", "Form element's name", Form name")
addCalendar("calender1", "Select Date", "DOJ", "clientreg");
addCalendar("calender2", "Select Date", "DOJ", "clientreg");
addCalendar("calender3", "Select Date", "closingdate", "growt_closing");
addCalendar("calender31", "Select Date", "closingdate", "special_rewards");
addCalendar("calender41", "Select Date", "closingdate", "binary_closing");

addCalendar("calender42", "Select Date", "startingdate", "formID2");
addCalendar("calender43", "Select Date", "closingdate", "formID2");

addCalendar("CALRCPT", "Select Date", "paydate", "FRMBILLRCPT");
addCalendar("calchqdate", "Select Date", "chqdate", "FRMBILLRCPT");

// default settings for English
// Uncomment desired lines and modify its values
// setFont("verdana", 9);
 setWidth(90, 1, 15, 1);
// setColor("#cccccc", "#cccccc", "#ffffff", "#ffffff", "#333333", "#cccccc", "#333333");
// setFontColor("#333333", "#333333", "#333333", "#ffffff", "#333333");
 setFormat("yyyy-mm-dd");
// setSize(200, 200, -200, 16);

// setWeekDay(0);
// setMonthNames("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
// setDayNames("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
// setLinkNames("[Close]", "[Clear]");
