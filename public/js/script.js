String.prototype.permalink = function () {
  return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};

$('.add-to-cart-btn').on('click', function () {
  var id = $(this).data('id');

  $.ajax({
    url: BASE_URL + 'shop/add-to-cart',
    type: 'GET',
    dataType: 'html',
    data: { pid: $(this).data('id') },
    success: function (res) {
      window.location.reload();
    }
  });
});
$('.original-text').on('keyup', function () {
  $('.target-text').val($(this).val().permalink());
});

$("#search").on('keyup', function () {

  var userSearch = $(this).val().trim();
  if (userSearch.length > 0) {
    $.ajax({
      url: BASE_URL + 'get-products-json',
      type: 'get',
      dataType: 'json',
      data: { search: userSearch },
      success: function (products) {

        var availableTags = [];
        $.each(products, function (key, val) {
          availableTags.push(val.ptitle)
        });

        $("#search").autocomplete({
          source: availableTags,
          select: function (event, ui) {
            for (var i = 0; i < products.length; i++) {
              if (products[i].ptitle == ui.item.value) {
                window.location = BASE_URL + 'shop/' + products[i].curl + '/' + products[i].purl;
              }
            }
          }
        });
      }
    });

  }

});









