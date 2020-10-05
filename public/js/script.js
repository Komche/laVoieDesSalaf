var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});

function addTableRow() {
    $tr = `<tr id="addPermission">
    <form >
            <td>
            <div class="form-group">
                <input type="text" required class="form-control" id="name" name="name" placeholder="Le nom du module">
            </div>
            </td>
            <td>
            <div class="form-group">
                <input required class="form-control" id="description" name="description" placeholder="description du module">
            </div>
            <div style="display:none" class="form-group">
                <input required class="form-control" id="sub_module" name="sub_module" value="`+$_GET['module']+`" placeholder="description du module">
            </div>
            </td>
            <td>
            <button type="button" onclick="addData('module')" class="btn btn-success">
                <i class="fa  fa-check-square white"></i>
                Valider
            </button>
            </td>
  </tr>`;
  if (!$("#addPermission").length) {
    $('#table_permission').append($tr);
  }
}
function addTableRowModel() {
    $tr = `<tr id="addModel">
    <form >
            <td>
            <div class="form-group">
                <input type="text" required class="form-control" id="model_key" name="model_key" placeholder="la propriété du model">
            </div>
           
            
            </td>
            
            
            <td>
            <button type="button" onclick="addModel('module')" class="btn btn-success">
                <i class="fa  fa-check-square white"></i>
                Valider
            </button>
            </td>
  </tr>`;
  if (!$("#addModel").length) {
    $('#table_model').append($tr);
  }
}

$(document).ready(function () {

    $('.link-gallery').click(function () {
        var descripcion = $(this).attr('title');
        $('#caption').html(descripcion);
        var img = $(this).find('img');
        var src = img.attr('src');
        $('#img01').attr('src', src);
        $('#myModal').css('display', 'block');
        $('.modal-backdrop').remove();
    });

    $('.close').click(function () {
        $('#myModal').css('display', 'none');
    });

});
// moment.locale('fr');

$exercice = "";

// $("#date_debut").on("change", function () { 
//     $exercice = "Exercice " +  moment($(this).val()).format('YYYY');
//     console.log($exercice);
//     $("#libelle").val($exercice);
//     $("#date_fin").prop("readonly", false);
//  });
// $("#date_fin").on("change", function () { 
//     $exercice +=  "-"+moment($(this).val()).format('YYYY');
//     $("#libelle").val($exercice);
//     $("#date_fin").prop("readonly", true);
//     $("#date_debut").prop("readonly", true);
//  });

 $("#inputSearch").on('keyup', function () { 
     
     table = $('#searchTable');
     tr = $('#searchTable tr');
     console.log("ok search", tr);
     input = this;
     filter = input.value.toUpperCase();

     for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            value = td.textContent ||td.innerText;
            if (value.toUpperCase().indexOf(filter)>1) {
                tr[i].style.display = "block";
            }else {
                tr[i].style.display = "none";
            }
        }
         
     }
  });