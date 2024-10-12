let localeEn = {
    months : ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
    days: {
        1 : 'Lund',
        2 : 'Mar',
        3 : 'Mer',
        4 : 'Jeu',
        5 : 'Vend',
        6 : 'Sam',
        7 : 'Dim'
    },
    // days : ['Lund','Mar','Mer','Jeu','Vend','Sam','Dim']
}

new AirDatepicker('#datepicker', {
    locale : localeEn,
    days : localeEn.days,
    // selectedDates: [new Date()],
    dateFormat: 'yyyy-MM-dd',
    autoClose: true,
    position: 'right center',
    minDate : new Date (),
    // buttons: ['today', 'clear'], 
})