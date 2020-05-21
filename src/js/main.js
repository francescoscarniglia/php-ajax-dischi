import $ from "jquery";
$(document).ready(function(){
  //console.log('Jq is ok');

  // ref handLebars
  var singleList = '.single-list';

  // template di handLebars
  var source = $('#template').html();
  var template = Handlebars.compile(source);

  $.ajax({
    url : 'partials/templates/data-json.php',
    method : 'GET',
    dataType : 'json',
    success:function(data){
      console.log(data);
    },
    error: function() {
      console.log('Have a problem');
    }
  });

});
