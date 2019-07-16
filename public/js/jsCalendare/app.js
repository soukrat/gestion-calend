$(document).ready(function () {
    var appointments = new Array();

var appointment1 = {
    id_intervention: 1,
    interveur: "Himmi",
    salle: "A1",
    classe: "TDI",
    subject: "Gestion Projet",
    date_start: new Date(2019, 06, 23, 9, 0, 0),
    date_end: new Date(2019, 06, 23, 12, 0, 0)
}


appointments.push(appointment1);


// prepare the data
var source =
{
    dataType: "array",
    dataFields: [
        { name: 'id_intervention', type: 'integer' },
        { name: 'interveur', type: 'string' },
        { name: 'salle', type: 'string' },
        { name: 'classe', type: 'string' },
        { name: 'subject', type: 'string' },
        { name: 'date_start', type: 'date' },
        { name: 'date_end', type: 'date' }
    ],
    id: 'id',
    localData: appointments
};
var adapter = new $.jqx.dataAdapter(source);
$("#scheduler").jqxScheduler({
    date: new $.jqx.date(),
    width: 850,
    height: 600,
    source: adapter,
    view: 'dayView',
    showLegend: true,
    ready: function () {
        $("#scheduler").jqxScheduler('ensureAppointmentVisible', 'id1');
    },
    resources:
    {
        colorScheme: "scheme05",
        dataField: "calendar",
        source:  new $.jqx.dataAdapter(source)
    },
    appointmentDataFields:
    {
        interveur: "interveur",
        salle: "salle",
        classe: "classe",
        from: "date_start",
        to: "date_end",
        id: "id",
        subject: "subject",
        resourceId: "calendar"
    },
    views:
    [
        'dayView',
        'weekView',
        'monthView'
    ]
});
});