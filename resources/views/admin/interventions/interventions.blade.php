@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Interventions</h1>
@endsection

@section('content')


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
  <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
  <script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
  <script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>

<!--   <script type="text/javascript" src="{{asset('js/jsCalendare/app.js') }}"></script> -->
  <link rel="stylesheet" href="{{asset('css/cssCalendare/app.css') }}" type="text/css" />


<script type="text/javascript">
  $(document).ready(function () {
    var appointments = new Array();

var appointment1 = {
    id_intervention: 1,
    interveur: "Himmi",
    salle: "A1",
    classe: "TDI",
    subject: "Gestion Projet",
    date_start: new Date(2019, 06, 30, 8, 0, 0),
    date_end: new Date(2019, 06, 30, 10, 0, 0)
}
var appointment2 = {
    id_intervention: 2,
    interveur: "Soukrat",
    salle: "A1",
    classe: "TDI",
    subject: "UML",
    date_start: new Date(2019, 06, 30, 10, 0, 0),
    date_end: new Date(2019, 06, 30, 12, 0, 0)
}
var appointment3 = {
    id_intervention: 3,
    interveur: "Khatib",
    salle: "A1",
    classe: "TDI",
    subject: "Java",
    date_start: new Date(2019, 06, 30, 12, 0, 0),
    date_end: new Date(2019, 06, 30, 2, 0, 0)
}
var appointment4 = {
    id_intervention: 4,
    interveur: "Mazraoui",
    salle: "A1",
    classe: "TDI",
    subject: "Oracle",
    date_start: new Date(2019, 06, 30, 2, 0, 0),
    date_end: new Date(2019, 06, 30, 4, 0, 0)
}
var appointment5 = {
    id_intervention: 5,
    interveur: "Elouer",
    salle: "A1",
    classe: "TDI",
    subject: "Php",
    date_start: new Date(2019, 06, 30, 4, 0, 0),
    date_end: new Date(2019, 06, 30, 6, 0, 0)
}

appointments.push(appointment1);
appointments.push(appointment2);
appointments.push(appointment3);
appointments.push(appointment4);
appointments.push(appointment5);


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
</script>
<div class="demo-container" id="html-2-pdfwrapper">
  <div id="scheduler">
        
  </div>  
  <button onclick="generate()" class="btn btn-primary mt-2 float-right">Generer PDF</button>
</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>


<script>
        //Global Variable Declaration
        var base64Img = null;
        margins = {
          top: 70,
          bottom: 40,
          left: 30,
          width: 550
        };

        /* append other function below: */


        generate = function()
        {
          var pdf = new jsPDF('p', 'pt', 'a4');
          pdf.setFontSize(18);
          pdf.fromHTML(document.getElementById('html-2-pdfwrapper'), 
            margins.left, // x coord
            margins.top,
            {
              // y coord
              width: margins.width// max width of content on PDF
            },function(dispose) {
              headerFooterFormatting(pdf)
            }, 
            margins);
            
          // var iframe = document.createElement('iframe');
          // iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:650px; padding:20px;');
          // document.body.appendChild(iframe);
          
          // iframe.src = pdf.output('datauristring');


           
            pdf.save('emploi.pdf')
        };


        function headerFooterFormatting(doc)
        {
            var totalPages  = doc.internal.getNumberOfPages();

            for(var i = totalPages; i >= 1; i--)
            { //make this page, the current page we are currently working on.
                doc.setPage(i);      
                              
                header(doc);
                
                footer(doc, i, totalPages);
                
            }
        };


        function header(doc)
        {
            doc.setFontSize(30);
            doc.setTextColor(40);
            doc.setFontStyle('normal');
          
            if (base64Img) {
               doc.addImage(base64Img, 'JPEG', margins.left, 10, 40,40);        
            }
              
            doc.text("Emploi du temps", margins.left + 50, 40 );
          
            doc.line(3, 70, margins.width + 43,70); // horizontal line
        };


        function footer(doc, pageNumber, totalPages){

            var str = "Page " + pageNumber + " of " + totalPages
           
            doc.setFontSize(10);
            doc.text(str, margins.left, doc.internal.pageSize.height - 20);
            
        };


        // You could either use a function similar to this or preconvert an image with, for example, http://dopiaza.org/tools/datauri
        // http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
        function imgToBase64(url, callback, imgVariable) {
         
            if (!window.FileReade) {
                callback(null);
                return;
            }
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                var reader = new FileReader();
                reader.onloadend = function() {
              imgVariable = reader.result.replace('text/xml', 'image/jpeg');
                    callback(imgVariable);
                };
                reader.readAsDataURL(xhr.response);
            };
            xhr.open('GET', url);
            xhr.send();
        };

        </script>



@endsection


