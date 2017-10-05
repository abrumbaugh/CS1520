(function() {

  // array of the urls containing the data, don't really need the "?data=all"
  var urls = ["http://www.mattbowytz.com/simple_api.json?data=interests",
                "http://www.mattbowytz.com/simple_api.json?data=programming"];

  // grab the json data from each url and put it into an array
  $.each(urls, function(index, link) {
      $.ajax ({
          type: 'GET',
          url: link,
          dataType: 'json',
          success: function(data) {
              $.each(data.data, function(key, value) {
                  jsonDataArray = jsonDataArray.concat(value);
              });
          }
      });
  });

  // array that will contain the json values
  var jsonDataArray = new Array();

  $('.flexsearch-input').keyup(function() {
      var userInput = $('.flexsearch-input').val();
      $('.flexsearch-prediction').empty();

      if (userInput.length != 0) {
          var display = new Array();
          userInput = userInput.toLowerCase();
          $.each(jsonDataArray, function(key, element) {
              jsonValue = element.toLowerCase();
              if ((userInput.length <= jsonValue.length) && (userInput.length > 0)) {
                  if (jsonValue.substring(0, userInput.length) == userInput) {
                      display.push('<li>' + jsonValue + '</li>');
                      $('.flexsearch-prediction').html(display.join(""));
                  }
              }
          });
      }
  });
})();
