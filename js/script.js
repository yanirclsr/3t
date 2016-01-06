$(document).ready(function(){
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
    $.fn.dataTable = '';
  //bs table for audiences page
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
    });
    
//    $.extend( true, $.fn.dataTable.defaults, {
//        "searching": false
//    });
//    
//    $('#audiences-table').DataTable({
//        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
//    });
    $('.user-name').click(function(){
        Parse.User.logOut();
        location.assign('/login.php');
    });
    
});