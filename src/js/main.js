import $ from "jquery";
$(document).ready(function(){
  //console.log('Jq is ok');

  // ref handLebars
  var singleList = $('.single-list');

  // template di handLebars
  var source = $('#template').html();
  var template = Handlebars.compile(source);

  $.ajax({
    url : 'partials/templates/data-json.php',
    method : 'GET',
    dataType : 'json',
    success:function(data){
      console.log(data);
      for(var i=0 ;i < data.length; i++){
        var context = {
          cover : data[i].cover,
          artist : data[i].artist,
          track : data[i].track,
          album : data[i].album,
          year : data[i].year
        };
        var output = template(context);
        singleList.append(output);
      };
      },
    error: function() {
      console.log('Have a problem');
    }
  });

});
