(function(win,doc){
    'use strict';

  //Exibir o calendário
  function getCalendar(perfil,div){

      let calendarEl = doc.querySelector(div);
    let calendar = new FullCalendar.Calendar(calendarEl, {
    
        initialView: 'dayGridMonth',
    
      headerToolbar: {
        start: 'prev,next,today',
        center: 'title',
        end: 'dayGridMonth, timeGridWeek, timeGridDay, listWeek'
      },

      buttonText:{
        today:    'Hoje',
        month:    'Mês',
        week:     'Semana',
        day:      'Dia',
        list:     'lista'
      },

      nowIndicator: true,
      locale:'pt-br',
      slotMinTime: '07:15:00',
      slotMaxTime: '22:00:00',
      weekends: false,
      slotDuration: '00:15',
      allDaySlot: false,
      showNonCurrentDates: true,
      dayMaxEventRows: 4,

  
      slotLabelFormat:{
        hour: 'numeric',
        minute: '2-digit',
        omitZeroMinute: false,
        meridiem: 'short'
      },
      
      dateClick: function(info) {
        if (perfil=='manager') {
            alert('vai pra página do manager');
        }else {
          alert('vai pra página do user');
        }
      },
      
      events: '../../controllers/ControllerEvents.php',

      eventClick: function(info) {
        if (perfil=='manager') {
            win.location.href=`/view/manager/editar?id=${info.event.id}`;
        }
      },

    });
    calendar.render();
  }

  if(doc.querySelector('.calendarUser')){
     getCalendar('user','.calendarUser');
    }else if (doc.querySelector('.calendarManager')){
      getCalendar('manager','.calendarManager');
  }
    
})(window,document);