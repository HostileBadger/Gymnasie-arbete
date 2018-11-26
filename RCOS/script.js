console.log('hej');

var Calender = document.querySelector('.datepicker');
var options = {
  disableWeekends:false,
  format:'dd mmmm yyyy',
  showClearBtn:true,
  disableDayFn: function(date) {
    if(date == 1 ) {
      return false;
    }
  }
};
M.Datepicker.init(Calender, options);
