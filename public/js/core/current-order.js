$('#additional_info_form').on('submit' , function(e){
  e.preventDefault();
});

$('#motivation_form').on('submit' , function(e){
  e.preventDefault();
});

$('#docs_form').on('submit' , function(e){
  e.preventDefault();
});


$('#qualifications_form').on('submit' , function(e){
  e.preventDefault();
});

$('#job_form').on('submit' , function(e){
  e.preventDefault();
});


var i = 0;
var nav = '<ul class="nav navbar-nav d-xl-none">\
<li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"\
            data-feather="menu"></i></a></li>\
</ul>\
<div class="d-lg-block mr-2">\
<span id="tasks_completed"> <b> <span id="task_count"> 5 </span> /5 Tasks Completed , thank you! </b> </span> |\
Release your data, so that we can start\
</div>\
<div>\
<button class="btn btn-sm btn-danger strat-order"> Release Data </button>\
</div>';
$( function() {
  $( ".floating-nav-progress" ).progressbar({
    value: 7
  });
$( ".click_button" ).on( "click", function( event ) {
    $(this).attr('data-toggle' , 'collapse')
    $(this).closest('.collapse-icon-plus').toggleClass('changed');
    $(this).closest('.brdr-tp').addClass('green-box-shadow')
    
    i++;
    
    if(i !=0){
      $('.ui-widget-header').css('background','#28c76f')
      $('.ui-widget-header').css('border-color','#28c76f')
    }
    if(i == 1){
      $('.ui-widget-header').css('background','#ed731f')
      $('.ui-widget-header').css('border-color','#ed731f')
      $('#task_count').html('1');
    }else if(i ==2){
      $('.ui-widget-header').css('background','#edc61f')
      $('.ui-widget-header').css('border-color','#edc61f')
      $('#task_count').html('2');
    }else if(i == 3){
      $('.ui-widget-header').css('background','#c0ed1f')
      $('.ui-widget-header').css('border-color','#c0ed1f')
      $('#task_count').html('3');
    }else if(i ==4){
      $('.ui-widget-header').css('background','#74ed1f')
      $('.ui-widget-header').css('border-color','#74ed1f')
      $('#task_count').html('4');
    }else{
      $('.ui-widget-header').css('background','#1fed2f')
      $('.ui-widget-header').css('border-color','#1fed2f')
      $('#task_count').html('5');
      $('#nav-bookmark-wrapper').css('background-color' , '#28c76f')
      $('#nav-bookmark-wrapper').html(nav)
    }

    var target = $( event.target ),
    progressbar = $( ".floating-nav-progress" ),
    progressbar_width = progressbar.width(),
    progressbar_width_part = progressbar_width/5,
    progressbar_width_part_100 = ((progressbar_width/5)/progressbar_width)*100,
    progressbarValue = progressbar.find( ".ui-progressbar-value" );

  console.log(progressbar_width , progressbar_width/5 , ((progressbar_width/5)/progressbar_width)*100)
    progressbar.progressbar( "option", {
      value: progressbar_width_part_100 * i,
    });

    // $(this).attr('data-toggle' , 'trie')
});
} );