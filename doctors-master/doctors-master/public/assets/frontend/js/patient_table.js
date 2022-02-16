var dataSet = [
    [ "1", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "2", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "3", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "4", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "5", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "6", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "7", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "8", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "9", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "10", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "11", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "12", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "13", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
    [ "14", "03/02/2022", "This is for Patient Info.", "this is for Remarks", "Kill patient" ],
   
];
 
$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        columns: [
            { title: "Sl No" },
            { title: "Date" },
            { title: "Patient Info" },
            { title: "Remarks" },
            { title: "Action" },
        ],
    } );
} );