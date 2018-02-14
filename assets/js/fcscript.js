<script>
      $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,agendaDay'
      },
      

      defaultDate: '2019-02-01',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      selectable: true,
      selectHelper: true,
      select: function(start, end, jsEvent, view) {
        
        $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd').modal('show');
      },

      eventMouseover: function (data, event, view) {

            tooltip = '<div class="tooltiptopicevent" style="width:auto;height:auto;color:#fff;background:#00b4ab;position:absolute;z-index:10001;padding:10px 10px 10px 10px; border-radius: 5px; line-height: 200%;">' + '<b>Event: </b>' + data.title + '</br>' +'<b>Type: </b>' + data.type + '</br>' +'<b>Type: </b>' + data.venue + '</br>' + '<b>Start: </b>' + ': ' + data.start.format('YYYY-MM-DD HH:mm') + '</br>' + '<b>End: </b>' + ': ' + data.end.format('YYYY-MM-DD HH:mm') +'</div>';


              $("body").append(tooltip);
            $(this).mouseover(function (e) {
                $(this).css('z-index', 10000);
                $('.tooltiptopicevent').fadeIn('500');
                $('.tooltiptopicevent').fadeTo('10', 1.9);
            }).mousemove(function (e) {
                $('.tooltiptopicevent').css('top', e.pageY + 10);
                $('.tooltiptopicevent').css('left', e.pageX + 20);
            });


        },
        eventMouseout: function (data, event, view) {
            $(this).css('z-index', 8);

            $('.tooltiptopicevent').remove();

        },
      eventRender: function(event, element) {
        element.bind('dblclick', function() {

          // var string = moment(start).format('YYYY-MM-DD HH:mm:ss');

          $('#ModalEdit #id').val(event.id);
          $('#ModalEdit #title').val(event.title);
          $('#ModalEdit #type').val(event.type);
    $('#ModalEdit #venue').val(event.venue);
          $('#ModalEdit #color').val(event.color);
          $('#ModalEdit #start').val(event.start.format('YYYY-MM-DD HH:mm:ss'));    
          $('#ModalEdit #end').val(event.end.format('YYYY-MM-DD HH:mm:ss'));
          $('#ModalEdit').modal('show');
        });
      },
      eventDrop: function(event, delta, revertFunc) { // si changement de position

        edit(event);

      },
      eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

        edit(event);

      },
      events: [
      <?php foreach($events as $event): 
      
        $start = explode(" ", $event['start']);
        $end = explode(" ", $event['end']);
        if($start[1] == '00:00:00'){
          $start = $start[0];
        }else{
          $start = $event['start'];
        }
        if($end[1] == '00:00:00'){
          $end = $end[0];
        }else{
          $end = $event['end'];
        }
      ?>
        {
          id: '<?php echo $event['id']; ?>',
          title: '<?php echo $event['title']; ?>',
          venue: '<?php echo $event['venue']; ?>',
          type: '<?php echo $event['type']; ?>',
          start: '<?php echo $start; ?>',
          end: '<?php echo $end; ?>',
          color: '<?php echo $event['color']; ?>',
        },
      <?php endforeach; ?>
      ]
    });
    
    function edit(event){
      start = event.start.format('YYYY-MM-DD HH:mm:ss');
      if(event.end){
        end = event.end.format('YYYY-MM-DD HH:mm:ss');
      }else{
        end = start;
      }
      
      id =  event.id;
      
      Event = [];
      Event[0] = id;
      Event[1] = start;
      Event[2] = end;
      
      $.ajax({
       url: 'editEventDate.php',
       type: "POST",
       data: {Event:Event},
       success: function(rep) {
          if(rep == 'OK'){
            alert('Saved');
          }else{
            alert('Could not be saved. try again.'); 
          }
        }
      });
    }
    
  });

</script>