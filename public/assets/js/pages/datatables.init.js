$(document).ready(function(){$("#basic-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}});var a=$("#datatable-buttons").DataTable({lengthChange:!1,buttons:[{extend:"copy",className:"btn-light"},{extend:"print",className:"btn-light"},{extend:"pdf",className:"btn-light"}],language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}});$("#selection-datatable").DataTable({select:{style:"multi"},language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#key-datatable").DataTable({keys:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$("#alternative-page-datatable").DataTable({pagingType:"full_numbers",drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#scroll-vertical-datatable").DataTable({scrollY:"350px",scrollCollapse:!0,paging:!1,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#scroll-horizontal-datatable").DataTable({scrollX:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#complex-header-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")},columnDefs:[{visible:!1,targets:-1}]}),$("#row-callback-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")},createdRow:function(a,e,t){15e4<+e[5].replace(/[\$,]/g,"")&&$("td",a).eq(5).addClass("text-danger")}}),$("#state-saving-datatable").DataTable({stateSave:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$(".dataTables_length select").addClass("form-select form-select-sm"),$(".dataTables_length select").removeClass("custom-select custom-select-sm"),$(".dataTables_length label").addClass("form-label")});

$(document).ready(function () {
    var table = $(".datatable").DataTable({
        dom: 'Bflrtip',
        keys: true,
        stateSave: true,
        lengthChange: true, // Allow length change
        responsive: true, // Make table responsive
        // select: { style: "multi" }, // Multi-select
        pagingType: "full_numbers", // Full pagination style
        buttons: [
        { extend: "copy", className: "btn-light" },
        { extend: "print", className: "btn-light" },
        { extend: "pdf", className: "btn-light" },
        ],
        language: {
        paginate: {
            previous: "<i class='mdi mdi-chevron-left'>",
            next: "<i class='mdi mdi-chevron-right'>"
        }
        },
        drawCallback: function () {
        $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
        },
        columnDefs: [
        {
            visible: true, // Set all columns visible by default
            targets: "_all" // Apply to all columns
        }
        ],
        lengthMenu: [10, 25, 50, 100,500], // Page length options
        // createdRow: function (row, data, dataIndex) {
        // if (parseFloat(data[5].replace(/[\$,]/g, "")) > 150000) {
        //     $("td", row).eq(5).addClass("text-danger");
        // }
        // }
    });

    // Add the export buttons to the DOM
    // table.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");

    // Update the select dropdown styling
    // $(".dataTables_length select").addClass("form-select form-select-sm");
    // $(".dataTables_length select").removeClass("custom-select custom-select-sm");
    // $(".dataTables_length label").addClass("form-label");
});

          