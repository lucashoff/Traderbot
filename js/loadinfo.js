$(document).ready(function(){

    var coin = 'BTC';
    var method = 'ticker';
    var url = 'https://www.mercadobitcoin.net/api/'+coin+'/'+method+'/';
  
    $.ajax({
      url : url,
      type: "get",
      dataType : "json",
      success : function(data){
        console.log(data);
  
        $('#maior-preco').append('R$ ' + Math.round(data.ticker.high, 2));
        $('#menor-preco').append('R$ ' + Math.round(data.ticker.low, 2));
      },
      error : function(erro){
        console.log(erro);
      }
    });
});